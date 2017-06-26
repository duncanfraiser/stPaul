@extends('layouts.main')
@section('content')



<div class="col-md-8 col-md-offset-2" style="margin-top: 50px;">



<table>
  <tr>
    <th class="thHead" colspan="2">
      <h2><center>Religious Education Change Report</center></h2>
      <p>The following have been added or updated within the past 7 days.</p>
      @include('includes.educationIndex')
    </th>
  </tr>	
  <tr>
  	<td class="thBlue" colspan="2"><center>Student Information</center></td>
  </tr>
  <tr>
  	<td class="thYellow">Name</td>
  	<td class="thRed">Updated Date</td>
  </tr>
  @foreach($students as $student)
	<tr>
  	  <td>
		<a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->firstName}} {{$student->lastName}}</a>
      </td>
      <td>
      	{{date('l, M d Y g:i a', strtotime($student->updated_at))}}
      </td>
    </tr>
  @endforeach
  <tr>
  	<th colspan="2" class="thGreen"><center>Family Information Updated</center></th>
  </tr>
  <tr>
  	<td class="thBlue">Name</td>
  	<td class="thYellow">Updated Date</td>
  </tr>

  @foreach($changes as $change)
	<tr>
  	  <td>
		@if($change->father_last_name != "")
		<a href="{{url('/education/'.$change->id.'/family')}}">{{$change->father_last_name}} Family</a>
		@else
		<a href="{{url('/education/'.$change->id.'/family')}}">{{$change->mother_last_name}} Family</a>
		@endif
      </td>
      <td>
      	{{date('l, M d Y g:i a', strtotime($change->updated_at))}}
      </td>
    </tr>
  @endforeach
</table>
</div>
@stop