@extends('layouts.main')
@section('content')
<div class="col-md-11 col-md-offset-1">
<h2>Religious Education Grade Index</h2>
 <div class="col-md-5">                   
	@foreach($students as $key=>$student)
		<ul>
	{{++$key}}. {{$student->firstName}}

	

	</ul>
	@endforeach
</div>
</div>
@stop