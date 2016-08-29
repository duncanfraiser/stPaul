@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>{{$prayer->title}}</h1></center>
@if(\Auth::check())
@if(\Auth::user()->isAdmin() || \Auth::user()->isPrayer())
<span class="pull-right">
<a href="{{ url('/prayer/create/')}}">New</button></a> | 
<a href="{{ url('/prayer/'.$prayer->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif

<p>{!!$prayer->body!!}</p>

<div>
<h3>Prayers Archive</h3>
<ul>
@foreach($archives as $archive)
@if($archive->id == $prayer->id)
@else
<li><a href="{{url('/prayer/'.$archive->id)}}">{{$archive->title}}</button></a></li>
@endif
@endforeach
</ul>

</div>

</div>
</div>
@stop