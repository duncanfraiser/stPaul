@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>{{$suggestedprayer->title}}</h1></center>
@if(\Auth::check())
@if(\Auth::user()->isAdmin() || \Auth::user()->isPrayer())
<span class="pull-right">
<a href="{{ url('/suggested_prayer/create/')}}">New</button></a> | 
<a href="{{ url('/suggested_prayer/'.$suggestedprayer->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif

<p>{!!$suggestedprayer->body!!}</p>


<div>
<h3>Suggested Prayers Archive</h3>
<ul>
@foreach($archives as $archive)
@if($archive->id == $suggestedprayer->id)
@else
<li><a href="{{url('/suggested_prayer/'.$archive->id)}}">{{$archive->title}}</button></a></li>
@endif
@endforeach
</ul>

</div>
</div>
</div>
@stop