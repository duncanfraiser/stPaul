@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br/>
<img width='100%' src="{{url('/banners/relEd.png/')}}"> 
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
		{{Form::label('info', 'Please enter information to be updated:')}}<br>
		{{Form::textarea('info', null, ['class' => 'form-control', 'placeholder' => "Enter Student's Updated Information"])}}
	</div>
	<div class="rightBtn">
		<a class="backBtn" href="{{URL::previous()}}">Cancel</a>
		{{Form::submit('Submit' , ['class' => 'blueBtn'])}}
	</div>
{{Form::close()}}
</div>
@stop