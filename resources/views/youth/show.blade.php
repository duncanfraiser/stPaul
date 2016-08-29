@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>{{$heading->heading}}</h1></center>
@if(\Auth::check())
@if(\Auth::user()->isAdmin() || \Auth::user()->isYouth())
<span class="pull-right">
<a href="{{ url('/youth/create/')}}">New</button></a> | 
<a href="{{ url('/youth/'.$youth->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif
<h3>{{$youth->title}}</h3>
<p>{!!$youth->body!!}</p>

<div>
<h3>{{$heading->heading}} Archive</h3>
<ul>
@foreach($archives as $archive)
@if($archive->id == $youth->id)
@else
<li><a href="{{url('/youth/'.$archive->id)}}">{{$archive->title}}</button></a></li>
@endif
@endforeach
</ul>
</div>

</div>
</div>
@stop