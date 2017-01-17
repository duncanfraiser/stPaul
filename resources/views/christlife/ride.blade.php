@extends('layouts.main')
@section('content')
<div class="col-md-10 col-md-offset-1">
<h2 style="margin-bottom: 0px">Christ Life Transportation
<small><div class="dropdown" style="padding: 0px 0px 10px 0px">
<button class=" dropdown-toggle" style="padding: 0px 0px 0px 0px" data-toggle="dropdown">Index Options
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="{{url('/ChristLife/changes')}}">Change Report</a></li>
<li><a href="{{url('/ChristLife/rideEmail')}}">Transportation Email List</a></li>
<li><a href="{{url('/ChristLife/')}}">Christ Life Index</a></li>
<li><a href="{{url('/ChristLife/allergies')}}">Allergies</a></li>
<li><a href="{{url('/ChristLife/childCare')}}">Child Care</a></li>
<li><a href="{{url('/ChristLife/comments')}}">Additional Comments</a></li>

</ul></div></small></h2>

<div class="col-md-6">
<h3><u>Christ Life Session</u></h3>

<p>
<h3>Need a Ride</h3>
@foreach($needs as $key=>$need)
	{{++$key}}.
	<a href="{{url('/ChristLife/'.$need->id)}}">{{$need->lastName}}, {{$need->firstName}}</a><br />
@endforeach
<h3>Provide a Ride</h3>
@foreach($gives as $key=>$give)
	{{++$key}}.
	<a href="{{url('/ChristLife/'.$give->id)}}">{{$give->lastName}}, {{$give->firstName}}</a><br />
@endforeach
</p>
</div>

</div>
@stop