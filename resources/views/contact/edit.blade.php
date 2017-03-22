@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
{{Form::model($contact, ['method' => 'PATCH', 'action' => ['ContactController@update', $contact->id]])}}
	<div class="form-group">
		{{Form::label('title', 'Title:')}}
		{{Form::text('title', null, ['class' => 'form-control'])}}
		{{Form::label('body', 'Body:')}}
		{{Form::textarea('body', null, ['class' => 'form-control'])}}
	</div>
	<div class='pull-right'>
		<div class="form-group">
		{{Form::submit('Update', ['class' => 'btn btn-primary'])}}				
		</div>
	</div>
	{{Form::close()}}
	<div class='pull-right'>
	<a href="{{url('/')}}"><button class="btn btn-secondary">Cancel</button></a>
	</div>

</div>

@stop
@section('scripts')
@include('includes._froala-js')
@include('includes._froala-css')
@include('includes._froalaOptions')

@stop