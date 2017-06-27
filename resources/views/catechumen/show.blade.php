@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2" style="margin-top: 50px">
<table>
    <tr>
      <th class="thHead" colspan="2"><center><h2>{{$rcia->firstName}} {{$rcia->middleName}} {{$rcia->lastName}}</h2></center></th>
    </tr>
    <tr>
      <th class="thBlue" colspan="2"><center>General Infromation</center></th>
    </tr>	
    <tr>
	  <td>Maiden Name:</td>
	  <td class="tdBlue">{{$rcia->maidenName}}</td>
	</tr>

    <tr>
	  <td>Home Phone:</td>
	  <td class="tdBlue">{{$rcia->homePhone}}</td>
	</tr>
    <tr>
	  <td>Cell Phone:</td>
	  <td class="tdBlue">{{$rcia->cellPhone}}</td>
	</tr>
    <tr>
	  <td>Home Address:</td>
	  <td class="tdBlue">{{$rcia->address}}</td>
	</tr>
    <tr>
	  <td>Date of Birth:</td>
	  <td class="tdBlue">{{$rcia->dob}}</td>
	</tr>
    <tr>
	  <td>Place of Birth:</td>
	  <td class="tdBlue">{{$rcia->pob}}</td>
	</tr>
    <tr>
	  <td>Occupation:</td>
	  <td class="tdBlue">{{$rcia->occupation}}</td>
	</tr>
    <tr>
	  <td>Work Phone:</td>
	  <td class="tdBlue">{{$rcia->workPhone}}</td>
	</tr>
    <tr>
	  <td>Email:</td>
	  <td class="tdBlue">{{$rcia->email}}</td>
	</tr>
	<tr>
	  <td>Father's Full Name: </td>
	  <td class="tdBlue">{{$rcia->dadFirstName}} {{$rcia->dadMiddleName}} {{$rcia->dadLastName}}</td>
	</tr>
	<tr>
	  <td>Mother's Full Name:</td>
	  <td class="tdBlue">{{$rcia->momFirstName}} {{$rcia->momMiddleName}} {{$rcia->momLastName}}</td>
	</tr>
	<td>Why are you interested in the Catholic Church at this time:</td>
	  <td class="tdBlue">{{$rcia->why}}</td>
	</tr>
    <tr>
      <th class="thYellow" colspan="2"><center>Child Care Infromation</center></th>
    </tr>	
	<tr>
	  <td>Child Care Needed:</td>
	  <td class="tdBlue">{{$rcia->childcare}}</td>
	</tr>
	<tr>
	  <td>Age of Children:</td>
	  <td class="tdBlue">{{$rcia->childage}}</td>
	</tr>
    <tr>
      <th class="thRed" colspan="2"><center>Baptize Infromation</center></th>
    </tr>

	<tr>
	  <td>Baptized:</td>
	  <td class="tdBlue">{{$rcia->baptized}}</td>
	</tr>
	<tr>
	  <td>Baptized Location:</td>
	  <td class="tdBlue">{{$rcia->bapChurch}}</td>
	</tr>
	<tr>
	  <td>Baptized Date:</td>
	  <td class="tdBlue">{{$rcia->bapDate}}</td>
	</tr>
	<tr>
	  <td>If you are baptized Catholic, have you practiced your faith:</td>
	  <td class="tdBlue">{{$rcia->practiced}}</td>
	</tr>
	<tr>
    <tr>
      <th class="thGreen" colspan="2"><center>Marital Status</center></th>
    </tr>	
	<tr>
	  <td>Married:</td>
	  <td class="tdBlue">{{$rcia->married}}</td>
	</tr>
	<tr>
	  <td>First Marriage:</td>
	  <td class="tdBlue">{{$rcia->married}}</td>
	</tr>
	<tr>
	  <td>Is this the first marriage for you and your spouse?</td>
	  <td class="tdBlue">{{$rcia->firstMarriage}}</td>
	</tr>
	<tr>
	  <td>Where were you married?</td>
	  <td class="tdBlue">{{$rcia->married_location}}</td>
	</tr>
	<tr>
	  <td>Have you or your spouse/fiancee ever been divorced?</td>
	  <td class="tdBlue">{{$rcia->married_divorced}}</td>
	</tr>
	<tr>
	  <td>If "yes", has there been an annulment granted by the Catholic Church?</td>
	  <td class="tdBlue">{{$rcia->annulment_granted}}</td>
	</tr>
	<tr>  
	  <td>Are you or your spouse/fiancee presently seeking an annulment?</td>
	  <td class="tdBlue">{{$rcia->annulment_pending}}</td>
	</tr>
	<tr>
	  <td>Has your spouse/fiancee ever been baptized?</td>
	  <td class="tdBlue">{{$rcia->spouse_baptized}}</td>
	</tr>
	<tr>
	  <td>If "yes", in what faith tradition?</td>
	  <td class="tdBlue">{{$rcia->spouse_faith}}</td>
	</tr>
	<tr>
	  <td>In what church did the baptism take place?</td>
	  <td class="tdBlue">{{$rcia->spouse_church}}</td>
	</tr>
	<tr>
	  <td>Church Address:</td>
	  <td class="tdBlue">{{$rcia->spouse_church_address}}</td>
	</tr>

</table>








<div class='rightBtn'>
<a href="{{url('/RCIA/'.$rcia->id.'/edit')}}"><button class="redBtn">Edit</button></a>
<a href="{{URL::previous()}}"><button class="blueBtn">Back</button></a>
</div>
</div>
@stop