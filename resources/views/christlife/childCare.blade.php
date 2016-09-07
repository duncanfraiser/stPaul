@extends('layouts.main')
@section('content')
<div class="col-md-10 col-md-offset-1">
<h2>Christ Life Child Care List
<small><div class="dropdown" style="padding: 0px 0px 10px 0px">
<button class=" dropdown-toggle" style="padding: 0px 0px 0px 0px" data-toggle="dropdown">Index Options
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="{{url('/ChristLife/childCareEmail')}}">Child Care Email List</a></li>
<li><a href="{{url('/ChristLife/')}}">Christ Life Index</a></li>
<li><a href="{{url('/ChristLife/ride')}}">Transportation</a></li>
<li><a href="{{url('/ChristLife/comments')}}">Additional Comments</a></li>
</ul></div></small></h2>
<h3><u>Tuesday Session</u></h3>

<p>
@foreach($tuChildCares as $key=>$tuChildCare)
	{{++$key}}.
	<a href="{{url('/ChristLife/'.$tuChildCare->id)}}">{{$tuChildCare->lastName}}, {{$tuChildCare->firstName}}</a><br />
@endforeach
</p>
<h3><u>Thursday Session</u></h3>
<p>
@foreach($trChildCares as $key=>$trChildCare)
	{{++$key}}.
	<a href="{{url('/ChristLife/'.$trChildCare->id)}}">{{$trChildCare->lastName}}, {{$trChildCare->firstName}}</a><br />
@endforeach
</p>
</div>
@stop