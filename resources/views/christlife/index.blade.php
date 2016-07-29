@extends('layouts.main')
@section('content')
<div class="col-md-12 col-md-offset-1">
<h1>Christ Life Registration List</h1>
<div class="col-md-5">
<h3>Tuesday Session</h3>
	@foreach($tuesdays as $key=>$tuesday)
	{{++$key}}.
	<a href="{{url('/ChristLife/'.$tuesday->id)}}">{{$tuesday->lastName}}, {{$tuesday->firstName}}</a><br />
	@endforeach
</div>
<div class="col-md-5">
<h3>Thursday Session</h3>
	@foreach($thursdays as $key=>$thursday)
	{{++$key}}.
	<a href="{{url('/ChristLife/'.$thursday->id)}}">{{$thursday->lastName}}, {{$thursday->firstName}}</a><br />
	@endforeach
</div>
	
</div>
@stop