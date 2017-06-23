@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2" style="margin-top: 50px">
  <h2>Religious Education Registration Index
  <small><div class="dropdown" style="padding: 0px 0px 10px 0px">
  <button class=" dropdown-toggle" style="padding: 0px 0px 0px 0px" data-toggle="dropdown">Index Options
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="{{url('/education/changes')}}">Change Report</a></li>
    <li><a href="{{url('/education/grade')}}">Sort by Grade</a></li>
    <li><a href="{{url('/education/familyEmail')}}">Family Email List</a></li>
    <li><a href="{{url('/education/studentEmail')}}">Student Email List</a></li>
 </ul></div></small></h2>


<table>
	<tr>
	  <th class="thBlue"><center>Family</center></th>
	  <th class="thBlue"><center>Enrolled Children</center></th>
	  <th class="thBlue"><center>Payment Status</center></th>
	</tr>  
	@foreach($eds as $ed)
	  <tr>
	  	@if($ed->father_last_name != "")
	      <td><a class="tdBlack" href="{{url('/education/'.$ed->id.'/family')}}">{{$ed->father_last_name}} Family</a></td>
	    @else
	      <td><a class="tdBlack" href="{{url('/education/'.$ed->id.'/family')}}">{{$ed->mother_last_name}} Family</a></td>
	    @endif 
	    <td class="tdBlue">
		    @foreach($ed->student as $stud)
		    <li><a href="{{url('/education/'.$stud->education_id.'/family/'.$stud->id)}}">{{$stud->firstName}} {{$stud->middleName}} {{$stud->lastName}}</a></li>
		    @endforeach   
		</td>
 
	    @if($ed->paid != "")
	      <td class="tdCash">{{$ed->paid}}</td>
	    @else
	      <td class="tdRed">No Payment Recived</td>
	    @endif
	  </tr>
	@endforeach
</table>


</div>
@stop