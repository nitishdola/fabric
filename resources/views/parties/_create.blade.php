<div class="col-md-6">
  <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Party Name', array('class' => 'col-md-2 control-label')) !!}
    <div class="col-md-10">
      {!! Form::text('name', null, ['class' => 'form-control required', 'id' => 'name', 'placeholder' => 'Party Name', 'autocomplete' => 'off', 'required' => 'true']) !!}
    </div>
    {!! $errors->first('name', '<span class="help-inline">:message</span>') !!}
  </div>
  <div class="form-group {{ $errors->has('short_name') ? 'has-error' : ''}}">
    {!! Form::label('short_name', '', array('class' => 'col-md-2 control-label')) !!}
    <div class="col-md-10">
      {!! Form::text('short_name', null, ['class' => 'form-control required', 'id' => 'short_name', 'placeholder' => 'Short Name', 'autocomplete' => 'off', 'required' => 'true']) !!}
    </div>
    {!! $errors->first('short_name', '<span class="help-inline">:message</span>') !!}
  </div>
  <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    {!! Form::label('address', '', array('class' => 'col-md-2 control-label')) !!}
    <div class="col-md-10">
      {!! Form::textarea('address', null, ['class' => 'form-control required', 'id' => 'address', 'rows' => 3,  'placeholder' => 'Address', 'autocomplete' => 'off', 'required' => 'true']) !!}
    </div>
    {!! $errors->first('address', '<span class="help-inline">:message</span>') !!}
  </div>

  <div class="form-group {{ $errors->has('pin') ? 'has-error' : ''}}">
    {!! Form::label('pin', '', array('class' => 'col-md-2 control-label')) !!}
    <div class="col-md-10">
      {!! Form::number('pin', null, ['class' => 'form-control required', 'id' => 'pin', 'placeholder' => 'PIN', 'autocomplete' => 'off', 'required' => 'true']) !!}
    </div>
    {!! $errors->first('pin', '<span class="help-inline">:message</span>') !!}
  </div>

  <div class="form-group {{ $errors->has('contact_person') ? 'has-error' : ''}}">
    {!! Form::label('contact_person', '', array('class' => 'col-md-2 control-label')) !!}
    <div class="col-md-10">
      {!! Form::text('contact_person', null, ['class' => 'form-control required', 'id' => 'contact_person', 'placeholder' => 'Contact Person', 'autocomplete' => 'off', 'required' => 'true']) !!}
    </div>
    {!! $errors->first('contact_person', '<span class="help-inline">:message</span>') !!}
  </div>

  <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    {!! Form::label('phone', '', array('class' => 'col-md-2 control-label')) !!}
    <div class="col-md-10">
      {!! Form::text('phone', null, ['class' => 'form-control required', 'id' => 'phone', 'placeholder' => 'Phone Number', 'autocomplete' => 'off', 'required' => 'true']) !!}
    </div>
    {!! $errors->first('phone', '<span class="help-inline">:message</span>') !!}
  </div>
</div>


<div class="col-md-6">
  <div class="form-group {{ $errors->has('fax') ? 'has-error' : ''}}">
    {!! Form::label('fax', '', array('class' => 'col-md-2 control-label')) !!}
    <div class="col-md-10">
      {!! Form::text('fax', null, ['class' => 'form-control required', 'id' => 'fax', 'placeholder' => 'Fax', 'autocomplete' => 'off',]) !!}
    </div>
    {!! $errors->first('fax', '<span class="help-inline">:message</span>') !!}
  </div>
  <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', '', array('class' => 'col-md-2 control-label')) !!}
    <div class="col-md-10">
      {!! Form::email('email', null, ['class' => 'form-control required', 'id' => 'email', 'placeholder' => 'Email', 'autocomplete' => 'off', ]) !!}
    </div>
    {!! $errors->first('email', '<span class="help-inline">:message</span>') !!}
  </div>
  <div class="form-group {{ $errors->has('tngst') ? 'has-error' : ''}}">
    {!! Form::label('tngst', 'TNGST', array('class' => 'col-md-2 control-label')) !!}
    <div class="col-md-10">
      {!! Form::text('tngst', null, ['class' => 'form-control required', 'id' => 'tngst', 'placeholder' => 'TNGST', 'autocomplete' => 'off', 'required' => 'true']) !!}
    </div>
    {!! $errors->first('tngst', '<span class="help-inline">:message</span>') !!}
  </div>
  <div class="form-group {{ $errors->has('cst') ? 'has-error' : ''}}">
    {!! Form::label('cst', 'CST', array('class' => 'col-md-2 control-label')) !!}
    <div class="col-md-10">
      {!! Form::text('cst', null, ['class' => 'form-control required', 'id' => 'cst', 'placeholder' => 'CST', 'autocomplete' => 'off', 'required' => 'true']) !!}
    </div>
    {!! $errors->first('cst', '<span class="help-inline">:message</span>') !!}
  </div>

  <div class="form-group {{ $errors->has('party_type_id') ? 'has-error' : ''}}">
    {!! Form::label('party_type_id', 'Party Type', array('class' => 'col-md-2 control-label')) !!}
    <div class="col-md-10">
      {!! Form::select('party_type_id', $party_types, null, ['class' => 'form-control required', 'id' => 'party_type_id', 'placeholder' => 'Select Party Type', 'required' => 'true']) !!}
    </div>
    {!! $errors->first('party_type_id', '<span class="help-inline">:message</span>') !!}
  </div>

  <div class="form-group {{ $errors->has('party_group_id') ? 'has-error' : ''}}">
    {!! Form::label('party_group_id', 'Party Group', array('class' => 'col-md-2 control-label')) !!}
    <div class="col-md-10">
      {!! Form::select('party_group_id', $party_groups, null, ['class' => 'form-control required', 'id' => 'party_group_id', 'placeholder' => 'Select Party Group', 'required' => 'true']) !!}
    </div>
    {!! $errors->first('party_group_id', '<span class="help-inline">:message</span>') !!}
  </div>
  <div class="form-group {{ $errors->has('remarks') ? 'has-error' : ''}}">
    {!! Form::label('remarks', '', array('class' => 'col-md-2 control-label')) !!}
    <div class="col-md-10">
      {!! Form::textarea('remarks', null, ['class' => 'form-control required', 'id' => 'remarks', 'rows' => 3,  'placeholder' => 'Address', 'autocomplete' => 'off']) !!}
    </div>
    {!! $errors->first('remarks', '<span class="help-inline">:message</span>') !!}
  </div>
</div>