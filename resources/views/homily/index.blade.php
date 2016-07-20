@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>Homily Archive</h1></center>
@foreach($homilies as $homily)
<li><a href="{{url('/homily/'.$homily->id)}}">{{$homily->title}}</button></a></li>
@endforeach
</div>
</div>
@stop