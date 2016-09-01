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
		<center><h1>Following Christ Registration</h1></center><br>
		

		@if($counttuesdays > 150 && $countthursdays >150)
		<center><h2>We're Sorry, Following Christ Registration is Full!</h2></center><br>
		@else

{{Form::open(['method' => 'POST', 'action' => 'ChristLifeController@store'])}}
    <div class="checkbox">
    {{ Form::checkbox('completed', 'yes', null, ['style' =>'margin-left:0px']) }}{{ Form::label('completed', 'I completed the 7-week Discovering Christ Series. I commit to attend all seven evening sessions and the Saturday Retreat.')}}		       
    </div>


 	<div class="form-group">
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
 	</div>


    
	<div class="form-group">
		{{Form::label('firstName', 'Full Name:')}}
		{{Form::text('firstName', null, ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
		{{Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('age', 'Age:')}}
		{{Form::text('age', null, ['class' => 'form-control'])}}
	</div>

	 <div class="form-group">
		{{ Form::label('gender', 'Select Gender:')}}<br />
    	{{ Form::radio('gender', 'Male') }} {{ Form::label('gender', 'Male')}}<br />
		{{ Form::radio('gender', 'Female') }} {{ Form::label('gender', 'Female')}}
 	</div>




	<div class="form-group">
		{{Form::label('phone', 'Phone Number:')}}
		{{Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number'])}}
	</div>

	 <div class="form-group">
		{{ Form::label('text', 'Would you like to receive text messages:')}}<br />
    	{{ Form::radio('text', 'Yes') }} {{ Form::label('text', 'Yes')}}<br />
		{{ Form::radio('text', 'No') }} {{ Form::label('text', 'No')}}
 	</div>



	<div class="form-group">
		{{Form::label('email', 'Primary Email Address:')}}
		{{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
	</div>
	<div class="form-group">
		{{Form::label('street', 'Address:')}}
		{{Form::text('street', null, ['class' => 'form-control', 'placeholder' => 'Enter Street'])}}
		{{Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Enter City'])}}
		{{Form::text('state', null, ['class' => 'form-control', 'placeholder' => 'Enter State'])}}
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
		{{ Form::label('ride', 'I require a ride:')}}<br />
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
		{{Form::label('comments', 'We have several volunteer opportunities for our Sunday morning and Wednesday Evening programs; including Children's Liturgy (during 10:30 am Sunday Mass), Religious Ed Classes (9:15-10:15 am Sunday), Youth Group (6:00-8:30 pm Wednesday), and special events throughout the year. In what ways are you interested in assisting with our Religious Ed & Youth Ministry?')}}
		{{Form::textarea('comments', null, ['class' => 'form-control'])}}
	</div>



	<div class="form-group">
		{{Form::submit('Sign Up', ['class' => 'btn btn-primary form-control'])}}
	</div>
{{Form::close()}}
</div>
@endif
@stop