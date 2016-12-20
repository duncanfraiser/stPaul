@extends('layouts.main')
@section('content')
<div class="container">
<div class='text-center'>
<h1>St. Paul Staff!!!</h1>
<img style="height: 50%"  src="{{url($staff->img_path)}}">
<h3>{{$staff->name}}</h3>
<a style="font-size: 24px" href="mailto:{{$staff->email}}">{{$staff->email}}</a>
<h3>{{$staff->phone}}</h3>
<h3>{!!$staff->body!!}</h3>
</div>
</div>
@stop