@extends('layouts.main')
@section('content')
<div class="row yo" >
  <div class="col-md-8 col-md-offset-2 homecol">
    <div class="box" style="background-color: #3e95d1">
      Announcement 
    </div>
	<div class="col-md-12 homediv">
	  @if(\Auth::check())
	  @if(\Auth::user()->isAdmin())
      <span class="pull-right">
      <a href="{{ url('/announcement/'.$announcement->id.'/edit/')}}"><button class ='editbtn'>Edit</button></a>
      <a href="{{ url('/announcement/create/')}}"><button class ='editbtn'>New</button></a>
      </span>
      @endif
      @endif
	  <h3>{{$announcement->title}}</h3>
	  <p>{!!$announcement->body!!}</p>
	  <div style="padding-bottom: 2em">
		<h3>Announcement Archive</h3>
     	<ul>
		  @foreach($archives as $archive)
		  @if($archive->id == $announcement->id)
		  @else
		  <li><a href="{{url('/announcement/'.$archive->id)}}">{{$archive->title}}</button></a></li>
		  @endif
		  @endforeach
        </ul>
        <div style="margin-left: 2em">	
          <a href="{{ url('/announcement/')}}"><button class="bluebtn">View All</button></a>
        </div>   	
	  </div>  
	</div>
  </div>
</div>
@stop