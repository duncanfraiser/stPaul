@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br/>
<img width='100%' src="{{url('/banners/ReligiousEdBanner.png/')}}"> 
<center><h1>Update Existing Student</h1></center>
{{Form::open(['method' => 'POST', 'action' => ['StudentUpdateController@store']])}}
	<div class="form-group">
		{{Form::label('name', "Please enter student's full name:")}}<br>
		{{Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Student Information'])}}
	</div>
	<div class="form-group">
		{{Form::label('father', "Please enter father's full name:")}}<br>
		{{Form::text('father', null, ['class' => 'form-control', 'placeholder' => "Enter Father's Full Name"])}}
	</div>
	<div class="form-group">
		{{Form::label('mother', "Please enter mother's full name")}}<br>
		{{Form::text('mother', null, ['class' => 'form-control', 'placeholder' => "Enter Mother's Full Name"])}}
	</div>	
	<div class="form-group">
		{{Form::label('grade', "Please enter grade 2017-18")}}<br>
		{{Form::text('grade', null, ['class' => 'form-control', 'placeholder' => "Enter grade 2017-18"])}}
	</div>
	<div class="form-group">
        @if($errors->has('school'))
          {{Form::label('school', 'School Attending:', ['class' => 'errs'])}}
		  {{Form::select('school', ['' => '-Please Select-','public' => 'public','private' => 'private','Catholic' => 'Catholic', 'homeschool' => 'homeschool'], null, ['class' => 'form-control errsInput'])}}
		@else
		  {{Form::label('school', 'School Attending:')}}
		  {{Form::select('school', ['' => '-Please Select-','public' => 'public','private' => 'private','Catholic' => 'Catholic', 'homeschool' => 'homeschool'], null,  ['class' => 'form-control'])}}
		@endif	
	</div>
	<div class="form-group">
		{{Form::label('info', 'Please enter contact information that needs to be updated:')}}<br>
		{{Form::textarea('info', null, ['class' => 'form-control', 'placeholder' => "Please enter contact information that needs to be updated."])}}
	</div>
	<div class="rightBtn">
		<a class="backBtn" href="{{URL::previous()}}">Cancel</a>
		{{Form::submit('Submit' , ['class' => 'blueBtn'])}}
	</div>
{{Form::close()}}
</div>
@stop