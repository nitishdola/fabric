<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PartyType, App\PartyGroup, App\Party;

use Validator,Redirect, DB, Crypt;

class PartiesController extends Controller
{
    public function create() {
    	$party_types 	= PartyType::orderBy('name')->lists('name', 'id')->toArray();
    	$party_groups 	= PartyGroup::orderBy('name')->lists('name', 'id')->toArray();

    	return view('parties.create', compact('party_types', 'party_groups'));
    }

    public function store(Request $request) {
    	$validator = Validator::make($data = $request->all(), Party::$rules);
        if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();

    	$message = '';

        if(Party::create($data)) {
            $message .= 'Party added successfully !';
         }else{
           $message .= 'Unable to add party !';
         }

        return Redirect::route('party.index')->with('message', $message);
    }

    public function index() {
    	$results = Party::where('status',1)->with(['party_type', 'party_group'])->paginate(30);
    	return view('parties.index', compact('results'));
    }

    public function edit($id) {
    	$id = Crypt::decrypt($id);
    	$party = Party::findOrFail($id);
    	$party_types 	= PartyType::orderBy('name')->lists('name', 'id')->toArray();
    	$party_groups 	= PartyGroup::orderBy('name')->lists('name', 'id')->toArray();

    	return view('parties.edit', compact('party', 'party_types', 'party_groups'));
    }

    public function update($id, Request $request) {
    	$id = Crypt::decrypt($id);
    	$party = Party::findOrFail($id);

    	$validator = Validator::make($data = $request->all(), Party::$edit_rules);
        if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();

    	$message = '';

    	$party->fill($data);

        if($party->save()) {
            $message .= 'Party updated successfully !';
        }else{
           $message .= 'Unable to updated party !';
        }

        return Redirect::route('party.index')->with('message', $message);
    }

    public function disable($id) {
        $id = Crypt::decrypt($id);
        $party = Party::findOrFail($id);
        $message = '';
        $party->status = 0;
        if($party->save()) {
            $message .= 'Party removed successfully !';
        }else{
           $message .= 'Unable to remove party !';
        }

        return Redirect::route('party.index')->with('message', $message);
    }

    public function view($id) {
        $id = Crypt::decrypt($id);
        $party = Party::whereId($id)->with('party_type', 'party_group')->first();
        return view('parties.view', compact('party'));
    }
}
