@extends('layouts.main')
@section('content')
<div class="col-md-10 col-md-offset-1">
<h2>RCIA Child Care List
<small><div class="dropdown" style="padding: 0px 0px 10px 0px">
<button class=" dropdown-toggle" style="padding: 0px 0px 0px 0px" data-toggle="dropdown">Index Options
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="{{url('/RCIA/baptized')}}">Baptized List</a></li>
<li><a href="{{url('/RCIA/annulment')}}">Annulment List</a></li>
<li><a href="{{url('/RCIA')}}">RCIA Index List</a></li>

</ul></div></small></h2>


<p>
@foreach($ChildCares as $key=>$ChildCare)
	{{++$key}}.
	<a href="{{url('/RCIA/'.$ChildCare->id)}}">{{$ChildCare->lastName}}, {{$ChildCare->firstName}}</a><br />
@endforeach
</p>
</div>
@stop