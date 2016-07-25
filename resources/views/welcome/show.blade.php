@extends('layouts.main')
@section('content')

<h3>{{$welcome->title}}</h3>
<p>{!!$welcome->body!!}</p>
@if(\Auth::check())
@if(\Auth::user()->isAdmin())
<a href="{{ url('/welcome/'.$welcome->id.'/edit/') }}"><button class="btn btn-primary btn-xs">Edit</button></a>
@endif
@endif
@stop