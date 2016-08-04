@extends('layouts.main')
@section('content')
<div class="col-md-10 col-md-offset-1">
<h2>Christ Life Allergy List
<small><div class="dropdown" style="padding: 0px 0px 10px 0px">
<button class=" dropdown-toggle" style="padding: 0px 0px 0px 0px" data-toggle="dropdown">Index Options
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="{{url('/ChristLife/allergiesEmail')}}">Allergies Email List</a></li>
<li><a href="{{url('/ChristLife/')}}">Christ Life Index</a></li>
<li><a href="{{url('/ChristLife/ride')}}">Transportation</a></li>
<li><a href="{{url('/ChristLife/comments')}}">Additional Comments</a></li>
</ul></div></small></h2>
<h3><u>Tuesday Session</u></h3>

<p>
@foreach($tuesAllergies as $key=>$tuesAllergie)
	{{++$key}}.
	<a href="{{url('/ChristLife/'.$tuesAllergie->id)}}">{{$tuesAllergie->lastName}}, {{$tuesAllergie->firstName}}</a>   {{$tuesAllergie->allergies}}<br />
@endforeach
</p>
<h3><u>Thursday Session</u></h3>
<p>
@foreach($thursAllergies as $key=>$thursAllergie)
	{{++$key}}.
	<a href="{{url('/ChristLife/'.$thursAllergie->id)}}">{{$thursAllergie->lastName}}, {{$thursAllergie->firstName}}</a> {{$thursAllergie->allergies}}<br />
@endforeach
</p>
</div>
@stop

