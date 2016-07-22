@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>{{$heading->heading}} Archive</h1></center>
@foreach($announcements as $announcement)
<li><a href="{{url('/announcement/'.$announcement->id)}}">{{$announcement->title}}</button></a></li>
@endforeach
</div>
</div>
@stop