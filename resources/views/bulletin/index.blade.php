@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>Announcement Archive</h1></center>
@foreach($bulletins as $bulletin)
<li><a href="{{url('/bulletin/'.$bulletin->id)}}">{{$bulletin->title}}</button></a></li>
@endforeach
</div>
</div>
@stop