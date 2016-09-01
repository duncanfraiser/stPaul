@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br />
<h1>Volunteer Index</h1>
<ol>
	@foreach($volunteers as $volunteer)
	<li><a href="{{url('/volunteer/'.$volunteer->id)}}">{{$volunteer->last_name}}, {{$volunteer->first_name}}</a></li>
	@endforeach
</ol>

</div>

@stop

@section('scripts')
@stop