@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">

		<center><img width='100%' src="{{url('/banners/Discovering-Christ-logo.png/')}}"><h1>Registration</h1></center>
		<p style="font-size: 120%">We are offering night sessions, 6:30 - 9:00 pm on Thursdays March 30th, April 6th, 20th, 27th, May 4th, 11th & 18th. "We will not meet on April 13th so all may participate in our Holy Thursday Services." The Retreat will be Saturday, May 6th 8:30 am - 4:00 pm.<br/><br/><span style="font-style: italic; font-weight: 5">*This is a repeat of the first ChristLife Series, and is being offered for those who have not yet completed the Discovering Christ Sessions.</span><p/><br/>






		@if($counttuesdays > 150 && $countthursdays >150)
		<center><h2>We're Sorry, Following Christ Registration is Full!</h2></center><br>
		@else

{{Form::open(['method' => 'POST', 'action' => 'ChristLifeController@store'])}}
    <div class="checkbox">
    {{ Form::checkbox('completed', 'yes', null, ['style' =>'margin-left:0px']) }}{{ Form::label('completed', 'I commit to attend all seven Thursday evening sessions and the Saturday Retreat.')}}	
        			@if($errors->has('completed'))
		    	<ul class="err">
	    		<li class="err">Please Check Commit Box</li>
				</ul>
				@endif       
    </div>


{{--  	<div class="form-group">
		{{ Form::label('day', 'Select Session Day:')}}<br />
		@if($counttuesdays > 150)
		{{ Form::label('day', 'Tuesday Session is Full')}}<br />
		@else
		{{ Form::radio('day', 'Tuesday') }} {{ Form::label('day', 'Tuesday')}}<br />
		@endif
		@if($countthursdays > 150)
		{{ Form::label('day', 'Thursday Session is Full')}}<br />
		@else
		{{ Form::radio('day', 'Thursday') }} {{ Form::label('day', 'Thursday')}}<br />
		@endif
 	</div> --}}


    
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
{{Form::close()}}
</div>
@endif
@stop