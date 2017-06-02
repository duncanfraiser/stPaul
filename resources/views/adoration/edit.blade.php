@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
	<div class="col-md-12" style="margin-bottom:25px">
		<h2><center>
		  <span style="font-size: 90%">Please sign up to make one Holy Hour of Adoration<br/>
		  in room 107 of the Family Life Center.<br/>
		  St. Paul “40 Hours of Adoration” June 16-18, 2017<br/>
		  </span>
		  <span style="color: #337ab7; font-size: 125%"> Sit with Him, Adore Him, Listen to Him<br/></span>
		  <span style="font-size: 75%; background-color: yellow">We would like to have 5 people sign up per hour.<br/></span>
		  <span style="font-size: 75%">This will lead our Parish into the<br/>
		  Feast of The Most Holy Body and Blood of Christ.</span>
		</h2></center>
	</div>
  {{Form::model($adoration, ['method' => 'PATCH', 'action' => ['AdorationController@update', $adoration->id]])}}
	
<div class="form-group">
	{{Form::label('name', 'Full Name:')}}
	{{Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Full Name'])}}
</div>
<div class="form-group">
	{{Form::label('num', 'Enter Phone Number:')}}
	{{Form::text('num', null, ['class' => 'form-control', 'placeholder' => '(###) ###-####'])}}
</div>
	<div class="form-group">
		{{Form::submit('Sign Up', ['class' => 'btn btn-primary', 'style'=>'width:50%'])}}

	<a href="{{url('/adoration')}}"><button class="btn btn-secondary" style="width: 49%">Cancel</button></a>
	</div>




{{Form::close()}} 
</div>
@endsection