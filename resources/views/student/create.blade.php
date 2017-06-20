
@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br />
<center><h1>Religious Education Classes<br/>Student Registration</h1></center>
<div class="col-md-12">
    @if (count($errors))
    <ul class="err">
    @foreach($errors->all() as $error)
    <li class="err">{{$error}}</li>
    @endforeach
    </ul>
    @endif
</div>
{{Form::open(['method' => 'POST', 'action' => ['StudentController@store', Request::route()->education]])}}
	<div class="form-group">
		{{Form::hidden('education_id', Request::route()->education)}}
		{{Form::label('firstName', 'Full Name:')}}
		{{Form::text('firstName', null, ['class' => 'form-control', 'placeholder' => 'First Name'])}}
		{{Form::text('middleName', null, ['class' => 'form-control', 'placeholder' => 'Middle Name'])}}
		{{Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
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
		 {{Form::select('grade', ['NULL' => '-Please Select-','3yr' => '3yr old','4yr' => '4 yr old','kindergarten' => 'kindergarten', '1' => '1st','2' => '2nd','3' => '3rd', '4' => '4th', '5' => '5th', '6' => '6th','7' => '7th','8' => '8th','9' => '9th','10' => '10th','11' => '11th','12' => '12th'])}}
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


	<div class='pull-right'>
		<div class="form-group">
		{{Form::submit('Enter', ['class' => 'btn btn-primary'])}}
		{{Form::close()}}		
		</div>
	</div>
	<a href="{{url('/')}}"><button class="pull-right btn btn-secondary">Cancel</button></a>
</div>		
@stop

@section('scripts')
@stop