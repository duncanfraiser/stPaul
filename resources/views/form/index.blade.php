@extends('includes.layout')
@section('content')
	<div class="DFcontainer col-md-8 col-md-offset-2">
    @foreach($forms as $form)
    <a href="{{ $form->path }}"><button class="btn btn-default">{{ $form->title }}</button></a><br><br>
    @endforeach
	</div>
@stop