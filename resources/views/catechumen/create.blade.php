@extends('includes.layout')
@section('content')
<div class="DFcontainer col-md-8 col-md-offset-2"> 
{{Form::open(['method' => 'POST', 'action' => 'CatechumensController@store'])}}
	<div class="form-group">
		{{Form::label('firstName', 'Full Name:')}}
		{{Form::text('firstName', null, ['class' => 'form-inline', 'placeholder' => 'Enter First Name'])}}
		{{Form::text('middleName', null, ['class' => 'form-inline', 'placeholder' => 'Enter Middle Name'])}}
		{{Form::text('lastName', null, ['class' => 'form-inline', 'placeholder' => 'Enter Last Name'])}}
		{{Form::text('maidenName', null, ['class' => 'form-inline', 'placeholder' => 'Enter Last Name'])}}
	</div>
		<div class="form-group">
		{{Form::label('homePhone', 'Home Phone Number:')}}
		{{Form::text('homePhone', null, ['class' => 'form-control', 'placeholder' => 'Enter Home Phone Number'])}}
		{{Form::label('cellPhone', 'Cell Phone Number:')}}
		{{Form::text('cellPhone', null, ['class' => 'form-control', 'placeholder' => 'Enter Cell Phone Number'])}}
	</div>
	<div class="form-group">
		{{Form::label('dob', 'Date of Birth:')}}
		{{Form::input('date', 'dob', null, ['class' => 'form-control'])}}
	</div>
	<div class="form-group">
		{{Form::label('phone', 'Occupation:')}}
		{{Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Enter Occupation'])}}
		{{Form::label('workPhone', 'Work Number:')}}
		{{Form::text('workPhone', null, ['class' => 'form-control', 'placeholder' => 'Enter Work Phone Number'])}}
		{{Form::label('email', 'Primary Email Address:')}}
		{{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
	</div>
	<div class="form-group">
		{{Form::label('baptized', 'Have you ever been baptized?')}}
		{{Form::select('baptized', ['No' => 'No', 'Yes' => 'Yes'])}}
		{{Form::label('bapChurch', 'If Yes, Where?')}}
		{{Form::text('bapChurch', null, ['class' => 'form-inline', 'placeholder' => 'Enter Church'])}}
		{{Form::label('bapDate', 'Date of Baptism:')}}
		{{Form::input('date', 'bapDate', null, ['class' => 'form-control'])}}
		{{Form::label('practiced', 'If you are baptized Catholic, have you practiced your faith?')}}
		{{Form::select('practiced', ['No' => 'No', 'Yes' => 'Yes'])}}
		{{Form::label('why', 'Why are you interested in the Catholic Church at this time?')}}
		{{Form::textarea('why', null, ['class' => 'form-control', 'placeholder' => 'Enter Why'])}}
	</div>
	<div class="form-group">
		{{Form::label('dadFirstName', 'Father\'s Full Name:')}}
		{{Form::text('dadFirstName', null, ['class' => 'form-inline', 'placeholder' => 'Enter First Name'])}}
		{{Form::text('dadMiddleName', null, ['class' => 'form-inline', 'placeholder' => 'Enter Middle Name'])}}
		{{Form::text('dadLastName', null, ['class' => 'form-inline', 'placeholder' => 'Enter Last Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('momFirstName', 'Mother\'s Full Name:')}}
		{{Form::text('momFirstName', null, ['class' => 'form-inline', 'placeholder' => 'Enter First Name'])}}
		{{Form::text('momMiddleName', null, ['class' => 'form-inline', 'placeholder' => 'Enter Middle Name'])}}
		{{Form::text('momLastName', null, ['class' => 'form-inline', 'placeholder' => 'Enter Last Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('married', 'Are you presently married?')}}
		{{Form::select('married', ['No' => 'No', 'Yes' => 'Yes'])}}
		{{Form::label('firstMarriage', 'Is this the first marriage for you and your spouse?')}}
		{{Form::select('firstMarriage', ['No' => 'No', 'Yes' => 'Yes'])}}
	</div>
	<div class="form-group">
		{{Form::submit('Enter', ['class' => 'btn btn-primary form-control'])}}
	</div>
{{Form::close()}}
</div>
@stop