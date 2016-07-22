@extends('layouts.main')


@section('content')
@include('includes.banner')
<div class="row">
<div class="col-md-12">
<div class="col-md-4">
	<center><h1>{{$announcement->heading}}</h1></center>
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
	<a href="{{ url('/announcement/'.$announcement->id)}}">...Read More</button></a>
	</p>
</div>
<div class="col-md-4">
	<center><h1>Mass Times</h1></center>
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
	<a href="{{ url('/masstime/'.$masstime->id)}}">...Read More</button></a>
	</p>
</div>
<div class="col-md-4">
	<center><h1>Bulletins</h1></center>
	<strong>{{$bulletin->title}}</strong>
	@if(\Auth::check())
	@if(\Auth::user()->isAdmin())
	<span class="pull-right">
	<a href="{{ url('/bulletin/create/')}}">New</button></a> |
	<a href="{{ url('/bulletin/'.$bulletin->id.'/edit/')}}">Edit</button></a>
	</span>
	@endif
	@endif
	<p>{!!$bulletin->excerpt!!}
	<a href="{{ url('/bulletin/'.$bulletin->id)}}">...Read More</button></a>
	</p>
</div>
</div>
</div><br><br>

<div class="row">
<div class="col-md-12">
<div class="col-md-5 col-md-offset-1">
	<center><h1>Homilies</h1></center>
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
	<a href="{{ url('/homily/'.$homily->id)}}">...Read More</button></a>
	</p>
</div>
<div class="col-md-5">
	<center><h1>Youth List</h1></center>
	<strong>{{$youth->title}}</strong>
	@if(\Auth::check())
	@if(\Auth::user()->isAdmin())
	<span class="pull-right">
	<a href="{{ url('/youth/create/')}}">New</button></a> |
	<a href="{{ url('/youth/'.$youth->id.'/edit/')}}">Edit</button></a>
	</span>
	@endif
	@endif
	<p>{{$youth->excerpt}}
	<a href="{{ url('/youth/'.$youth->id)}}">...Read More</button></a>
	</p>
</div>
</div>
</div>






@stop