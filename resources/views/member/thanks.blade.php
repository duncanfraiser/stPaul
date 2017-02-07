@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
<img width='100%' src="{{url('/banners/member_header.png/')}}">
<center><h1>Thank You!</h1></center>
<h4>The {{$member->familyName}} family has been added to the St. Paul Parish Members Index.</h4>
<h4>Plese <a href="{{ url('/member/'.$member->id.'/dependents/create/') }}">Click Here</a> to add a dependent currently living in the household, or <a href="{{ url('/') }}">Click Here</a> to return home.</h4>
</dir>
</div>





@stop