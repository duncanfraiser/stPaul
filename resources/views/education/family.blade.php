@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2" style="margin-top: 50px;">

<table>
    <tr>
      <th class="thHead" colspan="2"><center><h2>The {{$education->father_last_name}} Family</h2></center></th>
    </tr>
    <tr>
      <th class="thBlue" colspan="2"><center>Payment Infromation</center></hd>
    </tr>
    <tr>
      <td>Payment Received:</td>
      <td class="tdCash">{{$education->paid}}</td>
    </tr>
	<tr>
		<td>Payment Type:</td>
		<td class="tdCash">{{$education->paidType}}</td>
	</tr>
	<tr>
		<td>Payment Ammount:</td>
		<td class="tdCash">{{$education->paidAmount}}</td>
	</tr>
    <tr>
      <th class="thYellow" colspan="2"><center>Parent's Information</center></th>
    </tr>
	<tr>
		<td>Father's Full Name:</td>
		<td class="tdBlue">{{$education->father_first_name}} {{$education->father_middle_name}} {{$education->father_last_name}}</td>
	</tr>
	<tr>
	<td>Father's Date of Birth:</td>
		<td class="tdBlue">{{$education->father_dob}}</td>
	</tr>
	<tr>
		<td>Mother's First Name:</td>
		<td class="tdBlue">{{$education->mother_first_name}} {{$education->mother_middle_name}} {{$education->mother_last_name}}</td>
	</tr>
	<tr>
		<td>Mother's Date of Birth:</td>
		<td class="tdBlue">{{$education->mother_dob}}</td>
	</tr>
	<tr>
		<td>Marital Status:</td>
		<td class="tdBlue">{{$education->marital_status}}</td>
	</tr>
	<tr>
		<td>Children Reside With:</td>
		<td class="tdBlue">{{$education->reside_with}}</td>
	</tr>
	<tr>
		<td>Street Address:</td>
		<td class="tdBlue">{{$education->address}}</td>
	</tr>
	<tr>
		<td>City:</td>
		<td class="tdBlue">{{$education->city}}</td>
	</tr>
	<tr>
		<td>State:</td>
		<td class="tdBlue">{{$education->state}}</td>
	</tr>
	<tr>
		<td>Zip:</td>
		<td class="tdBlue">{{$education->zip}}</td>
	</tr>
	<tr>
		<td>Home Phone:</td>
		<td class="tdBlue">{{$education->phone}}</td>
	</tr>
	<tr>
		<td>Father's Work Phone:</td>
		<td class="tdBlue">{{$education->father_work}}</td>
	</tr>
	<tr>
		<td>Father's Cell Phone:</td>
		<td class="tdBlue">{{$education->father_cell}}</td>
	</tr>
	<tr>
		<td>Father's Email:</td>
		<td class="tdBlue">{{$education->father_email}}</td>
	</tr>
	<tr>
		<td>Mother's Work Phone:</td>
		<td class="tdBlue">{{$education->mother_work}}</td>
	</tr>
	<tr>
		<td>Mother's Cell Phone:</td>
		<td class="tdBlue">{{$education->mother_cell}}</td>
	</tr>
	<tr>
		<td>Mother's Email:</td>
		<td class="tdBlue">{{$education->mother_email}}</td>
	</tr>
    <tr>
      <th class="thRed" colspan="2"><center>Current Enrolled Students</center></th>
    </tr>	
	<tr>
		<td>Student Name:</td>
		<td class="tdBlue">
		    @foreach($education->student as $stud)
		    <li><a href="{{url('/education/'.$stud->education_id.'/family/'.$stud->id)}}">{{$stud->firstName}} {{$stud->middleName}} {{$stud->lastName}}</a></li>
		    @endforeach   
		</td>
	</tr>
    <tr>
      <th class="thGreen" colspan="2"><center>Emergency Contacts Information</center></th>
    </tr>
	<tr>
		<td>Emergency Contact:</td>
		<td class="tdBlue">{{$education->contact_one_name}}</td>
	</tr>
	<tr>
		<td>Emergency Contact Relation:</td>
		<td class="tdBlue">{{$education->contact_one_relation}}</td>
	</tr>
	<tr>
		<td>Emergency Contact Phone:</td>
		<td class="tdBlue">{{$education->contact_one_phone}}</td>
	</tr>
	<tr>
		<td>Emergency Contact:</td>
		<td class="tdBlue">{{$education->contact_two_name}}</td>
	</tr>
	<tr>
		<td>Emergency Contact Relation:</td>
		<td class="tdBlue">{{$education->contact_two_relation}}</td>
	</tr>
	<tr>
		<td>Emergency Contact Phone:</td>
		<td class="tdBlue">{{$education->contact_two_phone}}</td>
	</tr>	

</table>

<div class='rightBtn'>
<a href="{{url('/education/'.$education->id.'/edit')}}"><button class="redBtn">edit|delete</button></a>
<a href="{{URL::previous()}}"><button class="blueBtn">Back</button></a>
</div>
</div>
@stop