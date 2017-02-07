@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<img width='100%' src="{{url('/img/announcements.png/')}}">
@if(\Auth::check())
@if(\Auth::user()->isAdmin())
<span class="pull-right">
<a href="{{ url('/announcement/create/')}}">New</button></a> | 
<a href="{{ url('/announcement/'.$announcement->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif
<h3>{{$announcement->title}}</h3>
<p>{!!$announcement->body!!}</p>

<div>
<h3>{{$heading->heading}} Archive</h3>
<ul>
@foreach($archives as $archive)
@if($archive->id == $announcement->id)
@else
<li><a href="{{url('/announcement/'.$archive->id)}}">{{$archive->title}}</button></a></li>
@endif
@endforeach
</ul>
</div>

</div>
</div>
@stop