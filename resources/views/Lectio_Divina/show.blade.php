@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>{{$divina->title}}</h1></center>
@if(\Auth::check())
@if(\Auth::user()->isAdmin() || \Auth::user()->isPrayer())
<span class="pull-right">
<a href="{{ url('/Lectio_Divina/create/')}}">New</button></a> | 
<a href="{{ url('/Lectio_Divina/'.$divina->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif

<p>{!!$divina->body!!}</p>

<a href="{{ url('/Lectio_Divina/')}}">Lectio Divina Archive</button></a>

</div>
</div>
@stop