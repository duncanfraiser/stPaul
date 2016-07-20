@extends('layouts.main')
@section('content')
<div class="DFcontainer col-md-8 col-md-offset-2">
{{Form::open(['method' => 'POST', 'action' => 'YouthController@store'])}}
	<div class="form-group">
		{{Form::label('title', 'Title:')}}
		{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
		{{Form::label('excerpt', 'Excerpt:')}}
		{{Form::textarea('excerpt', null, ['class' => 'form-control', 'placeholder' => 'Enter Excerpt'])}}
		{{Form::label('body', 'Body:')}}
		{{Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter Body'])}}
	</div>
	<div class='pull-right'>
		<div class="form-group">
		{{Form::submit('Create Youth List', ['class' => 'btn btn-primary'])}}
		{{Form::close()}}		
		</div>
	</div>
	<a href="{{url('/')}}"><button class="pull-right btn btn-secondary">Cancel</button></a>
</div>		
@stop