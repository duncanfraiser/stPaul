@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br />
<h1>Volunteer Change Report</h1>
<p>The following have been added or updated within the past 30 days.</p>
@foreach($changes as $change)
	<ul>
		<li><a href="{{url('/ChristLife/'.$change->id)}}">{{$change->lastName}}, {{$change->firstName}}</a></li>
	</ul>
@endforeach
</div>
@stop