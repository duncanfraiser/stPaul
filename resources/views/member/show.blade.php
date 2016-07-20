@extends('includes.layout')
@section('content')

<h1>Welcome {{$member->tNameOne}} {{$member->familyName}}</h1>

<a href="{{ url('/member/'.$member->id.'/dependents/create/') }}"><button class="btn btn-primary btn-xs">Add Dependent Currently living in Household</button></a>

@stop