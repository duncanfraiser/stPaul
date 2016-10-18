@extends('layouts.main')


@section('content')
<div class="col-md-8 col-md-offset-2"><br />

{{Form::open(['method' => 'POST', 'action' => 'EventController@store'])}}
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

