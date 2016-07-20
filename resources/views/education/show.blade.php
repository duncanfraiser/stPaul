@extends('includes.layout')
@section('content')

<h1>{{$education->firstName}}</h1>
<h1>{{$education->lastName}}</h1>

<a href="{{ url('/education/'.$education->id.'/edit/') }}"><button class="btn btn-primary btn-xs">Edit</button></a>

@stop