@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>Homily</h1></center>
@if(\Auth::check())
@if(\Auth::user()->isAdmin())
<span class="pull-right">
<a href="{{ url('/homily/create/')}}">New</button></a> | 
<a href="{{ url('/homily/'.$homily->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif
<h3>{{$homily->title}}</h3>
<p>{!!$homily->body!!}<p>

<div>
<h3>{{$heading->heading}} Archive</h3>
<ul>

@foreach($archives as $archive)
@if($archive->id == $homily->id)
@else
<li><a href="{{url('/homily/'.$archive->id)}}">{{$archive->title}}</button></a></li>
@endif
@endforeach
</ul>
</div>

</div>
</div>
@stop