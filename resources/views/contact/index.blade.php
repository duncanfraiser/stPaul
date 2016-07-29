@extends('layouts.main')
@section('content')
<div class="col-md-12">
<div class="col-md-8 col-md-offset-2">
<center><h1>Archive</h1></center>
@foreach($contacts as $contact)
<li><a href="{{url('/contact/'.$contact->id)}}">{{$contact->title}}</a></li>
@endforeach
</div>
</div>
@stop