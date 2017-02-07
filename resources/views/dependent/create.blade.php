@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">

		<img width='100%' src="{{url('/banners/member_header.png/')}}">
		<center<h2>Dependent Currently Living in Household</h2></center>

	
	{{Form::open(['method' => 'POST', 'action' => ['DependentsController@store', $id]])}}
		{{Form::hidden('member_id', $id)}}
		<div class="form-group">
			{{Form::label('firstName', 'Full Name:')}}
				@if($errors->has('firstName') || $errors->has('lastName') )
		    	<ul class="err">
	    		<li class="err">Please Enter Full Name</li>
				</ul>
				@endif
			{{Form::text('firstName', null, ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
			{{Form::text('middleName', null, ['class' => 'form-control', 'placeholder' => 'Enter Middle Name'])}}
			{{Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
		</div>
		<div class="form-group">
			{{Form::label('sex', 'Gender:')}}<br/>
				@if($errors->has('sex'))
		    	<ul class="err">
	    		<li class="err">Please Select Gender</li>
				</ul>
				@endif
		{{Form::radio('sex', 'male') }} {{ Form::label('sex', 'Male')}}<br />
		{{Form::radio('sex', 'female') }} {{ Form::label('sex', 'Female')}}
		</div>		
		<div class="form-group">
			{{Form::label('perferedName', 'Preferred Name:')}}
			{{Form::text('perferedName', null, ['class' => 'form-control', 'placeholder' => 'Enter Preferred Name'])}}
		</div>
		<div class="form-group">
			{{Form::label('dob', 'Date of Birth:')}}
				@if($errors->has('dob'))
		    	<ul class="err">
	    		<li class="err">Please Enter Date of Birth</li>
				</ul>
				@endif
			{{Form::text('dob', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
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
			{{Form::label('active', 'Active Catholic:')}}<br/>
			{{Form::radio('active', 'yes') }} {{ Form::label('active', 'Yes')}}<br />
			{{Form::radio('active', 'no') }} {{ Form::label('active', 'No')}}
		</div>
		<div class="form-group">
			{{Form::label('ifNo', 'If no, list religion:')}}
			{{Form::text('ifNo', null, ['class' => 'form-control', 'placeholder' => 'Enter Religion'])}}
		</div>
		<div class="form-group">
			{{Form::label('badDate', 'Date of Baptism:')}}
			{{Form::text('bapDate', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
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
			{{Form::text('recDate', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
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
			{{Form::text('commDate', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
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
			{{Form::label('confirmDate', 'Date of Confirmation:')}}
			{{Form::text('confirmDate', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
		</div>
		<div class="form-group">
			{{Form::label('confirmParish', 'Name of Parish:')}}
			{{Form::text('confirmParish', null, ['class' => 'form-control', 'placeholder' => 'Enter Parish'])}}
		</div>
		<div class="form-group">
			{{Form::label('confirmPlace', 'Location:')}}
			{{Form::text('confirmPlace', null, ['class' => 'form-control', 'placeholder' => 'City, State'])}}
		</div>
		<div class='pull-right'>
		<div class="form-group">
			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
			{{Form::close()}}
		</div>

		</div>
	<a href="{{URL::previous()}}"><button class="pull-right btn btn-secondary">Cancel</button></a>

</div>




@stop