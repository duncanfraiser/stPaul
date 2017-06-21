@extends('layouts.main')
@section('content')
@include('includes.banner')

<div class='row yo'>
  <div class="col-md-12 mobile">
	<div class="col-md-12 lintbar">
      <center><span style="font-size: 125%">Sharing Christ Registration </span>
      <a href="{{url('/ChristLife/create')}}"><button class="smallGreenBtn">Click Here</button></a></center>
	</div>
  </div>
</div>




<div class="row yo" >


  <div class="col-md-4 mobile" >
    <div class="col-md-12 homecol" >
      <div class="box blueDiv">
        Announcements 
	  </div>
      <div class="col-md-12 homediv">
	    @if(\Auth::check())
    	  @if(\Auth::user()->isAdmin())
	   	    <a href="{{ url('/announcement/'.$announcement->id.'/edit/')}}"><button class='smallRedBtn'>Edit</button></a> 
	        <a href="{{ url('/announcement/create/')}}"><button class='smallBlueBtn'>New</button></a>	    
	      @endif
	    @endif
	    <h4>{{$announcement->title}}</h4>
	    <p>{!!$announcement->excerpt!!}</p>
      </div>
      <div class="col-md-12 homeBtnDiv">
        <a href="{{ url('/announcement/'.$announcement->id)}}"><button class="blueBtn">Read More</button></a>
      </div>
    </div>
  </div>


  <div class="col-md-4 mobile">
    <div class="col-md-12 homecol" >
      <div class="box yellowDiv">
        Mass Times 
	  </div>
      <div class="col-md-12 homediv">
	    @if(\Auth::check())
	      @if(\Auth::user()->isAdmin())
	        <a href="{{ url('/masstime/'.$masstime->id.'/edit/')}}"><button class="smallRedBtn">Edit</button></a>
	        <a href="{{ url('/masstime/create/')}}"><button class="smallBlueBtn">New</button></a> 
	      @endif
	    @endif
	    <h4>{{$masstime->title}}</h4>
	    <p>{!!$masstime->excerpt!!}</p>
      </div>
      <div class="col-md-12 homeBtnDiv">
	    <a href="{{ url('/masstime/'.$masstime->id)}}"><button class="yellowBtn">Read More</button></a>
	  </div>
    </div>
  </div>

  <div class="col-md-4 mobile">
    <div class="col-md-12 homecol" >
      <div class="box redDiv" >
        Religious Ed & Youth 
	  </div>
      <div class="col-md-12 homediv">
	    @if(\Auth::check())
	    @if(\Auth::user()->isAdmin() || \Auth::user()->isYouth())
	    <a href="{{ url('/youth/'.$youth->id.'/edit/')}}"><button class="smallRedBtn">Edit</button></a>
	    <a href="{{ url('/youth/create/')}}"><button class="smallBlueBtn">New</button></a>
	    @endif
	    @endif
	    <h4>{{$youth->title}}</h4>
	    <p>{!!$youth->excerpt!!}</p>
	  </div>
	  <div class="col-md-12 homeBtnDiv">
	    <a href="{{ url('/youth/'.$youth->id)}}"><button class="redBtn">Read More</button></a>
	  </div>
    </div>
  </div>


</div>


<div class="row yo">
  <div class="col-md-5 col-md-offset-1 mobile" >
    <div class="col-md-12 homecol">
      <div class="box greenDiv">
        Fr. Gerry's Weekly Homily 
	  </div>
      <div class="col-md-12 homediv">
	    @if(\Auth::check())
	      @if(\Auth::user()->isAdmin())
	        <a href="{{ url('/homily/'.$homily->id.'/edit/')}}"><button class="smallRedBtn">Edit</button></a>
	        <a href="{{ url('/homily/create/')}}"><button class="smallBlueBtn">New</button></a>
	      @endif
	    @endif
	    <h4>{{$homily->title}}</h4>
	    <p>{!!$homily->excerpt!!}</p>
      </div>
      <div class="col-md-12 homeBtnDiv">
	    <a href="{{ url('/homily/'.$homily->id)}}"><button class="greenBtn">Read More</button></a>
	  </div>
    </div>
  </div>

  <div class="col-md-5 mobile">
    <div class="col-md-12 homecol">
      <div class="col-md-6" style="padding: 0">
        <div class="box blueDiv2">
        Bulletins
        </div>
        <div class="col-md-12 homediv">
	      @if(\Auth::check())
    	    @if(\Auth::user()->isAdmin() || \Auth::user()->isBulletin())
	          <a href="{{ url('/bulletin/'.$bulletin->id.'/edit/')}}"><button class='smallRedBtn'>Edit</button></a>
	          <a href="{{ url('/bulletin/create/')}}"><button class='smallBlueBtn'>New</button></a>
	        @endif
	      @endif
	      <h4>{{$bulletin->title}}</h4>
	      <p>{!!$bulletin->excerpt!!}</p>
	    </div>
	    <div class="col-md-12 homeBtnDiv">
          <a href="{{ url('/bulletin/'.$bulletin->id)}}"><button class="blueBtn">Read More</button></a>
        </div>  
      </div>
    


      <div class="col-md-6" style="padding: 0">
        <div class="box blueDiv2">
        Ministries
        </div>
        <div class="col-md-12 homediv">    
	      @if(\Auth::check())
	        @if(\Auth::user()->isAdmin())
	          <a href="{{ url('/ministry/'.$ministry->id.'/edit/')}}"><button class='smallRedBtn'>Edit</button></a>
	          <a href="{{ url('/ministry/create/')}}"><button class='smallBlueBtn'>New</button></a> 
	        @endif
	      @endif
	      <h4>{{$ministry->title}}</h4>
	      <p>{!!$ministry->excerpt!!}</p>
	    </div>
	    <div class="col-md-12 homeBtnDiv">
  	      <a href="{{ url('/ministry/'.$ministry->id)}}"><button class="blueBtn">Read More</button></a>
        </div>
      </div>




    </div>
  </div>
</div>


<div class='row yo'>
  <div class="col-md-12 mobile">
	<div class="col-md-12 lintbar">
	  @if(\Auth::check())
	    @if(\Auth::user()->isAdmin())
	      <a href="{{ url('/reflection/'.$reflection->id.'/edit/')}}"><button class='smallRedBtn'>Edit</button></a>	    
	      <a href="{{ url('/reflection/create/')}}"><button class='smallBlueBtn'>New</button></a>	   
	    @endif
	  @endif
	  <center><span style="font-size: 125%">"You Got A Minute?" </span>
	  <a href="{{url('reflection/')}}"><button class="greenBtn">Click Here</button></a></center>
	</div>
  </div>
</div>





@stop