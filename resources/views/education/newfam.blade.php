@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2" style="margin-top: 50px">
<table>
  <tr>
    <th class="thHead">
      <h2>Religious Education Sort By Family</h2>
      @include('includes.educationIndex')
    </th>
</tr>	
	<tr>
	  <th class="thBlue"><center>New Family</center></th>
	</tr>  
	@foreach($newfams as $newfam)
	  <tr>
	  	@if($newfam->father_last_name != "")
	      <td><a class="tdBlack" href="{{url('/education/'.$newfam->id.'/family')}}">{{$newfam->father_last_name}} Family</a></td>
	    @else
	      <td><a class="tdBlack" href="{{url('/education/'.$newfam->id.'/family')}}">{{$newfam->mother_last_name}} Family</a></td>
	    @endif
	  </tr>
	@endforeach
	
	<tr>
	  <th class="thYellow"><center>New Student</center></th>
	</tr>  
	@foreach($newstudents as $newstudent)
	<tr>
		<td><a class="tdBlack" href="">{{$newstudent->firstName}} {{$newstudent->lastName}}</a></td>
	</tr>
	@endforeach
	<tr>
	  <th class="thRed"><center>Updated Student</center></th>
	</tr>  
	@foreach($updatedstudents as $updatedstudent)
	<tr>
		<td><a class="tdBlack" href="">{{$updatedstudent->firstName}} {{$updatedstudent->lastName}}</a></td>
	</tr>
	@endforeach
</table>


</div>
@endsection