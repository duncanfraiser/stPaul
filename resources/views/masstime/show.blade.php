@extends('layouts.main')
@section('content')
<div class="col-md-12">


<div class="col-md-8 col-md-offset-2">
		<center><img width='100%' src="{{url('/img/Mass Times Header.png/')}}"></center>

@if(\Auth::check())
@if(\Auth::user()->isAdmin())
<span class="pull-right">
<a href="{{ url('/masstime/create/')}}">New</button></a> | 
<a href="{{ url('/masstime/'.$masstime->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif
<h3>{{$masstime->title}}</h3>
<p>{!!$masstime->body!!}</p>


</div>
</div>
@stop