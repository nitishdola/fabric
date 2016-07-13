@extends('admin.layouts.master')
@section('title') Add a Party @stop

@section('content')
<div class="container-fluid main-content">
	<div class="page-title">
        <h1>
            Add Party
        </h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
        	<div class="widget-container fluid-height clearfix">
        		<div class="widget-content padded clearfix">
		        {!! Form::open(array('route' => 'party.store', 'id' => 'party.store', 'class' => 'form-horizontal row-border')) !!}
		            @include('parties._create')
		            {!! Form::label('', '', array('class' => 'col-md-4 control-label')) !!}
		            {!! Form:: submit('Submit', ['class' => 'btn btn-success']) !!}
		        {!!form::close()!!}
		        </div>
		    </div>
    	</div>
	</div>
</div>
@endsection