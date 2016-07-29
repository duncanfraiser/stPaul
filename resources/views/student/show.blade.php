@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br />
	<h3> Thank you for registering the following student or students for Religious Education Classes.</h3>
	<ul>
    @foreach($parent->student as $stud)
    <li><h3>{{$stud->firstName}} {{$stud->middleName}} {{$stud->lastName}}</h3></li>
    @endforeach                      
 	</ul><br /><br />

 	<div><p>
 		Please complete and submit the <a target="blank" href="{{url('/files/Release form - Copy.docx')}}">Parental Consent, Photo Release, Medical Release Form</a> for all registered children. (One form per family) and payment before classs begin on September 11. You may place it in a sealed envelope marked "Religious Ed" and drop it in the collection basket at Mass. Thank you! 
 	</p>
 		
 	</div><br /><br /><br />
	 
	 <a href="{{url('/education/'.Request::route()->education.'/student/create')}}"><button class="pull-right btn btn-primary">Register Additional Student</button></a>
	<a href="{{url('/')}}"><button class="pull-right btn btn-secondary">Return Home</button></a>
</div>       
@stop



