@extends('includes.layout')
@section('content')


<div class="DFcontainer col-md-8 col-md-offset-2">

		{{Form::open(['method' => 'POST', 'action' => 'FileuploadController@store', 'files' => true])}}
		{{Form::file('upload',  null, ['class' => 'form-control'])}}
		{{Form::label('title', 'Title:')}}
		{{Form::submit('Save', ['class' => 'btn btn-primary form-control'])}}
		{{Form::close()}}
</div>
@stop