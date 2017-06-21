@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br/>
<img class="banner" src="{{url('/banners/relEd.png/')}}">
<h3>ELDEST CHILD being registered for Religious Education Classes</h3>

{{Form::open(['method' => 'POST', 'action' => ['StudentController@store', Request::route()->education]])}}
	{{Form::hidden('education_id', Request::route()->education)}}
 	<div class="form-group">
        @if($errors->has('firstName') || $errors->has('lastName'))
          {{Form::label('firstName', 'Full Name:', ['class' => 'errs'])}}
		  {{Form::text('firstName', null, ['class' => 'form-control errsInput inputSpace', 'placeholder' => 'Enter First Name'])}}
		  {{Form::text('middleName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Middle Name'])}}
		  {{Form::text('lastName', null, ['class' => 'form-control errsInput inputSpace', 'placeholder' => 'Enter Last Name'])}}
		@else
		  {{Form::label('firstName', 'Full Name:')}}<br>
		  {{Form::text('firstName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter First Name'])}}
		  {{Form::text('middleName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Middle Name'])}}
		  {{Form::text('lastName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Last Name'])}}
		@endif	
	</div>


	<div class="form-group">
		{{Form::label('dob', 'Date of Birth:')}}<br>
		{{Form::text('dob', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
	</div>
	<div class="form-group">
		{{Form::label('age', 'Age:')}}<br>
		{{Form::text('age', null, ['class' => 'form-control', 'placeholder' => 'Enter Age'])}}
	</div>
		<div class="form-group">
		{{Form::label('grade', 'Grade:')}}<br>
		{{Form::select('grade', ['NULL' => 'Please Select','3yr' => '3yr old','4yr' => '4 yr old','kindergarten' => 'kindergarten', '1' => '1st','2' => '2nd','3' => '3rd', '4' => '4th', '5' => '5th', '6' => '6th','7' => '7th','8' => '8th','9' => '9th','10' => '10th','11' => '11th','12' => '12th'])}}
	</div>
	<div class="form-group">
		{{Form::label('school', 'School Attending:')}}<br>
		{{Form::text('school', null, ['class' => 'form-control', 'placeholder' => 'Enter School'])}}
	</div>
	<div class="form-group">
		{{Form::label('Date_of_Baptism', 'Date of Baptism:')}}<br>
		{{Form::text('Date_of_Baptism', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
	</div>
	<div class="form-group">
		{{Form::label('Baptism_Church', 'Church Name:')}}<br>
		{{Form::text('Baptism_Church', null, ['class' => 'form-control', 'placeholder' => 'Enter Church Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('Church_Address', 'Church Mailing Address:')}}<br>
		{{Form::text('Church_Address', null, ['class' => 'form-control', 'placeholder' => 'Enter Church Mailing Address'])}}
	</div>
	<div class="form-group">
		{{Form::label('Communion', 'Date of First Holy Communion:')}}<br>
		{{Form::text('Communion', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
	</div>
	<div class="form-group">
		{{Form::label('Communion_Church', 'Church:')}}<br>
		{{Form::text('Communion_Church', null, ['class' => 'form-control', 'placeholder' => 'Enter Church'])}}
	</div>
	<div class="form-group">
		{{Form::label('Confirmation', 'Date of Confirmation:')}}<br>
		{{Form::text('Confirmation', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
	</div>
	<div class="form-group">
		{{Form::label('Confirmation_Church', 'Church:')}}<br>
		{{Form::text('Confirmation_Church', null, ['class' => 'form-control', 'placeholder' => 'Enter Church'])}}
	</div>
	<div class="form-group">
		{{Form::label('email', 'Child&rsquo;s Email Address:')}}<br>
		{{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
	</div>
	<div class="form-group">
		{{Form::label('cell', 'Cell Phone:')}}<br>
		{{Form::text('cell', null, ['class' => 'form-control', 'placeholder' => '(###) ###-#####'])}}
	</div>
	<div class="form-group">
		{{Form::label('needs', 'Special Needs/Allergies:')}}
		{{Form::textarea('needs', null, ['class' => 'form-control', 'placeholder' => 'Enter Special Needs/Allergies'])}}
	</div>

	<div class="rightBtn">
		<a class="backBtn" href="{{url('/education/menu')}}">Cancel</a>
		{{Form::submit('Submit' , ['class' => 'blueBtn'])}}
	</div>
{{Form::close()}}
</div>

@stop