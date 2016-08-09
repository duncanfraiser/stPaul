@extends('layouts.main')
@section('content')
<div class="col-md-11 col-md-offset-1">
<h2>RCIA Registration List
<small><div class="dropdown" style="padding: 0px 0px 10px 0px">
<button class=" dropdown-toggle" style="padding: 0px 0px 0px 0px" data-toggle="dropdown">Index Options
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="{{url('/RCIA/baptized')}}">Baptized List</a></li>
<li><a href="{{url('/RCIA/annulment')}}">Annulment List</a></li>
</ul></div></small></h2>
 <div class="col-md-6">                   
	@foreach($rcias as $key=>$rcia)
	{{++$key}}.
	<a href="{{url('/RCIA/'.$rcia->id)}}">{{$rcia->lastName}}, {{$rcia->firstName}}</a><br />
	@endforeach
</div>
</div>
@stop