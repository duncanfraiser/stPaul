@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br />
<h1>Religious Education Change Report</h1>
<p>The following have been added or updated within the past 7 days.</p>
<h3><u>Family Information Updated</u></h3>
@foreach($changes as $change)
	<ul>
		@if($change->father_last_name != "")
		<li><a href="{{url('/education/'.$change->id.'/family')}}">{{$change->father_last_name}} Family</a></li>
		@else
		<li><a href="{{url('/education/'.$change->id.'/family')}}">{{$change->mother_last_name}} Family</a></li>
		@endif
	</ul>
@endforeach
<h3><u>Student Information Updated</u></h3>
@foreach($students as $student)
	<ul>	
		<li><a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->firstName}} {{$student->lastName}}</a></li>
	</ul>
@endforeach
</div>
@stop