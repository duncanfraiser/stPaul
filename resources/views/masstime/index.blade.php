@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>Mass Time Archive</h1></center>
@foreach($masstimes as $masstime)
<li><a href="{{url('/masstime/'.$masstime->id)}}">{{$masstime->title}}</button></a></li>
@endforeach
</div>
</div>
@stop