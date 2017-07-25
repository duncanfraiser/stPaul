@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2" style="margin-top: 50px">
<table>
  <tr>
    <th class="thHead" colspan="2">
      <h2>Religious Education 2017 Change Report</h2>
      @include('includes.educationIndex')
    </th>
</tr>	
	<tr>
	  <th class="thBlue" colspan="2"><center>New Family</center></th>
	</tr>  
	<tr>
		<th class="thBlack">Family Name</th>
		<th class="thBlack">Created Date</th>
	</tr>
	@foreach($newfams as $newfam)
	  <tr>
	  	@if($newfam->father_last_name != "")
	      <td><a class="tdBlack" href="{{url('/education/'.$newfam->id.'/family')}}">{{$newfam->father_last_name}} Family</a></td>
	      <td>{{date('F d, Y', strtotime($newfam->created_at))}}</td>
	    @else
	      <td><a class="tdBlack" href="{{url('/education/'.$newfam->id.'/family')}}">{{$newfam->mother_last_name}} Family</a></td>
	      <td>{{date('F d, Y', strtotime($newfam->created_at))}}</td>
	    @endif
	  

	  </tr>

	@endforeach
	
	<tr>
	  <th class="thYellow" colspan="2"><center>New Student</center></th>
	</tr>  
	<tr>
		<th class="thBlack">Student Name</th>
		<th class="thBlack">Created Date</th>
	</tr>
	@foreach($newstudents as $newstudent)
	<tr>
		<td><a class="tdBlack" href="{{url('/education/'.$newstudent->education_id.'/family/'.$newstudent->id)}}">{{$newstudent->firstName}} {{$newstudent->lastName}}</a></td>
		<td>{{date('F d, Y', strtotime($newfam->created_at))}}</td>
	</tr>
	@endforeach



	<tr>
	  <th class="thRed" colspan="2"><center>Updated Family</center></th>
	</tr>  
	<tr>
		<th class="thBlack">Family Name</th>
		<th class="thBlack">Updated Date</th>
	</tr>

	@foreach($updatedfams as $updatedfam)
	<tr>
	  	@if($updatedfam->father_last_name != "")
	      <td><a class="tdBlack" href="{{url('/education/'.$updatedfam->id.'/family')}}">{{$updatedfam->father_last_name}} Family</a></td>
	      <td>{{date('F d, Y', strtotime($updatedfam->updated_at))}}</td>
	    @else
	      <td><a class="tdBlack" href="{{url('/education/'.$updatedfam->id.'/family')}}">{{$updatedfam->mother_last_name}} Family</a></td>
	      <td>{{date('F d, Y', strtotime($updatedfam->updated_at))}}</td>
	    @endif
	</tr>
	@endforeach







	<tr>
	  <th class="thGreen" colspan="2"><center>Updated Student</center></th>
	</tr>  
	<tr>
		<th class="thBlack">Student Name</th>
		<th class="thBlack">Updated Date</th>
	</tr>

	@foreach($updatedstudents as $updatedstudent)
	<tr>
		<td><a class="tdBlack" href="{{url('/education/'.$updatedstudent->education_id.'/family/'.$updatedstudent->id)}}">{{$updatedstudent->firstName}} {{$updatedstudent->lastName}}</a></td>
		<td>{{date('F d, Y', strtotime($newfam->updated_at))}}</td>
	</tr>
	@endforeach
</table>


</div>
@endsection