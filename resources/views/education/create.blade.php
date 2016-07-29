@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br />
{{Form::open(['method' => 'POST', 'action' => 'EducationController@store'])}}
	<div class="form-group">
		{{Form::label('firstName', 'Full Name:')}}
		{{Form::text('firstName', null, ['class' => 'form-inline', 'placeholder' => 'Enter First Name'])}}
		{{Form::text('middleName', null, ['class' => 'form-inline', 'placeholder' => 'Enter Middle Name'])}}
		{{Form::text('lastName', null, ['class' => 'form-inline', 'placeholder' => 'Enter Last Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('dob', 'Date of Birth:')}}
		{{Form::input('date', 'dob', null, ['class' => 'form-control'])}}
	</div>
	<div class="form-group">
		{{Form::label('phone', 'Phone Number:')}}
		{{Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number'])}}
	</div>
	<div class="form-group">
		{{Form::label('email', 'Primary Email Address:')}}
		{{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
	</div>
	<div class="form-group">
		{{Form::label('street', 'Address:')}}
		{{Form::text('street', null, ['class' => 'form-inline', 'placeholder' => 'Enter Street'])}}
		{{Form::text('city', null, ['class' => 'form-inline', 'placeholder' => 'Enter City'])}}
		{{Form::text('state', null, ['class' => 'form-inline', 'placeholder' => 'Enter State'])}}
		{{Form::text('zip', null, ['class' => 'form-inline', 'placeholder' => 'Enter Zip Code'])}}
	</div>
	<div class="form-group">
		{{Form::submit('Sign Up', ['class' => 'btn btn-primary form-control'])}}
	</div>
{{Form::close()}}
</div>
@stop