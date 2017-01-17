@extends('layouts.main')
@section('content')
<div class="col-md-10 col-md-offset-1">
<h2>Christ Life Allergy List
<small><div class="dropdown" style="padding: 0px 0px 10px 0px">
<button class=" dropdown-toggle" style="padding: 0px 0px 0px 0px" data-toggle="dropdown">Index Options
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="{{url('/ChristLife/changes')}}">Change Report</a></li>
<li><a href="{{url('/ChristLife/allergiesEmail')}}">Allergies Email List</a></li>
<li><a href="{{url('/ChristLife/')}}">Christ Life Index</a></li>
<li><a href="{{url('/ChristLife/ride')}}">Transportation</a></li>
<li><a href="{{url('/ChristLife/childCare')}}">Child Care</a></li>
<li><a href="{{url('/ChristLife/comments')}}">Additional Comments</a></li>
</ul></div></small></h2>


<p>
@foreach($allergies as $key=>$allergie)
	{{++$key}}.
	<a href="{{url('/ChristLife/'.$allergie->id)}}">{{$allergie->lastName}}, {{$allergie->firstName}}</a>   {{$allergie->allergies}}<br />
@endforeach
</p>

</div>
@stop

