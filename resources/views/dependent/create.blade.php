@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
<div class="col-md-12">
    @if (count($errors))
    <ul class="err">
    @foreach($errors->all() as $error)
    <li class="err">{{$error}}</li>
    @endforeach
    </ul>
    @endif
</div>
		
		<center><h2>Dependent Currently Living in Household</h2></center>
		{{Form::hidden('member_id', Request::route()->member)}}
		<div class="form-group">
			{{Form::label('firstName', 'Full Name:')}}
			{{Form::text('firstName', null, ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
			{{Form::text('middleName', null, ['class' => 'form-control', 'placeholder' => 'Enter Middle Name'])}}
			{{Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
		</div>
		<div class="form-group">
			{{Form::label('sex', 'Gender:')}}
			{{Form::select('sex', ['' => '-Please Select-', 'Male' => 'Male', 'Female' => 'Female'])}}

		</div>		
		<div class="form-group">
			{{Form::label('perferedName', 'Preferred Name:')}}
			{{Form::text('perferedName', null, ['class' => 'form-control', 'placeholder' => 'Enter Preferred Name'])}}
		</div>
		<div class="form-group">
			{{Form::label('dob', 'Date of Birth:')}}
			{{Form::input('date', 'dob', null, ['class' => 'form-control'])}}
		</div>
		<div class="form-group">
			{{Form::label('cellPhone', 'Cell Phone:')}}
			{{Form::text('cellPhone', null, ['class' => 'form-control', 'placeholder' => 'Enter Cell Phone'])}}
		</div>
		<div class="form-group">
			{{Form::label('email', 'Primary Email Address:')}}
			{{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
		</div>
		<div class="form-group">
			{{Form::label('school', 'Name of School:')}}
			{{Form::text('school', null, ['class' => 'form-control', 'placeholder' => 'Enter School Name'])}}
		</div>
		<div class="form-group">
			{{Form::label('grade', 'Grade:')}}
			{{Form::select('grade', ['NULL' => '-Please Select-','3yr' => '3yr old','4yr' => '4 yr old','kindergarten' => 'kindergarten', '1' => '1st','2' => '2nd','3' => '3rd', '4' => '4th', '5' => '5th', '6' => '6th','7' => '7th','8' => '8th','9' => '9th','10' => '10th','11' => '11th','12' => '12th'])}}
		</div>
		<div class="form-group">
			{{Form::label('active', 'Active Catholic:')}}
			{{Form::select('active', ['Yes' => 'Yes', 'No' => 'No'])}}
				</div>
		<div class="form-group">
			{{Form::label('ifNo', 'If no, list religion:')}}
			{{Form::text('ifNo', null, ['class' => 'form-control', 'placeholder' => 'Enter Religion'])}}
		</div>
		<div class="form-group">
			{{Form::label('badDate', 'Date of Baptism:')}}
			{{Form::input('date', 'bapDate', null, ['class' => 'form-control'])}}
		</div>
		<div class="form-group">
			{{Form::label('bapParish', 'Name of Parish:')}}
			{{Form::text('bapParish', null, ['class' => 'form-control', 'placeholder' => 'Enter Parish'])}}
		</div>
		<div class="form-group">
			{{Form::label('bapPlace', 'Location:')}}
			{{Form::text('bapPlace', null, ['class' => 'form-control', 'placeholder' => 'City, State'])}}
		</div>
		<div class="form-group">
			{{Form::label('recDate', 'Date of First Reconciliation:')}}
			{{Form::input('date', 'recDate', null, ['class' => 'form-control'])}}
		</div>
		<div class="form-group">
			{{Form::label('recParish', 'Name of Parish:')}}
			{{Form::text('recParish', null, ['class' => 'form-control', 'placeholder' => 'Enter Parish'])}}
		</div>
		<div class="form-group">
			{{Form::label('recPlace', 'Location:')}}
			{{Form::text('recPlace', null, ['class' => 'form-control', 'placeholder' => 'City, State'])}}
		</div>
		<div class="form-group">
			{{Form::label('commDate', 'Date of Communion:')}}
			{{Form::input('date', 'commDate', null, ['class' => 'form-control'])}}
		</div>
		<div class="form-group">
			{{Form::label('commParish', 'Name of Parish:')}}
			{{Form::text('commParish', null, ['class' => 'form-control', 'placeholder' => 'Enter Parish'])}}
		</div>
		<div class="form-group">
			{{Form::label('commPlace', 'Location:')}}
			{{Form::text('commPlace', null, ['class' => 'form-control', 'placeholder' => 'City, State'])}}
		</div>
		<div class="form-group">
			{{Form::label('confirmDate', 'Date of First Confirmation:')}}
			{{Form::input('date', 'confirmDate', null, ['class' => 'form-control'])}}
		</div>
		<div class="form-group">
			{{Form::label('confirmParish', 'Name of Parish:')}}
			{{Form::text('confirmParish', null, ['class' => 'form-control', 'placeholder' => 'Enter Parish'])}}
		</div>
		<div class="form-group">
			{{Form::label('confirmPlace', 'Location:')}}
			{{Form::text('confirmPlace', null, ['class' => 'form-control', 'placeholder' => 'City, State'])}}
		</div>
		<div class="form-group">
			{{Form::submit('Add Member', ['class' => 'btn btn-primary form-control'])}}
		</div>
{{Form::close()}}
</div>




@stop