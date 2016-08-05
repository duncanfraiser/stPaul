@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>{{$contemplative->title}}</h1></center>
@if(\Auth::check())
@if(\Auth::user()->isAdmin())
<span class="pull-right">
<a href="{{ url('/contemplative/create/')}}">New</button></a> | 
<a href="{{ url('/contemplative/'.$contemplative->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif

<p>{!!$contemplative->body!!}</p>

<a href="{{ url('/contemplative/')}}">Prayer List Archive</button></a>

</div>
</div>
@stop