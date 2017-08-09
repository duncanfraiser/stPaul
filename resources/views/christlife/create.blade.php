@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2" style="margin-top: 15px">






 {{-- <a href="{{url('RCIA/create')}}"><img src="{{url('banners/gotGod.png/')}}" alt="St Paul Cathloic Church"></a> --}}
 		<center> <a href="{{url('RCIA/create')}}"><img width='100%' class="banner" src="{{url('banners/gotGod.png/')}}"></a>

 		<h1>Registration for Sharing Christ is closed.</h1><br/><h3 style="margin-top: 0px">We hope you can join us for the next offering of Sharing Christ <br/>to be scheduled in 2018.<br/>Please check back to see when the dates have been set.<br/>Thank you!</h3><br/>

		<p style="font-size: 120%; margin-bottom: 150px">Share your experience of ChristLife with others. Invite them to Discovering Christ which begins on September 12th!</span><p/><br/></center>

{{-- 



{{Form::open(['method' => 'POST', 'action' => 'ChristLifeController@store'])}}
    <div class="checkbox">
    {{ Form::checkbox('completed', 'yes', null, ['style' =>'margin-left:0px']) }}{{ Form::label('completed', 'I have completed the Discovering Christ and Following Christ Sessions, and I commit to attend all the Sharing Christ Sessions plus the Saturday Retreat.')}}	
        			@if($errors->has('completed'))
		    	<ul class="err">
	    		<li class="err">Please Check Commit Box</li>
				</ul>
				@endif       
    </div>

   
	<div class="form-group">
		{{Form::label('firstName', 'Full Name:')}}
				@if($errors->has('firstName') || $errors->has('lastName') )
		    	<ul class="err">
	    		<li class="err">Please Enter Full Name</li>
				</ul>
				@endif
		{{Form::text('firstName', null, ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
		{{Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}	

	</div>
	<div class="form-group">
		{{Form::label('age', 'Age:')}}
				@if($errors->has('age'))
		    	<ul class="err">
	    		<li class="err">Please Enter Age</li>
				</ul>
				@endif
		{{Form::text('age', null, ['class' => 'form-control'])}}
	</div>

	 <div class="form-group">
		{{ Form::label('gender', 'Select Gender:')}}<br />
				@if($errors->has('gender'))
		    	<ul class="err">
	    		<li class="err">Please Enter Gender</li>
				</ul>
				@endif
    	{{ Form::radio('gender', 'Male') }} {{ Form::label('gender', 'Male')}}<br />
		{{ Form::radio('gender', 'Female') }} {{ Form::label('gender', 'Female')}}
 	</div>




	<div class="form-group">
		{{Form::label('phone', 'Phone Number:')}}
				@if($errors->has('phone'))
		    	<ul class="err">
	    		<li class="err">Please Enter Phone Number</li>
				</ul>
				@endif		
		{{Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number'])}}
	</div>



	<div class="form-group">
	<p>Email is our primary form of communication. <br>If you do not have an email address, please call the office to register 601-992-9547.</p>
		{{Form::label('email', 'Primary Email Address:')}}
		{{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
	</div>
	<div class="form-group">
		{{Form::label('street', 'Address:')}}
				@if($errors->has('street'))
		    	<ul class="err">
	    		<li class="err">Please Enter Street</li>
				</ul>
				@endif		
		{{Form::text('street', null, ['class' => 'form-control', 'placeholder' => 'Enter Street'])}}
				@if($errors->has('city'))
		    	<ul class="err">
	    		<li class="err">Please Enter City</li>
				</ul>
				@endif		
		{{Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Enter City'])}}
				@if($errors->has('state'))
		    	<ul class="err">
	    		<li class="err">Please Enter State</li>
				</ul>
				@endif		
		{{Form::text('state', null, ['class' => 'form-control', 'placeholder' => 'Enter State'])}}
				@if($errors->has('zip'))
		    	<ul class="err">
	    		<li class="err">Please Enter Zip Code</li>
				</ul>
				@endif		
		{{Form::text('zip', null, ['class' => 'form-control', 'placeholder' => 'Enter Zip Code'])}}
	</div>

	 <div class="form-group">
		{{ Form::label('childcare', 'I need child care:')}}<br />
    	{{ Form::radio('childcare', 'Yes') }} {{ Form::label('childcare', 'Yes')}}<br />
		{{ Form::radio('childcare', 'No') }} {{ Form::label('childcare', 'No')}}
 	</div>




	<div class="form-group">
		{{Form::label('childage', 'If yes, ages of children:')}}
		{{Form::text('childage', null, ['class' => 'form-control', 'placeholder' => 'List Ages of Children'])}}
	</div>

	 <div class="form-group">
		{{ Form::label('ride', 'I need a ride:')}}<br />
    	{{ Form::radio('ride', 'Yes') }} {{ Form::label('ride', 'Yes')}}<br />
		{{ Form::radio('ride', 'No') }} {{ Form::label('ride', 'No')}}
 	</div>
	 <div class="form-group">
		{{ Form::label('provideride', 'I can provide a ride to someone in need of transportation:')}}<br />
    	{{ Form::radio('provideride', 'Yes') }} {{ Form::label('provideride', 'Yes')}}<br />
		{{ Form::radio('provideride', 'No') }} {{ Form::label('provideride', 'No')}}
 	</div>


	<div class="form-group">
		{{Form::label('allergies', 'List Food Allergies:')}}
		{{Form::text('allergies', null, ['class' => 'form-control', 'placeholder' => 'List Food Allergies'])}}
	</div>
	<div class="form-group">
		{{Form::label('comments', 'Additional Comments:')}}
		{{Form::textarea('comments', null, ['class' => 'form-control'])}}
	</div>




	<div class="form-group">
		{{Form::submit('Sign Up', ['class' => 'btn btn-primary form-control'])}}
	</div>
{{Form::close()}}  --}}




</div> 


@stop 