<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $fillable = array('name', 'short_name', 'address', 'pin', 'contact_person', 'phone', 'fax', 'email', 'tngst', 'cst', 'party_type_id', 'party_group_id', 'remarks');
	protected $table    = 'parties';
    protected $guarded  = ['_token'];

    public static $rules = [
    	'name' 				=>  'required',
    	'short_name' 		=>  'required|unique:parties',
    	'address' 			=>  'required|min:5',
    	'pin' 				=>  'required|digits:6|numeric',
    	'contact_person' 	=>  'required',
    	'phone'  			=>  'required|numeric',
    	//'fax'  				=>  '',
    	'email' 			=>  'email',
    	'party_type_id' 	=> 'required|exists:party_types,id',
    	'party_group_id' 	=> 'required|exists:party_groups,id',
    ];

    public static $edit_rules = [
        'name'              =>  'required',
        'short_name'        =>  'required',
        'address'           =>  'required|min:5',
        'pin'               =>  'required|digits:6|numeric',
        'contact_person'    =>  'required',
        'phone'             =>  'required|numeric',
        //'fax'                 =>  '',
        'email'             =>  'email',
        'party_type_id'     => 'required|exists:party_types,id',
        'party_group_id'    => 'required|exists:party_groups,id',
    ];

    public function party_type() 
	{
		return $this->belongsTo('App\PartyType', 'party_type_id');
	}

	public function party_group() 
	{
		return $this->belongsTo('App\PartyGroup', 'party_group_id');
	}
}
