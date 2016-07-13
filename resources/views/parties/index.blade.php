@extends('admin.layouts.master')
@section('title') View All Parties @stop
@section('content')
<div class="row">
    <div class="page-title">
      <h1>
        View All Parties
      </h1>
    </div>
</div>
<div class="row">
	<div class="col-lg-12">
		@if(count($results))
		<div class="widget-container fluid-height clearfix">
			<div class="widget-content padded clearfix">
				@include('parties._list_all')  
			</div>
	    </div>
	    @else
	    <div class="alert alert-danger fade in">

	        <a href="#" class="close" data-dismiss="alert">&times;</a>

	        <strong>Oops!</strong> No results found 

	    </div>
	    @endif
	</div>
</div>
@stop