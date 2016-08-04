@extends('layouts.main')
@section('content')
<div class="col-md-11 col-md-offset-1">
<h2>RICA Registration List</h2>
 <div class="col-md-5">                   
	@foreach($rcias as $key=>$rcia)
	{{++$key}}.
	<a href="{{url('/RCIA/'.$rcia->id)}}">{{$rcia->lastName}}, {{$rcia->firstName}}</a><br />
	@endforeach
</div>
</div>
@stop