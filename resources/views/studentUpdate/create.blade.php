@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br/>
<img width='100%' src="{{url('/banners/relEd.png/')}}"> 
<center><h1>Update Existing Student</h1></center>
{{Form::open(['method' => 'POST', 'action' => ['StudentUpdateController@store']])}}
	<div class="form-group">
		{{Form::label('info', 'Please enter updated information:')}}<br>
		{{Form::textarea('info', null, ['class' => 'form-control', 'placeholder' => 'Enter Student Information'])}}
	</div>
	<div class='pull-right'>
		<div class="form-group">
		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
		{{Form::close()}}		
		</div>
	</div>
</div>
@stop