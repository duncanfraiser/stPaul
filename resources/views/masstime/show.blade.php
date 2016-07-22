@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>{{$heading->heading}}</h1></center>
@if(\Auth::check())
@if(\Auth::user()->isAdmin())
<span class="pull-right">
<a href="{{ url('/masstime/create/')}}">New</button></a> | 
<a href="{{ url('/masstime/'.$masstime->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif
<h1>{{$masstime->title}}</h1>
<h3>{!!$masstime->body!!}</h3>
<span class="pull-right">
<a href="{{ url('/masstime/')}}">Mass Time Archive</button></a>
</span>
</div>
</div>
@stop