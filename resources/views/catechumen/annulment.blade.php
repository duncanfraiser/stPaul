@extends('layouts.main')
@section('content')
<div class="col-md-11 col-md-offset-1">
<h2>RICA Baptized List
<small><div class="dropdown" style="padding: 0px 0px 10px 0px">
<button class=" dropdown-toggle" style="padding: 0px 0px 0px 0px" data-toggle="dropdown">Index Options
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="{{url('/RCIA')}}">RCIA Index List</a></li>
<li><a href="{{url('/RCIA/baptized')}}">Baptized List</a></li>
</ul></div></small></h2>
 <div class="col-md-6">        
 <h3><u>Annulment Granted</u></h3>           
	@foreach($grantAnnuls as $key=>$grantAnnul)
	{{++$key}}.
	<a href="{{url('/RCIA/'.$grantAnnul->id)}}">{{$grantAnnul->lastName}}, {{$grantAnnul->firstName}}</a><br />
	@endforeach
</div>
 <div class="col-md-6">     
 <h3><u>Annulment Pending</u></h3>                
	@foreach($pendAnnuls as $key=>$pendAnnul)
	{{++$key}}.
	<a href="{{url('/RCIA/'.$pendAnnul->id)}}">{{$pendAnnul->lastName}}, {{$pendAnnul->firstName}}</a><br />
	@endforeach
</div>
</div>
@stop