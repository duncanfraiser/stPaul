@extends('includes.layout')
@section('content')

<h1>{{$catechumen->firstName}}</h1>
<h1>{{$catechumen->lastName}}</h1>

<a href="{{ url('/catechumen/'.$catechumen->id.'/edit/') }}"><button class="btn btn-primary btn-xs">Edit</button></a>

@stop