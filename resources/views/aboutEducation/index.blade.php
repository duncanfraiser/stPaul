@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br/>

<img class="banner" src="{{url('/banners/ReligiousEdBanner.png/')}}">

	  @if(\Auth::check())
	  @if(\Auth::user()->isAdmin())
      <span class="pull-right">
      <a href="{{ url('/education/about/1/edit')}}"><button class ='smallRedBtn' style="margin-top: 25px">Edit</button></a>
      </span>
      @endif
      @endif
      <h1>About Religious Education</h1>
<div>{!!$about->body!!}</div>
</div>
@stop