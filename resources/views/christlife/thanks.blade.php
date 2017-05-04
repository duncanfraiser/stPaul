@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
<center><img width='100%' src="{{url('/banners/greenChristLife.png/')}}"></center>
<center><h1>Thank You {{$christlife->firstName}}!</h1></center>
<center><h3>You are now registered for our Following Christ Sessions!<br />We will contact you soon with more information.</h3></center>
</div>



@stop