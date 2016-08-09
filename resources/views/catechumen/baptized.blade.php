@extends('layouts.main')
@section('content')
<div class="col-md-11 col-md-offset-1">
<h2>RICA Baptized List</h2>
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