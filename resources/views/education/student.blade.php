@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2" style="margin-top: 50px">


<table>
    <tr>
      <th class="thHead" colspan="2"><center><h2>{{$student->firstName}} {{$student->middleName}} {{$student->lastName}}</h2></center></th>
    </tr>
    <tr>
      <th class="thBlue" colspan="2"><center>General Infromation</center></hd>
    </tr>
    <tr>
      <td>Date of Birth:</td>
      <td class="tdBlue">{{$student->dob}}</td>
    </tr>
	<tr>
		<td>Gender:</td>
		<td class="tdBlue">{{$student->gender}}</td>
	</tr>
	<tr>
		<td>Age:</td>
		<td class="tdBlue">{{$student->age}}</td>
	</tr>	
	<tr>
		<td>Grade:</td>
		<td class="tdBlue">{{$student->grade}}</td>
	</tr>
	<tr>
		<td>School:</td>
		<td class="tdBlue">{{$student->school}}</td>
	</tr>
	<tr>
		<td>Child's Email:</td>
		<td class="tdBlue">{{$student->email}}</td>
	</tr>
	<tr>
		<td>Cell Phone:</td>
		<td class="tdBlue">{{$student->cell}}</td>
	</tr>
	<tr>
		<td>Special Needs:</td>
		<td class="tdBlue">{{$student->needs}}</td>
	</tr>
    <tr>
      <th class="thYellow" colspan="2"><center>Baptism Infromation</center></hd>
    </tr>
	<tr>
		<td>Date of Baptism:</td>
		<td class="tdBlue">{{$student->Date_of_Baptism}}</td>
	</tr>
	<tr>
		<td>Church Name:</td>
		<td class="tdBlue">{{$student->Baptism_Church}}</td>
	</tr>	
	<tr>
		<td>Church Mailing Address:</td>
		<td class="tdBlue">{{$student->Church_Address}}</td>
	</tr>
    <tr>
      <th class="thRed" colspan="2"><center>Communion Infromation</center></hd>
    </tr>	
	<tr>
		<td>Date of First Holy Communion:</td>
		<td class="tdBlue">{{$student->Communion}}</td>
	</tr>	
	<tr>
		<td>Church Name:</td>
		<td class="tdBlue">{{$student->Communion_Church}}</td>
	</tr>
    <tr>
      <th class="thGreen" colspan="2"><center>Confirmation Infromation</center></hd>
    </tr>
	<tr>
		<td>Date of Confirmation:</td>
		<td class="tdBlue">{{$student->Confirmation}}</td>
	</tr>
	<tr>
		<td>Church Name:</td>
		<td class="tdBlue">{{$student->Confirmation_Church}}</td>
	</tr>
</table>



<div class='rightBtn'>
 <a style="color:xred" href="{{url('/education/'.$student->education_id.'/student/'.$student->id.'/edit')}}"><button class="redBtn">edit|delete</button></a>
<a href="{{URL::previous()}}"><button class="blueBtn">Back</button></a>
</div>
</div>
@stop