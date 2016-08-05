@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>Contemplative Prayer Archive</h1></center>
@foreach($contemplatives as $contemplative)
<li><a href="{{url('/contemplative/'.$contemplative->id)}}">{{$contemplative->title}}</button></a></li>
@endforeach
</div>
</div>
@stop 