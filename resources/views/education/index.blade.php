@extends('layouts.main')
@section('content')
<div class="col-md-11 col-md-offset-1">
<h2>Religious Education Registration Index
<small><div class="dropdown" style="padding: 0px 0px 10px 0px">
<button class=" dropdown-toggle" style="padding: 0px 0px 0px 0px" data-toggle="dropdown">Index Options
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="{{url('/education/grade')}}">Sort by Grade</a></li>
<li><a href="{{url('/education/familyEmail')}}">Family Email List</a></li>
<li><a href="{{url('/education/studentEmail')}}">Student Email List</a></li>
<li><a href="{{url('/education/changes')}}">30 Day Change Report</a></li>
</ul></div></small></h2>
 <div class="col-md-5">                   
	@foreach($eds as $key=>$ed)
	{{++$key}}.
	@if($ed->father_last_name != NULL)
	<a href="{{url('/education/'.$ed->id.'/family')}}">{{$ed->father_last_name}} Family  </a><span style="color:red">{{ $ed->paid}}</span><br />
	@else
	<a href="{{url('/education/'.$ed->id.'/family')}}">{{$ed->mother_last_name}} Family  </a><span style="color:red">{{ $ed->paid}}</span><br />
	@endif
	<ul>
	    @foreach($ed->student as $stud)
    <a href="{{url('/education/'.$ed->id.'/family/'.$stud->id)}}"><li>{{$stud->firstName}} {{$stud->middleName}} {{$stud->lastName}}</li></a>
    @endforeach   

	</ul>
	@endforeach
</div>
</div>
@stop