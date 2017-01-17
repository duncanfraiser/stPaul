@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br />
<h1>Volunteer Index<small><div class="dropdown" style="padding: 0px 0px 10px 0px">
<button class=" dropdown-toggle" style="padding: 0px 0px 0px 0px" data-toggle="dropdown">Index Options
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="{{url('/volunteer/changes')}}">Change Report</a></li>
</ul></div></small></h1>
<ol>
	@foreach($volunteers as $volunteer)
	<li><a href="{{url('/volunteer/'.$volunteer->id)}}">{{$volunteer->last_name}}, {{$volunteer->first_name}}</a></li>
	@endforeach
</ol>

</div>

@stop

@section('scripts')
@stop