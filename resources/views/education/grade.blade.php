@extends('layouts.main')
@section('content')
<div class="col-md-11 col-md-offset-1">
<h2>Religious Education Grade Index
<small><div class="dropdown" style="padding: 0px 0px 10px 0px">
<button class=" dropdown-toggle" style="padding: 0px 0px 0px 0px" data-toggle="dropdown">Index Options
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="{{url('/education/')}}">Sort by Family</a></li>
<li><a href="{{url('/education/familyEmail')}}">Family Email List</a></li>
<li><a href="{{url('/education/studentEmail')}}">Student Email List</a></li>
</ul></div></small></h2>
 <div class="col-md-6"> 

 <h4><u>3 Year Old Pre-school</u></h4>
	<ol>	
	@foreach($students as $key=>$student)
	@if($student->grade == '3yr')
	<li><a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></li>
	@endif
	@endforeach
	</ol>

<h4><u>4 Year Old Pre-school</u></h4>
		<ol>	
	@foreach($students as $key=>$student)
	@if($student->grade == '4yr')
	<li><a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></li>
	@endif
	@endforeach
	</ol>

<h4><u>Kindergarten</u></h4>
		<ol>	
	@foreach($students as $key=>$student)
	@if($student->grade == 'kindergarten')
	<li><a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></li>
	@endif
	@endforeach
	</ol>

<h4><u>1st Grade</u></h4>
		<ol>	
	@foreach($students as $key=>$student)
	@if($student->grade == '1')
	<li><a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></li>
	@endif
	@endforeach
	</ol>

<h4><u>2nd Grade</u></h4>
		<ol>	
	@foreach($students as $key=>$student)
	@if($student->grade == '2')
	<li><a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></li>
	@endif
	@endforeach
	</ol>

<h4><u>3rd Grade</u></h4>
		<ol>	
	@foreach($students as $key=>$student)
	@if($student->grade == '3')
	<li><a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></li>
	@endif
	@endforeach
	</ol>

<h4><u>4th Grade</u></h4>
		<ol>	
	@foreach($students as $key=>$student)
	@if($student->grade == '4')
	<li><a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></li>
	@endif
	@endforeach
	</ol>

<h4><u>5th Grade</u></h4>
		<ol>	
	@foreach($students as $key=>$student)
	@if($student->grade == '5')
	<li><a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></li>
	@endif
	@endforeach
	</ol>

<h4><u>6th Grade</u></h4>
		<ol>	
	@foreach($students as $key=>$student)
	@if($student->grade == '6')
	<li><a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></li>
	@endif
	@endforeach
	</ol>

<h4><u>7th Grade</u></h4>
		<ol>	
	@foreach($students as $key=>$student)
	@if($student->grade == '7')
	<li><a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></li>
	@endif
	@endforeach
	</ol>

<h4><u>8th Grade</u></h4>
		<ol>	
	@foreach($students as $key=>$student)
	@if($student->grade == '8')
	<li><a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></li>
	@endif
	@endforeach
	</ol>

<h4><u>9th Grade</u></h4>
		<ol>	
	@foreach($students as $key=>$student)
	@if($student->grade == '9')
	<li><a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></li>
	@endif
	@endforeach
	</ol>

<h4><u>10th Grade</u></h4>
		<ol>	
	@foreach($students as $key=>$student)
	@if($student->grade == '10')
	<li><a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></li>
	@endif
	@endforeach
	</ol>

<h4><u>11th Grade</u></h4>
		<ol>	
	@foreach($students as $key=>$student)
	@if($student->grade == '11')
	<li><a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></li>
	@endif
	@endforeach
	</ol>

<h4><u>12th Grade</u></h4>
		<ol>	
	@foreach($students as $key=>$student)
	@if($student->grade == '12')
	<li><a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}} </a></li>
	@endif
	@endforeach
	</ol>
</div>
</div>
@stop