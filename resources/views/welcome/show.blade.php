@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<h3>{{$welcome->title}}</h3>
@if(\Auth::check())
@if(\Auth::user()->isAdmin())
<span class="pull-right">
<a href="{{ url('/welcome/'.$welcome->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif
<p>{!!$welcome->body!!}</p>

</div>
</div>
@stop