@extends('layouts.main')
@section('content')
<div class="row yo" >
  <div class="col-md-8 col-md-offset-2 homecol">
    <div class="box" style="background-color: #bf202f">
      Religious Ed & Youth 
    </div>
	<div class="col-md-12 homediv">
	  @if(\Auth::check())
	  @if(\Auth::user()->isAdmin())
      <span class="pull-right">
      <a href="{{ url('/youth/create/')}}"><button class ='editbtn'>New</button></a>
      <a href="{{ url('/youth/'.$youth->id.'/edit/')}}"><button class ='editbtn'>Edit</button></a>
      </span>
      @endif
      @endif
	  <h3>{{$youth->title}}</h3>
	  <p>{!!$youth->body!!}</p>
	  <div style="padding-bottom: 2em">
		<h3>{{$heading->heading}} Archive</h3>
     	<ul>
		  @foreach($archives as $archive)
		  @if($archive->id == $youth->id)
		  @else
		  <li><a href="{{url('/youth/'.$archive->id)}}">{{$archive->title}}</button></a></li>
		  @endif
		  @endforeach
        </ul>
        <div style="margin-left: 2em">	
          <a href="{{ url('/youth/')}}"><button class="bluebtn">View All</button></a>
          	<div style="float: right">
              <a target="BLANK" title="Facebook" href="https://www.facebook.com/groups/314270952253518"><img src="/img/facebook.png" width="35" height="35" /></a>
              <a target="BLANK" title="Twitter" href="https://twitter.com/st_paul_brandon"><img src="/img/Twitter.png" width="35" height="35" /></a>
              <a target="BLANK" title="Instagram" href="https://www.instagram.com/st_paul_brandon/"><img src="/img/instagram.png" width="35" height="35" /></a>
            </div> 
        </div>
	  </div>  
	</div>
  </div>
</div>
@stop



