@extends('layouts.main')

@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>Event Calander</h1></center>
@if(\Auth::check())
@if(\Auth::user()->isAdmin())
<span class="pull-right">
<a href="{{ url('/event/create/')}}">New</button></a> | 
<a href="{{ url('/event/'.$event->id.'/edit/')}}">Edit</button></a>
</span>
@endif
@endif
<h2>{{$event->title}}</h2>
<p><u>Start Date and Time:</u><br/>
{{ date('F d, Y', strtotime($event->start_date)) }}<br/>{{ date('h:i:s a', strtotime($event->start_time)) }}</p>

@if($event->end_date != '0000-00-00')
<p><u>End Date and Time:</u><br/>
{{$event->end_date}}<br/>{{ date('h:i:s a', strtotime($event->end_time)) }}
</p>
@endif



<p>{!!$event->body!!}</p>

<p id="demo"></p>

</div>
</div>
@stop


