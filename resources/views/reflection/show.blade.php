@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2 text-center formdiv">
	<h2>Reflection Video by: {{$reflection->title}}</h2>
	<div class="col-md-12">
	<iframe width="100%" style="min-height:315px"  {!!$reflection->embed!!} frameborder="0" allowfullscreen>{{$reflection->title}}</iframe>
	</div>
	<a style="margin-left: .5em" href="{{url('reflection/')}}"><button class="redwhitebtn">Video Gallery</button></a>
</div>

@stop