@extends('admin.layouts.master')
@section('title')  Details Info {{$party->name}} @stop

@section('content')
<div class="container-fluid main-content">
  <div class="page-title">
      <h2>
          {{$party->name}}
      </h2>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="col-lg-12">
        <div class="row">
          <h4>
            <label class="col-md-2">Short Name</label>
            <div class="col-md-10"> {{ $party->short_name}}</div>
          </h4>
        </div>
        

        <div class="row">
          <h4>
            <label class="col-md-2">Address</label>
            <div class="col-md-10"> {{ $party->address}}</div>
          </h4>
        </div>

        <div class="row">
          <h4>
            <label class="col-md-2">PIN</label>
            <div class="col-md-9"> {{ $party->pin}}</div>
          </h4>
        </div>

        <div class="row">
          <h4>
            <label class="col-md-2">Contact Person</label>
            <div class="col-md-9"> {{ $party->contact_person}}</div>
          </h4>
        </div>

        <div class="row">
          <h4>
            <label class="col-md-2">PIN</label>
            <div class="col-md-9"> {{ $party->pin}}</div>
          </h4>
        </div>

        <div class="row">
          <h4>
            <label class="col-md-2">Phone</label>
            <div class="col-md-9"> {{ $party->phone}}</div>
          </h4>
        </div>

        <div class="row">
          <h4>
            <label class="col-md-2">FAX</label>
            <div class="col-md-9"> {{ $party->fax}}</div>
          </h4>
        </div>

      </div>
    </div>

    <div class="col-md-6">
      <div class="col-lg-12">
        <div class="row">
          <h4>
            <label class="col-md-2">TNGST</label>
            <div class="col-md-10"> {{ $party->tngst}}</div>
          </h4>
        </div>
        <div class="row">
          <h4>
            <label class="col-md-2">CST</label>
            <div class="col-md-10"> {{ $party->cst}}</div>
          </h4>
        </div>

        <div class="row">
          <h4>
            <label class="col-md-2">Party Type</label>
            <div class="col-md-10"> {{ $party->party_type['name']}}</div>
          </h4>
        </div>

        <div class="row">
          <h4>
            <label class="col-md-2">Party Group</label>
            <div class="col-md-10"> {{ $party->party_group['name']}}</div>
          </h4>
        </div>

      </div>
    </div>

  </div>

  <div class="row">
          <h4>
            <label class="col-md-2">Remarks</label>
            <div class="col-md-10"> {{ $party->remarks}}</div>
          </h4>
        </div>

</div>
          