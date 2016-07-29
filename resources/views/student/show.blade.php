@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br />
	<h3> Thank you for registering the following student or students for Religious Education Classes.</h3>
	<ul>
    @foreach($parent->student as $stud)
    <li><h3>{{$stud->firstName}} {{$stud->middleName}} {{$stud->lastName}}</h3></li>
    @endforeach                      
 	</ul>
	 
	 <a href="{{url('/education/'.Request::route()->education.'/student/create')}}"><button class="pull-right btn btn-primary">Registered Additional Student</button></a>
	<a href="{{url('/')}}"><button class="pull-right btn btn-secondary">Return Home</button></a>
</div>       
@stop



