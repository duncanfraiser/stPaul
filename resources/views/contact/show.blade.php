@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>{{$contact->title}}</h1></center>
@if(\Auth::check())
@if(\Auth::user()->isAdmin())
<span class="pull-right">

<a href="{{ url('/contact/'.$contact->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif
<p>{!!$contact->body!!}</p>

</div>
</div>
@stop