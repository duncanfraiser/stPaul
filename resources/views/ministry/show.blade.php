@extends('layouts.main')
@section('content')
<div class="row yo" >
  <div class="col-md-8 col-md-offset-2 homecol">
    <div class="box" style="background-color: #3e95d1">
      Ministry 
    </div>
	<div class="col-md-12 homediv">
	  @if(\Auth::check())
	  @if(\Auth::user()->isAdmin())
      <span class="pull-right">
      <a href="{{ url('/ministry/create/')}}"><button class ='editbtn'>New</button></a>
      <a href="{{ url('/ministry/'.$ministry->id.'/edit/')}}"><button class ='editbtn'>Edit</button></a>
      </span>
      @endif
      @endif
	  <h3>{{$ministry->title}}</h3>
	  <p>{!!$ministry->body!!}</p>  	
	  </div>  
	</div>
  </div>
</div>
@stop
