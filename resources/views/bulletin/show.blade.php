@extends('layouts.main')
@section('content')
<div class="row yo" >
  <div class="col-md-8 col-md-offset-2 homecol">
    <div class="box" style="background-color: #3e95d1">
      Bulletin 
    </div>
	<div class="col-md-12 homediv">
	  @if(\Auth::check())
	  @if(\Auth::user()->isAdmin() || \Auth::user()->isBulletin())
      <span class="pull-right">
      <a href="{{ url('/bulletin/create/')}}"><button class ='editbtn'>New</button></a>
      <a href="{{ url('/bulletin/'.$bulletin->id.'/edit/')}}"><button class ='editbtn'>Edit</button></a>
      </span>
      @endif
      @endif
	  <h3>{{$bulletin->title}}</h3>
	  <p>{!!$bulletin->body!!}</p>
	  <div style="padding-bottom: 2em">
		<h3>Bulletin Archive</h3>
     	<ul>
		  @foreach($archives as $archive)
		  @if($archive->id == $bulletin->id)
		  @else
		  <li><a href="{{url('/bulletin/'.$archive->id)}}">{{$archive->title}}</button></a></li>
		  @endif
		  @endforeach
        </ul>
        <div style="margin-left: 2em">	
          <a href="{{ url('/bulletin/')}}"><button class="bluebtn">View All</button></a>
        </div>   	
	  </div>  
	</div>
  </div>
</div>
@stop

