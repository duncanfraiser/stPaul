@extends('includes.layout')
@section('content')


<div class="DFcontainer col-md-8 col-md-offset-2">
{{Form::open(['method' => 'POST', 'action' => 'WelcomeController@store'])}}
	<div class="form-group">
		{{Form::label('title', 'Title:')}}
		{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Announcement Title'])}}
		{{Form::label('body', 'Body:')}}
		{{Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter Announcement Body'])}}
	</div>
	<div class="form-group">
		{{Form::submit('Add Announcement', ['class' => 'btn btn-primary form-control'])}}
	</div>
{{Form::close()}}
</div>
@stop