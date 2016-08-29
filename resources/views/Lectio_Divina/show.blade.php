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

<div>
<h3>Lectio Divina Prayers Archive</h3>
<ul>
@foreach($archives as $archive)
@if($archive->id == $divina->id)
@else
<li><a href="{{url('/Lectio_Divina/'.$archive->id)}}">{{$archive->title}}</button></a></li>
@endif
@endforeach
</ul>

</div>

</div>
</div>
@stop