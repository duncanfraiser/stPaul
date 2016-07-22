@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">


<center><h1>{{$heading->heading}}</h1></center>
@if(\Auth::check())
@if(\Auth::user()->isAdmin())
<span class="pull-right">
<a href="{{ url('/ministry/create/')}}">New</button></a> | 
<a href="{{ url('/ministry/'.$ministry->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif
<h1>{{$ministry->title}}</h1>
<h3>{!!$ministry->body!!}</h3>
<span class="pull-right">
<a href="{{ url('/ministry/')}}">{{$heading->heading}} Archive</button></a>
</span>
</div>
</div>
@stop