@extends('layouts.main')
@section('content')
<div class="col-md-10 col-md-offset-1">
<h2 style="margin-bottom: 0px">Christ Life Transportation
<small><div class="dropdown" style="padding: 0px 0px 10px 0px">
<button class=" dropdown-toggle" style="padding: 0px 0px 0px 0px" data-toggle="dropdown">Index Options
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="{{url('/ChristLife/rideEmail')}}">Transportation Email List</a></li>
<li><a href="{{url('/ChristLife/')}}">Christ Life Index</a></li>
<li><a href="{{url('/ChristLife/allergies')}}">Allergies</a></li>
<li><a href="{{url('/ChristLife/comments')}}">Additional Comments</a></li>

</ul></div></small></h2>

<div class="col-md-6">
<h3><u>Tuesday Session</u></h3>

<p>
<h3>Need a Ride</h3>
@foreach($tuNeeds as $key=>$tuNeed)
	{{++$key}}.
	<a href="{{url('/ChristLife/'.$tuNeed->id)}}">{{$tuNeed->lastName}}, {{$tuNeed->firstName}}</a><br />
@endforeach
<h3>Provide a Ride</h3>
@foreach($tuGives as $key=>$tuGive)
	{{++$key}}.
	<a href="{{url('/ChristLife/'.$tuGive->id)}}">{{$tuGive->lastName}}, {{$tuGive->firstName}}</a><br />
@endforeach
</p>
</div>
<div class="col-md-6">
<h3><u>Thursday Session</u></h3>

<p>
<h3>Need a Ride</h3>
@foreach($trNeeds as $key=>$trNeed)
	{{++$key}}.
	<a href="{{url('/ChristLife/'.$trNeed->id)}}">{{$trNeed->lastName}}, {{$trNeed->firstName}}</a><br />
@endforeach
<h3>Provide a Ride</h3>
@foreach($trGives as $key=>$trGive)
	{{++$key}}.
	<a href="{{url('/ChristLife/'.$trGive->id)}}">{{$trGive->lastName}}, {{$trGive->firstName}}</a><br />
@endforeach
</p>
</div>
</div>
@stop