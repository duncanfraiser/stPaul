@extends('layouts.main')
@section('content')
<div class="row yo" >
  <div class="col-md-8 col-md-offset-2 homecol">
    <div class="box" style="background-color: #509543">
      Fr. Gerry's Weekly Homily 
    </div>
	<div class="col-md-12 homediv">
	  @if(\Auth::check())
	  @if(\Auth::user()->isAdmin())
      <span class="pull-right">
      <a href="{{ url('/homily/create/')}}"><button class ='editbtn'>New</button></a>
      <a href="{{ url('/homily/'.$homily->id.'/edit/')}}"><button class ='editbtn'>Edit</button></a>
      </span>
      @endif
      @endif
	  <h3>{{$homily->title}}</h3>
	  <p>{!!$homily->body!!}</p>
	  <div style="padding-bottom: 2em">
		<h3>Homily Archive</h3>
     	<ul>
		  @foreach($archives as $archive)
		  @if($archive->id == $homily->id)
		  @else
		  <li><a href="{{url('/homily/'.$archive->id)}}">{{$archive->title}}</button></a></li>
		  @endif
		  @endforeach
        </ul>
        <div style="margin-left: 2em">	
          <a href="{{ url('/homily/')}}"><button class="bluebtn">View All</button></a>
        </div>   	
	  </div>  
	</div>
  </div>
</div>
@stop
