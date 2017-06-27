@extends('layouts.main')
@section('content')
<div class="col-md-10 col-md-offset-1" style="margin-top: 50px">
<table>
  <tr>
    <th class="thHead" colspan="3">
      <h2>Religious Education Sort By Family</h2>
      @include('includes.educationIndex')
    </th>
</tr>	
	<tr>
	  <th class="thBlue"><center>Family</center></th>
	  <th class="thYellow"><center>Enrolled Children</center></th>
	  <th class="thRed"><center>Payment Status</center></th>
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
	      <td class="tdRed">No Payment Received</td>
	    @endif
	  </tr>
	@endforeach
</table>


</div>
@stop