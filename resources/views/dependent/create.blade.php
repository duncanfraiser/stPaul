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
			{{Form::text('firstName', null, ['class' => 'form-inline', 'placeholder' => 'Enter First Name'])}}
			{{Form::text('middleName', null, ['class' => 'form-inline', 'placeholder' => 'Enter Middle Name'])}}
			{{Form::text('lastName', null, ['class' => 'form-inline', 'placeholder' => 'Enter Last Name'])}}
			{{Form::label('sex', 'Sex:')}}
			{{Form::select('sex', ['Male' => 'Male', 'Female' => 'Female'])}}

		</div>		
		<div class="form-group">
			{{Form::label('perferedName', 'Prefer Name:')}}
			{{Form::text('perferedName', null, ['class' => 'form-control', 'placeholder' => 'Enter Prefered Name'])}}
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
			{{Form::text('school', null, ['class' => 'form-inline', 'placeholder' => 'Enter School Name'])}}
			{{Form::label('grade', 'Grade:')}}
			{{Form::text('grade', null, ['class' => 'form-inline', 'placeholder' => 'Enter Grade'])}}
		</div>
		<div class="form-group">
			{{Form::label('active', 'Active Catholic:')}}
			{{Form::select('active', ['Yes' => 'Yes', 'No' => 'No'])}}
			{{Form::label('ifNo', 'If no, list religion:')}}
			{{Form::text('ifNo', null, ['class' => 'form-inline', 'placeholder' => 'Enter Religion'])}}
		</div>
		<div class="form-group">
			{{Form::label('badDate', 'Date of Baptism:')}}
			{{Form::input('date', 'bapDate', null, ['class' => 'form-inline'])}}
			{{Form::label('bapParish', 'Name of Parish:')}}
			{{Form::text('bapParish', null, ['class' => 'form-inline', 'placeholder' => 'Enter Parish'])}}
			{{Form::label('bapPlace', 'Location:')}}
			{{Form::text('bapPlace', null, ['class' => 'form-inline', 'placeholder' => 'City, State'])}}
		</div>
		<div class="form-group">
			{{Form::label('recDate', 'Date of Frist Reconciliation:')}}
			{{Form::input('date', 'recDate', null, ['class' => 'form-inline'])}}
			{{Form::label('recParish', 'Name of Parish:')}}
			{{Form::text('recParish', null, ['class' => 'form-inline', 'placeholder' => 'Enter Parish'])}}
			{{Form::label('recPlace', 'Location:')}}
			{{Form::text('recPlace', null, ['class' => 'form-inline', 'placeholder' => 'City, State'])}}
		</div>
		<div class="form-group">
			{{Form::label('commDate', 'Date of Frist Communion:')}}
			{{Form::input('date', 'commDate', null, ['class' => 'form-inline'])}}
			{{Form::label('commParish', 'Name of Parish:')}}
			{{Form::text('commParish', null, ['class' => 'form-inline', 'placeholder' => 'Enter Parish'])}}
			{{Form::label('commPlace', 'Location:')}}
			{{Form::text('commPlace', null, ['class' => 'form-inline', 'placeholder' => 'City, State'])}}
		</div>
		<div class="form-group">
			{{Form::label('confirmDate', 'Date of Frist Comm:')}}
			{{Form::input('date', 'confirmDate', null, ['class' => 'form-inline'])}}
			{{Form::label('confirmParish', 'Name of Parish:')}}
			{{Form::text('confirmParish', null, ['class' => 'form-inline', 'placeholder' => 'Enter Parish'])}}
			{{Form::label('confirmPlace', 'Location:')}}
			{{Form::text('confirmPlace', null, ['class' => 'form-inline', 'placeholder' => 'City, State'])}}
		</div>
		<div class="form-group">
			{{Form::submit('Add Member', ['class' => 'btn btn-primary form-control'])}}
		</div>
{{Form::close()}}
</div>




@stop