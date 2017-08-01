@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
<img style="margin-top: 20px" class="banner" src="{{url('/banners/RCIADiscoveringChristLogo.png')}}">
<div class="col-md-12">
<center><h3>Thank You {{$catechumen->firstName}}!</h3></center>

<center><p>You are now registered for The Rite of Christian Initiation of Adults (RCIA) course.<br />We will contact you soon with more information.</p></center>
</div>
</div>
@stop