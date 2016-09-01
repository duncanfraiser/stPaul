@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br />
<h1>Volunteer Registration Form</h1>
<div class="col-md-12">
    @if (count($errors))
    <ul class="err">
    @foreach($errors->all() as $error)
    <li class="err">{{$error}}</li>
    @endforeach
    </ul>
    @endif
</div>
{{Form::open(['method' => 'POST', 'action' => ['VolunteerController@store']])}}
	<div class="form-group">
		{{Form::hidden('education_id', Request::route()->education)}}
		{{Form::label('first_name', 'Full Name:')}}
		{{Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
		{{Form::text('last name', null, ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('age', 'Age:')}}<br>
		{{Form::text('age', null, ['class' => 'form-control', 'placeholder' => 'Enter Age'])}}
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
		{{Form::label('explanation', "We have several volunteer opportunities for our Sunday morning and Wednesday Evening programs; including Children's Liturgy (during 10:30 am Sunday Mass), Religious Ed Classes (9:15-10:15 am Sunday), Youth Group (6:00-8:30 pm Wednesday), and special events throughout the year. In what ways are you interested in assisting with our Religious Ed & Youth Ministry?")}}
		{{Form::textarea('explanation', null, ['class' => 'form-control', 'placeholder' => 'Enter Explanation'])}}
	</div>



	<div class='pull-right'>
		<div class="form-group">
		{{Form::submit('Enter', ['class' => 'btn btn-primary'])}}
		{{Form::close()}}		
		</div>
	</div>
	<a href="{{url('/')}}"><button class="pull-right btn btn-secondary">Cancel</button></a>
</div>	
@stop

@section('scripts')
@stop