@extends('layouts.main')
@section('content')
<div class="col-md-10 col-md-offset-1">
<h2>Christ Life Child Care List
<small><div class="dropdown" style="padding: 0px 0px 10px 0px">
<button class=" dropdown-toggle" style="padding: 0px 0px 0px 0px" data-toggle="dropdown">Index Options
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="{{url('/ChristLife/changes')}}">Change Report</a></li>
<li><a href="{{url('/ChristLife/childCareEmail')}}">Child Care Email List</a></li>
<li><a href="{{url('/ChristLife/')}}">Christ Life Index</a></li>
<li><a href="{{url('/ChristLife/ride')}}">Transportation</a></li>
<li><a href="{{url('/ChristLife/comments')}}">Additional Comments</a></li>
</ul></div></small></h2>
<h3><u>Christ Life Session</u></h3>

<p>
@foreach($childCares as $key=>$childCare)
	{{++$key}}.
	<a href="{{url('/ChristLife/'.$childCare->id)}}">{{$childCare->lastName}}, {{$childCare->firstName}}</a><br />
@endforeach
</p>

</div>
@stop