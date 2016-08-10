@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
<h2>{{$student->firstName}} {{$student->middleName}} {{$student->lastName}} <small><a style="color:xred" href="{{url('/education/'.$student->education_id.'/student/'.$student->id.'/edit')}}">edit|delete</a></small></h2>


<ul>
<li>Date of Birth: <span style="color:#337ab7">{{$student->dob}}</span></li>
<li>Age: <span style="color:#337ab7">{{$student->age}}</span></li>
<li>Grade: <span style="color:#337ab7">{{$student->grade}}</span></li>
<li>School: <span style="color:#337ab7">{{$student->school}}</span></li>
<li>Date of Baptism: <span style="color:#337ab7">{{$student->Date_of_Baptism}}</span></li>
<li>Church Name: <span style="color:#337ab7">{{$student->Baptism_Church}}</span></li>
<li>Church Mailing Address: <span style="color:#337ab7">{{$student->Church_Address}}</span></li>
<li>Date of First Holy Communion: <span style="color:#337ab7">{{$student->Communion}}</span></li>
<li>Church Name: <span style="color:#337ab7">{{$student->Communion_Church}}</span></li>
<li>Date of Confirmation: <span style="color:#337ab7">{{$student->Communion_Confirmation}}</span></li>
<li>Church Name: <span style="color:#337ab7">{{$student->Confirmation_Church}}</span></li>
<li>Child's Email: <span style="color:#337ab7">{{$student->email}}</span></li>
<li>Cell Phone: <span style="color:#337ab7">{{$student->cell}}</span></li>
<li>Special Needs: <span style="color:#337ab7">{{$student->needs}}</span></li>



</ul>


<div class='pull-right'>
<a href="{{URL::previous()}}"><button class="btn btn-primary">Back</button></a>
</div>
</div>
@stop