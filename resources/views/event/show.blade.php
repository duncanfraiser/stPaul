@extends('layouts.main')

@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>Event Calander</h1></center>
@if(\Auth::check())
@if(\Auth::user()->isAdmin())
<span class="pull-right">
<a href="{{ url('/event/create/')}}">New</button></a> | 
<a href="{{ url('/event/'.$event->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif
<h2>{{$event->title}}</h2>
<p>{{$event->start}}</p>
<p>{!!$event->body!!}</p>

<p id="demo"></p>

</div>
</div>
@stop


