@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br/>
<img class="banner" src="{{url('/banners/ReligiousEdBanner.png/')}}">
	<h3> Thank you for registering the following student or students for Religious Education Classes.</h3>
	<ul>
    @foreach($parent->student as $stud)
    <li><h4>{{$stud->firstName}} {{$stud->middleName}} {{$stud->lastName}}</h4></li>
    @endforeach                      
 	</ul>
 	<div>
 	  <p>Please complete and submit the <a target="blank" href="{{url('/files/photoReleaseForm.docx')}}">Parental Consent, Photo Release, Medical Release Form</a> for all registered children. (One form per family) and payment before classes begin on September 11. You may place it in a sealed envelope marked "Religious Ed" and drop it in the collection basket at Mass. Thank you!</p> 		
 	</div>
	<div class="rightBtn">
	      <p><a href="{{url('/education/menu')}}"><button class="redBtn">Return To Menu</button></a></p>
	  <a href="{{url('/education/'.Request::route()->education.'/student/create')}}"><button class="blueBtn">Register Additional Student</button></a>

    </div>
</div>       
@stop



