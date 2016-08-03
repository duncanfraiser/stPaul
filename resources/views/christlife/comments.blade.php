@extends('layouts.main')
@section('content')
<div class="col-md-11 col-md-offset-1">
<h2>Christ Life Comments
<small><div class="dropdown" style="padding: 0px 0px 10px 0px">
<button class=" dropdown-toggle" style="padding: 0px 0px 0px 0px" data-toggle="dropdown">Index Options
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="{{url('/ChristLife/')}}">Christ Life Index</a></li>
<li><a href="{{url('/ChristLife/allergies')}}">Allergies</a></li>
<li><a href="{{url('/ChristLife/ride')}}">Transpotation</a></li>
</ul></div></small></h2>

<div class="col-md-5">
<h2><u>Tuesday Session</u></h3> 
<ul>                   
	@foreach($tuComments as $tuComment)
	
	<li><a href="{{url('/ChristLife/'.$tuComment->id)}}">{{$tuComment->lastName}}, {{$tuComment->firstName}}: </a>{{$tuComment->comments}}</li><br />
	@endforeach
</div>
<div class="col-md-5">
<h2><u>Thursday Session</u></h3>    
<ul>                
	@foreach($trComments as $trComment)
	
	<li><a href="{{url('/ChristLife/'.$trComment->id)}}">{{$trComment->lastName}}, {{$trComment->firstName}}: </a>{{$trComment->comments}}</li><br />
	@endforeach
	</ul>
</div>

	
</div>
@stop