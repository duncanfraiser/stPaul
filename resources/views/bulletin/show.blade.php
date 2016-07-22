@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>Bulletin</h1></center>
@if(\Auth::check())
@if(\Auth::user()->isAdmin())
<span class="pull-right">
<a href="{{ url('/bulletin/create/')}}">New</button></a> | 
<a href="{{ url('/bulletin/'.$bulletin->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif
<h1>{{$bulletin->title}}</h1>
<h3>{!!$bulletin->body!!}</h3>
<span class="pull-right">
<a href="{{ url('/bulletin/')}}">Bulletin Archive</button></a>
</span>
</div>
</div>
@stop