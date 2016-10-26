@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br />
	<h1>Small Group Bible Study Form</h1><h3>Gospel of Matthew</h3>
	<div class="col-md-12">
    	@if (count($errors))
    	<ul class="err">
    	@foreach($errors->all() as $error)
    	<li class="err">{{$error}}</li>
    	@endforeach
	    </ul>
    	@endif
	</div>
	{{Form::open(['method' => 'POST', 'action' => ['GroupController@store']])}}
	<div class="form-group">
		{{Form::hidden('education_id', Request::route()->education)}}
		{{Form::label('first_name', 'Full Name:')}}
		{{Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
		{{Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
	</div>
	 <div class="form-group">
		{{Form::label('email', 'Primary Email Address:')}}
		{{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
	</div>
	 <div class="form-group">
		{{Form::label('cell_phone', 'Cell Phone Number:')}}
		{{Form::text('cell_phone', null, ['class' => 'form-control', 'placeholder' => 'Enter Cell Phone Number'])}}
	</div>
 	<div class="form-group">
		{{ Form::label('current_group', 'Would you like to study with your current prayer group?')}}<br />
    	{{ Form::radio('current_group', 'Yes') }} {{ Form::label('current_group', 'Yes')}}<br />
		{{ Form::radio('current_group', 'No') }} {{ Form::label('current_group', 'No')}}
 	</div>
 	<div class="form-group">
		{{Form::label('group_name', 'Name of Group:')}}
		{{Form::text('group_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Group Name'])}}
	</div>
 	<div class="form-group">
		{{Form::label('date', 'Date/Time of Meeting:')}}
		{{Form::text('date', null, ['class' => 'form-control', 'placeholder' => 'MM-DD-YYYY'])}}
		{{Form::text('time', null, ['class' => 'form-control', 'placeholder' => '12:00 pm'])}}
	</div>
	 <div class="form-group">
		{{Form::label('contact', 'Contact Person:')}}
		{{Form::text('contact', null, ['class' => 'form-control', 'placeholder' => 'Enter Contact Person'])}}
	</div>
 	<div class="form-group">
		{{ Form::label('participate_on', '(Or) I want to participate on:')}}<br />
    	{{ Form::radio('participate_on', 'Monday') }} {{ Form::label('participate_on', 'Monday')}}<br />
		{{ Form::radio('participate_on', 'Tuesday') }} {{ Form::label('participate_on', 'Tuesday')}}<br />
		{{ Form::radio('participate_on', 'Wednesday') }} {{ Form::label('participate_on', 'Wednesday')}}<br />
		{{ Form::radio('participate_on', 'Thursday') }} {{ Form::label('participate_on', 'Thursday')}}<br />
		{{ Form::radio('participate_on', 'Friday') }} {{ Form::label('participate_on', 'Friday')}}<br />
		{{ Form::label('participate_time', 'Time of Day:')}}<br />
    	{{ Form::radio('participate_time', 'Morning') }} {{ Form::label('participate_time', 'Morning')}}
    	{{ Form::radio('participate_time', 'Evening') }} {{ Form::label('participate_time', 'Evening')}}
 	</div>
  	<div class="form-group">
		{{ Form::label('group_type', "Type of group you're interested in:")}}<br />
    	{{ Form::radio('group_type', 'Couples') }} {{ Form::label('group_type', 'Couples')}}<br />
    	{{ Form::radio('group_type', 'Singles') }} {{ Form::label('group_type', 'Singles')}}<br />
    	{{ Form::radio('group_type', 'Men') }} {{ Form::label('group_type', 'Men')}}<br />
    	{{ Form::radio('group_type', 'Women') }} {{ Form::label('group_type', 'Women')}}<br />
    	{{ Form::radio('group_type', 'Mixed Group') }} {{ Form::label('group_type', 'Mixed Group')}}<br />
    	{{ Form::radio('group_type', 'Young Couples') }} {{ Form::label('group_type', 'Young Couples')}}<br />
    	{{ Form::radio('group_type', 'Christ Life Group') }} {{ Form::label('group_type', 'Christ Life Group')}}<br />
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