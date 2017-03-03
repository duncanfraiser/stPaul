@extends('layouts.main')
@section('content')
@include('includes.banner')

<div class='row yo'>
<div class="col-md-12 mobile">
	<div class="col-md-12 lintbar">
		@if(\Auth::check())
	    @if(\Auth::user()->isAdmin())
	    <a href="{{ url('/reflection/'.$reflection->id.'/edit/')}}"><button class='editbtn'>Edit</button></a>	    
	    <a href="{{ url('/reflection/create/')}}"><button class='editbtn'>New</button></a>	   
	    @endif
	    @endif
		<center><h4> "You Got A Minute?" Daily Lenten Video Reflection by: {{$reflection->title}} <a style="margin-left: .5em" href="{{url('reflection/'.$reflection->id)}}"><button class="redwhitebtn">Click Here</button></a></h4></center>
	</div>
</div>
</div>



<div class="row yo" >


  <div class="col-md-4 mobile" >
    <div class="col-md-12 homecol" >
      <div class="box" style="background-color: #3e95d1">
        Announcements 
	  </div>
      <div class="col-md-12 homediv">

	    @if(\Auth::check())
	    @if(\Auth::user()->isAdmin())
	   	<a href="{{ url('/announcement/'.$announcement->id.'/edit/')}}"><button class='editbtn'>Edit</button></a> 
	    <a href="{{ url('/announcement/create/')}}"><button class='editbtn'>New</button></a>	    
	    @endif
	    @endif
	    <h4>{{$announcement->title}}</h4>
	    <p>{!!$announcement->excerpt!!}
	    <a href="{{ url('/announcement/'.$announcement->id)}}"><button class="catbtn">Read More</button></a>
	    </p>
      </div>
    </div>
  </div>


  <div class="col-md-4 mobile">
    <div class="col-md-12 homecol" >
      <div class="box" style="background-color: #e8c562">
        Mass Times 
	  </div>
      <div class="col-md-12 homediv">
	    @if(\Auth::check())
	    @if(\Auth::user()->isAdmin())
	    <a href="{{ url('/masstime/'.$masstime->id.'/edit/')}}"><button class="editbtn">Edit</button></a>
	    <a href="{{ url('/masstime/create/')}}"><button class="editbtn">New</button></a> 
	    @endif
	    @endif
	    <h4>{{$masstime->title}}</h4>
	    <p>{!!$masstime->excerpt!!}
	    <a href="{{ url('/masstime/'.$masstime->id)}}"><button class="catbtn">Read More</button></a>
	    </p>
      </div>
    </div>
  </div>

  <div class="col-md-4 mobile">
    <div class="col-md-12 homecol" >
      <div class="box" style="background-color: #bf202f">
        Religious Ed & Youth 
	  </div>
      <div class="col-md-12 homediv">
	    @if(\Auth::check())
	    @if(\Auth::user()->isAdmin() || \Auth::user()->isYouth())
	    <a href="{{ url('/youth/'.$youth->id.'/edit/')}}"><button class="editbtn">Edit</button></a>
	    <a href="{{ url('/youth/create/')}}"><button class="editbtn">New</button></a>
	    @endif
	    @endif
	    <h4>{{$youth->title}}</h4>
	    <p>{!!$youth->excerpt!!}
	    <a href="{{ url('/youth/'.$youth->id)}}"><button class="catbtn">Read More</button></a>
	    </p>
      </div>
    </div>
  </div>


</div>


<div class="row yo">
  <div class="col-md-5 col-md-offset-1 mobile" >
    <div class="col-md-12 homecol">
      <div class="box" style="background-color: #509543">
        Fr. Gerry's Weekly Homily 
	  </div>
      <div class="col-md-12 homediv">
	    @if(\Auth::check())
	    @if(\Auth::user()->isAdmin())
	    <a href="{{ url('/homily/'.$homily->id.'/edit/')}}"><button class="editbtn">Edit</button></a>
	    <a href="{{ url('/homily/create/')}}"><button class="editbtn">New</button></a>
	    @endif
	    @endif
	    <h4>{{$homily->title}}</h4>
	    <p>{!!$homily->excerpt!!}
	    <a href="{{ url('/homily/'.$homily->id)}}"><button class="catbtn">Read More</button></a>
	    </p>
      </div>
    </div>
  </div>

  <div class="col-md-5 mobile">
    <div class="col-md-12 homecol">
      <div class="col-md-6" style="padding: 0">
        <div class="box" style="background-color: #3e95d1">
        Bulletins
        </div>
        <div class="col-md-12 homediv">

	      @if(\Auth::check())
	      @if(\Auth::user()->isAdmin() || \Auth::user()->isBulletin())
	      <a href="{{ url('/bulletin/'.$bulletin->id.'/edit/')}}"><button class='editbtn'>Edit</button></a>
	      <a href="{{ url('/bulletin/create/')}}"><button class='editbtn'>New</button></a>
	      @endif
	      @endif
	      <h4>{{$bulletin->title}}</h4>
	      <p>{!!$bulletin->excerpt!!}
	      <a href="{{ url('/bulletin/'.$bulletin->id)}}"><button class="catbtn">Read More</button></a>
	      </p>
        </div>
      </div>
    


      <div class="col-md-6" style="padding: 0">
        <div class="box" style="background-color: #3e95d1">
        Ministries
        </div>
        <div class="col-md-12 homediv">    
	      @if(\Auth::check())
	      @if(\Auth::user()->isAdmin())
	      <a href="{{ url('/ministry/'.$ministry->id.'/edit/')}}"><button class='editbtn'>Edit</button>
	      <a href="{{ url('/ministry/create/')}}"><button class='editbtn'>New</button></a> 
	      </a>
	      @endif
	      @endif
	      <h4>{{$ministry->title}}</h4>
	      <p>{!!$ministry->excerpt!!}
	      <a href="{{ url('/ministry/'.$ministry->id)}}"><button class="catbtn">Read More</button></a>
	      </p>
        </div>
      </div>




    </div>
  </div>

</div>

@stop