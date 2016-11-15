@extends('layouts.main')


@section('content')
<div class="col-md-8 col-md-offset-2"><br />
<h1>Create an Event</h1>


{{Form::open(['method' => 'POST', 'action' => 'EventController@store'])}}
	<div class="form-group">
		{{Form::label('color', 'Event Categories:')}}<br>
		 {{Form::select('color', ['' => 'None','#e8c562' => ' Liturgy & Sacraments','#bf202f' => 'Prayer & Study','#509543' => 'Religious Ed & Youth', '3e95d1' => 'Discipleship & Special Events'])}}
	</div>
	<div class="form-group">
		{{Form::label('title', 'Event Title:')}}
		{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Event Title'])}}
	</div>

	<div class="form-group">
		{{Form::label('start', 'Start Date & Time:')}}
		{{Form::date('start_date', null, ['class' => 'form-control'])}}
		{{Form::time('start_time', null, ['class' => 'form-control'])}}
	</div>
	<div class="form-group">
		{{Form::label('end', 'End Date & Time:')}}
		{{Form::date('end_date', null, ['class' => 'form-control'])}}
		{{Form::time('end_time', null, ['class' => 'form-control'])}}
	</div>
	<div class="form-group">
		{{Form::label('sunday', 'Select Repeating Days:')}}<br/>
    	{{ Form::checkbox('sunday', 0) }} {{ Form::label('sunday', 'Sunday')}}<br />
    	{{ Form::checkbox('monday', 1) }} {{ Form::label('monday', 'Monday')}}<br />
    	{{ Form::checkbox('tuesday', 2) }} {{ Form::label('tuesday', 'Tuesday')}}<br />
    	{{ Form::checkbox('wednesday', 3) }} {{ Form::label('Wednesday', 'Wednesday')}}<br />
    	{{ Form::checkbox('thursday', 4) }} {{ Form::label('thursday', 'Thursday')}}<br />
    	{{ Form::checkbox('friday', 5) }} {{ Form::label('friday', 'Friday')}}<br />
    	{{ Form::checkbox('saturday', 6) }} {{ Form::label('saturday', 'Saturday')}}<br />

	</div>
	<div class="form-group">
		{{Form::label('body', 'Event Description:')}}
		{{Form::textarea('body', null, ['class' => 'form-control'])}}
	</div>

	<div class='pull-right'>
		<div class="form-group">
		{{Form::submit('Create', ['class' => 'btn btn-primary'])}}
		{{Form::close()}}		
		</div>
	</div>
	<a href="{{url('/')}}"><button class="pull-right btn btn-secondary">Cancel</button></a>
</div>		
@stop

@section('scripts')
@include('includes._froalaOptions')
@stop

