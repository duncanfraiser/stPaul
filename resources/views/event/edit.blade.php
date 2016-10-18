@extends('layouts.main')


@section('content')
<div class="col-md-8 col-md-offset-2"><br />

{{Form::model($event, ['method' => 'PATCH', 'action' => ['EventController@update', $event->id]])}}
	<div class="form-group">
		{{Form::label('title', 'Event Title:')}}
		{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Event Title'])}}
	</div>
	<div class="form-group">
		{{Form::label('start', 'Start Date & Time:')}}
		{!!Form::date('start_date', null, ['class' => 'form-control'])!!}
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
		{{Form::submit('Update', ['class' => 'btn btn-primary'])}}
		{{Form::close()}}		
		</div>
	</div>
	<div class='pull-right'>
	<a href="{{url('/')}}"><button class="pull-right btn btn-secondary">Cancel</button></a>
	</div>
	<div class="pull-right">
       	<div class="form-group">
        {{Form::open(['method' => 'DELETE', 'route' => ['event.destroy', $event->id], 'class' => 'delete'])}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {{Form::close()}}
    	</div>
    </div>
</div>	

@stop

@section('scripts')
@include('includes._froalaOptions')
<script>
	$(".delete").on("submit", function(){
		return confirm("Do you want to delete this Event?");
	});
</script>
@stop