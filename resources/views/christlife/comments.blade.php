@extends('layouts.main')
@section('content')
<div class="col-md-11 col-md-offset-1">
<h2>Christ Life Comments
<small><div class="dropdown" style="padding: 0px 0px 10px 0px">
<button class=" dropdown-toggle" style="padding: 0px 0px 0px 0px" data-toggle="dropdown">Index Options
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="{{url('/ChristLife/changes')}}">Change Report</a></li>
<li><a href="{{url('/ChristLife/')}}">Christ Life Index</a></li>
<li><a href="{{url('/ChristLife/allergies')}}">Allergies</a></li>
<li><a href="{{url('/ChristLife/childCare')}}">Child Care</a></li>
<li><a href="{{url('/ChristLife/ride')}}">Transportation</a></li>

</ul></div></small></h2>

<div class="col-md-5">
<h2><u>Christ Life Session</u></h3> 
<ul>                   
	@foreach($comments as $comment)
	
	<li><a href="{{url('/ChristLife/'.$comment->id)}}">{{$comment->lastName}}, {{$comment->firstName}}: </a>{{$comment->comments}}</li><br />
	@endforeach
</div>

	
</div>
@stop