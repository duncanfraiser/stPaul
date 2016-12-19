@extends('layouts.main')
@section('content')
<div class="container text-center">

<u><h1>{{$member->familyName}} Family Dependents:</h1></u>

@foreach($member->dependent as $child)
<h2>{{$child->firstName}} {{$child->lastName}}</h2>
@endforeach
<h3>Plese <a href="{{ url('/member/'.$member->id.'/dependents/create/') }}">Click Here</a> to add another dependent currently living in the household, <br/> or <a href="{{ url('/') }}">Click Here</a> to return home.</h3>
	
</div>
@stop