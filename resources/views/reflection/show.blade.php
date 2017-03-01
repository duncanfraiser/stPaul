@extends('layouts.main')
@section('content')
<div class="row yo" >
  <div class="col-md-8 col-md-offset-2 homecol">
    <div class="boxb mobil" style="background-color: #6C3E7B">
      Daily Lenten Video Reflection by: {{$reflection->title}}
    </div>
	<div class="col-md-12 homediv text-center">
			@if(\Auth::check())
	    @if(\Auth::user()->isAdmin())
	    <a href="{{ url('/reflection/'.$reflection->id.'/edit/')}}"><button class='editbtn'>Edit</button></a>	    
	    <a href="{{ url('/reflection/create/')}}"><button class='editbtn'>New</button></a>	   
	    @endif
	    @endif
	  <div class="col-md-10 col-md-offset-1" style="margin-top: 2em">
	  <iframe width="100%" style="min-height:315px"  {!!$reflection->embed!!} frameborder="0" allowfullscreen>{{$reflection->title}}</iframe>
	  </div>
	  <a style="margin-left: .5em" href="{{url('reflection/')}}"><button class="redwhitebtn">Video Gallery</button></a>
	</div>
  </div>
</div>
@stop
