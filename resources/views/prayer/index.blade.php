@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>Prayer List Archive</h1></center>
@foreach($prayers as $prayer)
<li><a href="{{url('/prayer/'.$prayer->id)}}">{{$prayer->title}}</button></a></li>
@endforeach
</div>
</div>
@stop 