@extends('includes.layout')
@section('content')

<h1>{{$welcome->title}}</h1>
<h3>{{$welcome->body}}</h3>
<a href="{{ url('/welcome/'.$welcome->id.'/edit/') }}"><button class="btn btn-primary btn-xs">Edit Announcement</button></a>

@stop