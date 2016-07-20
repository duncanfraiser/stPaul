@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>Youth List</h1></center>
@if(\Auth::check())
@if(\Auth::user()->isAdmin())
<span class="pull-right">
<a href="{{ url('/youth/create/')}}">New</button></a> | 
<a href="{{ url('/youth/'.$youth->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif
<h1>{{$youth->title}}</h1>
<h3>{{$youth->body}}</h3>
<span class="pull-right">
<a href="{{ url('/youth/')}}">Youth List Archive</button></a>
</span>
</div>
</div>
@stop