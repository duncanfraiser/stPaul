@extends('layouts.main')
@section('content')
<div class="col-md-11 col-md-offset-1">
<h2>RICA Baptized List
<small><div class="dropdown" style="padding: 0px 0px 10px 0px">
<button class=" dropdown-toggle" style="padding: 0px 0px 0px 0px" data-toggle="dropdown">Index Options
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="{{url('/RCIA')}}">RCIA Index List</a></li>
<li><a href="{{url('/RCIA/annulment')}}">Annulment List</a></li>
</ul></div></small></h2>
 <div class="col-md-6">        
 <h3><u>Baptized List</u></h3>           
	@foreach($yesBaps as $key=>$yesBap)
	{{++$key}}.
	<a href="{{url('/RCIA/'.$yesBap->id)}}">{{$yesBap->lastName}}, {{$yesBap->firstName}}</a><br />
	@endforeach
</div>
 <div class="col-md-6">     
 <h3><u>Not Baptized</u></h3>                
	@foreach($noBaps as $key=>$noBap)
	{{++$key}}.
	<a href="{{url('/RCIA/'.$noBap->id)}}">{{$noBap->lastName}}, {{$noBap->firstName}}</a><br />
	@endforeach
</div>
</div>
@stop