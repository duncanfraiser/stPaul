@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
		<img width='100%' src="{{url('/banners/member_header.png/')}}">
		<center><h2>{{$member->familyName}} Family Dependents</h2></center>


@foreach($member->dependent as $child)
<center><h3>{{$child->firstName}} {{$child->lastName}}</h3></center>
@endforeach
<h4>Plese <a href="{{ url('/member/'.$member->id.'/dependents/create/') }}">Click Here</a> to add another dependent currently living in the household, or <a href="{{ url('/') }}">Click Here</a> to return home.</h4>
	
</div>
@stop