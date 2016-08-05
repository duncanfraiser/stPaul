@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>{{$prayer->title}}</h1></center>
@if(\Auth::check())
@if(\Auth::user()->isAdmin())
<span class="pull-right">
<a href="{{ url('/prayer/create/')}}">New</button></a> | 
<a href="{{ url('/prayer/'.$prayer->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif

<p>{!!$prayer->body!!}</p>

<a href="{{ url('/prayer/')}}">Prayer List Archive</button></a>

</div>
</div>
@stop