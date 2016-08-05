@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>Lectio Divina Archive</h1></center>
@foreach($divinas as $divina)
<li><a href="{{url('/Lectio_Divina/'.$divina->id)}}">{{$divina->title}}</button></a></li>
@endforeach
</div>
</div>
@stop 