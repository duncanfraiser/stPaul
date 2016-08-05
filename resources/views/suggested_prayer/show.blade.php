@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>{{$suggestedprayer->title}}</h1></center>
@if(\Auth::check())
@if(\Auth::user()->isAdmin())
<span class="pull-right">
<a href="{{ url('/suggested_prayer/create/')}}">New</button></a> | 
<a href="{{ url('/suggested_prayer/'.$suggestedprayer->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif

<p>{!!$suggestedprayer->body!!}</p>

<a href="{{ url('/suggested_prayer/')}}">Prayer List Archive</button></a>

</div>
</div>
@stop