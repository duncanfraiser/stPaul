@extends('layouts.main')
@section('content')
<div class="col-md-11 col-md-offset-1">
<h2>Christ Life Registration List
<small><div class="dropdown" style="padding: 0px 0px 10px 0px">
<button class=" dropdown-toggle" style="padding: 0px 0px 0px 0px" data-toggle="dropdown">Index Options
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="{{url('/ChristLife/email')}}">Email List</a></li>
<li><a href="{{url('/ChristLife/allergies')}}">Allergies</a></li>
<li><a href="{{url('/ChristLife/ride')}}">Transportation</a></li>
<li><a href="{{url('/ChristLife/comments')}}">Additional Comments</a></li>
</ul></div></small></h2>

<div class="col-md-5">
<h2><u>Tuesday Session</u></h3>
                    
	@foreach($students as $student)
	<a href="{{url('')}}">{{$student->lastName}}, {{$student->firstName}}</a><br />
	@endforeach 
</div>

	
</div>
@stop