@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>Homily</h1></center>
@if(\Auth::check())
@if(\Auth::user()->isAdmin())
<span class="pull-right">
<a href="{{ url('/homily/create/')}}">New</button></a> | 
<a href="{{ url('/homily/'.$homily->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif
<h1>{{$homily->title}}</h1>
<h3>{!!$homily->body!!}</h3>
<span class="pull-right">
<a href="{{ url('/homily/')}}">{{$heading->heading}} Archive</button></a>
</span>
</div>
</div>
@stop