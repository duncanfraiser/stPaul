@extends('layouts.main')


@section('content')
@include('includes.banner')

<div class='row'>
<div class="col-md-12">
	<div class="col-md-12 lintbar">
		<center><h4> "You Got A Minute?" Daily Lenten Video Reflection by: {{$reflection->title}} <a style="margin-left: .5em" href="{{url('reflection/'.$reflection->id)}}"><button class="redwhitebtn">Click Here</button></a></h4></center>
	</div>
</div>
</div>



<div class="row">


  <div class="col-md-4">
    <div class="col-md-12 homediv">
    <center><a href="{{ url('/announcement/'.$announcement->id)}}"><h1>{{$announcement->heading}}</h1></a></center>
	<strong>{{$announcement->title}}</strong>
	@if(\Auth::check())
	@if(\Auth::user()->isAdmin())
	<span class="pull-right">
	<a href="{{ url('/announcement/create/')}}">New</button></a> |
	<a href="{{ url('/announcement/'.$announcement->id.'/edit/')}}">Edit</button></a>
	</span>
	@endif
	@endif
	<p>{!!$announcement->excerpt!!}
	<a href="{{ url('/announcement/'.$announcement->id)}}"><button class="catbtn">Read More</button></a>
	</p>
    </div>
  </div>


  <div class="col-md-4">
    <div class="col-md-12 homediv">
    <center><a href="{{ url('/masstime/'.$masstime->id)}}"><h1>{{$masstime->heading}}</h1></a></center>
	<strong>{{$masstime->title}}</strong>
	@if(\Auth::check())
	@if(\Auth::user()->isAdmin())
	<span class="pull-right">
	<a href="{{ url('/masstime/create/')}}">New</button></a> |
	<a href="{{ url('/masstime/'.$masstime->id.'/edit/')}}">Edit</button></a>
	</span>
	@endif
	@endif
	<p>{!!$masstime->excerpt!!}
	<a href="{{ url('/masstime/'.$masstime->id)}}"><button class="catbtn">Read More</button></a>
	</p>
    </div>
  </div>
  
  <div class="col-md-4">
    <div class="col-md-12 homediv">
    <center><a href="{{ url('/youth/'.$youth->id)}}"><h1>{{$youth->heading}}</h1></a></center>
	<strong>{{$youth->title}}</strong>
	@if(\Auth::check())
	@if(\Auth::user()->isAdmin() || \Auth::user()->isYouth())
	<span class="pull-right">
	<a href="{{ url('/youth/create/')}}">New</button></a> |
	<a href="{{ url('/youth/'.$youth->id.'/edit/')}}">Edit</button></a>
	</span>
	@endif
	@endif
	<p>{!!$youth->excerpt!!}
	<a href="{{ url('/youth/'.$youth->id)}}"><button class="catbtn">Read More</button></a>
	</p>
    </div>
  </div>

<div class="row">
  <div class="col-md-5 col-md-offset-1 ">
    <div class="col-md-12 homediv">
      <center><a href="{{ url('/homily/'.$homily->id)}}"><h1>{{$homily->heading}}</h1></a></center>
	  <strong>{{$homily->title}}</strong>
	  @if(\Auth::check())
	  @if(\Auth::user()->isAdmin())
	  <span class="pull-right">
	  <a href="{{ url('/homily/create/')}}">New</button></a> |
	  <a href="{{ url('/homily/'.$homily->id.'/edit/')}}">Edit</button></a>
	  </span>
	  @endif
	  @endif
	  <p>{!!$homily->body!!} 
	  <a href="{{ url('/homily/'.$homily->id)}}"><button class="catbtn">Read More</button></a>
	  </p>
    </div>
  </div>




  <div class="col-md-5">
    <div class="col-md-12 homediv">
      <div class="col-md-6" style="min-height: 25em">
	    <center><a href="{{ url('/bulletin/'.$bulletin->id)}}"><h1>{{$bulletin->heading}}</h1></a></center>
	    <strong>{{$bulletin->title}}</strong>
	    @if(\Auth::check())
	    @if(\Auth::user()->isAdmin() || \Auth::user()->isBulletin())
	    <span class="pull-right">
	    <a href="{{ url('/bulletin/create/')}}">New</button></a> |
	    <a href="{{ url('/bulletin/'.$bulletin->id.'/edit/')}}">Edit</button></a>
	    </span>
	    @endif
	    @endif
	    <p>{!!$bulletin->body!!}
	    <a href="{{ url('/bulletin/'.$bulletin->id)}}"><button class="catbtn">Read More</button></a>
	    </p>
      </div>
      <div class="col-md-6" style="min-height: 25em">
	    <center><a href="{{ url('/ministry/'.$ministry->id)}}"><h1>{{$ministry->heading}}</h1></a></center>
	    <strong>{{$ministry->title}}</strong>
	    @if(\Auth::check())
	    @if(\Auth::user()->isAdmin())
	    <span class="pull-right">
	    <a href="{{ url('/ministry/create/')}}">New</button></a> |
	    <a href="{{ url('/ministry/'.$ministry->id.'/edit/')}}">Edit</button></a>
	    </span>
	    @endif
	    @endif
	    <p>{!!$ministry->body!!}
	    <a href="{{ url('/ministry/'.$ministry->id)}}"><button class="catbtn">Read More</button></a>
	    </p>
      </div>
    </div>
  </div>



</div>














@stop