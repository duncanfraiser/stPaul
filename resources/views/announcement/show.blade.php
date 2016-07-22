@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>{{$heading->heading}}</h1></center>
@if(\Auth::check())
@if(\Auth::user()->isAdmin())
<span class="pull-right">
<a href="{{ url('/announcement/create/')}}">New</button></a> | 
<a href="{{ url('/announcement/'.$announcement->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif
<h3>{{$announcement->title}}</h3>
<p>{!!$announcement->body!!}</p>
<span class="pull-right">
<a href="{{ url('/announcement/')}}">{{$heading->heading}} Archive</button></a>
</span>
</div>
</div>
@stop