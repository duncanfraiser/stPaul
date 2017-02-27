@extends('layouts.main')
@section('content')
<div class="row yo" >
  <div class="col-md-8 col-md-offset-2 homecol">
    <div class="box" style="background-color: #e8c562">
      Mass Times 
    </div>
	<div class="col-md-12 homediv">
	  @if(\Auth::check())
	  @if(\Auth::user()->isAdmin())
      <span class="pull-right">
      <a href="{{ url('/masstime/create/')}}"><button class ='editbtn'>New</button></a>
      <a href="{{ url('/masstime/'.$masstime->id.'/edit/')}}"><button class ='editbtn'>Edit</button></a>
      </span>
      @endif
      @endif
	  <h3>{{$masstime->title}}</h3>
	  <p>{!!$masstime->body!!}</p>
 
	</div>
  </div>
</div>
@stop
