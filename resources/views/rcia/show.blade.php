@extends('includes.layout')
@section('content')

<h1>{{$rcia->firstName}}</h1>
<h1>{{$rcia->lastName}}</h1>

<a href="{{ url('/RCIA/'.$rcia->id.'/edit/') }}"><button class="btn btn-primary btn-xs">Edit</button></a>

@stop