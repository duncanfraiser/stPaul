@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
		<center><h1>Following Christ Registration</h1></center><br>
{{Form::open(['method' => 'POST', 'action' => 'ChristLifeController@store'])}}
    <div class="checkbox">
    {{ Form::checkbox('completed', 'yes', null, ['style' =>'margin-left:0px']) }}{{ Form::label('completed', 'I completed the 7-week Discovering Christ Series and am ready to continue with the Following Christ Series. I commit to attend all seven Thursday evening sessions and the Saturday Retreat.":')}}
		       
    </div>
    <div class="form-group">
		{{ Form::label('day', 'Select Session Day:')}}
        {{Form::select('day', ['Tuesday' => 'Tuesday', 'Thursday' => 'Thursday'])}}
    </div>
    
	<div class="form-group">
		{{Form::label('firstName', 'Full Name:')}}
		{{Form::text('firstName', null, ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
		{{Form::text('middleName', null, ['class' => 'form-control', 'placeholder' => 'Enter Middle Name'])}}
		{{Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('age', 'Age:')}}
		{{Form::text('age', null, ['class' => 'form-control'])}}
	</div>
	<div class="form-group">
		{{ Form::label('gender', 'Select Session Day:')}}
        {{Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'])}}
    </div>
	<div class="form-group">
		{{Form::label('phone', 'Phone Number:')}}
		{{Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number'])}}
	</div>
	<div class="form-group">
		{{Form::label('text', 'Would you like to recieve text messages:')}}
		{{Form::select('text', ['Yes' => 'Yes', 'No' => 'No'])}}
	</div>
	<div class="form-group">
		{{Form::label('email', 'Primary Email Address:')}}
		{{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
	</div>
	<div class="form-group">
		{{Form::label('street', 'Address:')}}
		{{Form::text('street', null, ['class' => 'form-control', 'placeholder' => 'Enter Street'])}}
		{{Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Enter City'])}}
		{{Form::text('state', null, ['class' => 'form-control', 'placeholder' => 'Enter State'])}}
		{{Form::text('zip', null, ['class' => 'form-control', 'placeholder' => 'Enter Zip Code'])}}
	</div>
	<div class="form-group">
		{{Form::label('childcare', 'Would you need child care:')}}
		{{Form::select('childcare', ['Yes' => 'Yes', 'No' => 'No'])}}
	</div>
	<div class="form-group">
		{{Form::label('childage', 'If yes, ages of children:')}}
		{{Form::text('childage', null, ['class' => 'form-control', 'placeholder' => 'List Ages of Children'])}}
	</div>
		<div class="form-group">
		{{Form::label('ride', 'Would you require a ride:')}}
		{{Form::select('ride', ['Yes' => 'Yes', 'No' => 'No'])}}
	</div>
	
	<div class="form-group">
		{{Form::label('provideride', 'Can you provide a ride to someone in need of transportation:')}}
		{{Form::select('provideride', ['Yes' => 'Yes', 'No' => 'No'])}}
	</div>
	<div class="form-group">
		{{Form::label('allergies', 'List All Allergies:')}}
		{{Form::text('allergies', null, ['class' => 'form-control', 'placeholder' => 'List All Allergies'])}}
	</div>
	<div class="form-group">
		{{Form::label('comments', 'Additional Comments:')}}
		{{Form::textarea('comments', null, ['class' => 'form-control', 'placeholder' => 'Please Add Additional Comments'])}}
	</div>



	<div class="form-group">
		{{Form::submit('Sign Up', ['class' => 'btn btn-primary form-control'])}}
	</div>
{{Form::close()}}
</div>
@stop