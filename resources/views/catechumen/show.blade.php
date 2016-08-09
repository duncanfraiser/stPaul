@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
<h2>{{$rcia->firstName}} {{$rcia->middleName}} {{$rcia->lastName}}  <small><a style="color:xred" href="{{url('/RCIA/'.$rcia->id.'/edit')}}">edit|delete</a></small></h2>
<ul>
<li>Maiden Name: <span style="color:#337ab7">{{$rcia->maidenName}}</span></li>
<li>Home Phone: <span style="color:#337ab7">{{$rcia->homePhone}}</span></li>
<li>Cell Phone: <span style="color:#337ab7">{{$rcia->cellPhone}}</span></li>
<li>Home Address: <span style="color:#337ab7">{{$rcia->address}}</span></li>
<li>Date of Birth: <span style="color:#337ab7">{{$rcia->dob}}</span></li>
<li>Occupation: <span style="color:#337ab7">{{$rcia->occupation}}</span></li>
<li>Work Phone: <span style="color:#337ab7">{{$rcia->workPhone}}</span></li>
<li>Email: <span style="color:#337ab7">{{$rcia->email}}</span></li>
<li>Child Care Needed: <span style="color:#337ab7">{{$rcia->childcare}}</span></li>
<li>Age of Children: <span style="color:#337ab7">{{$rcia->childage}}</span></li>
<li>Baptized: <span style="color:#337ab7">{{$rcia->baptized}}</span></li>
<li>Baptized Location: <span style="color:#337ab7">{{$rcia->bapChurch}}</span></li>
<li>Baptized Date: <span style="color:#337ab7">{{$rcia->bapDate}}</span></li>
<li>If you are baptized Catholic, have you practiced your faith: <span style="color:#337ab7">{{$rcia->practiced}}</span></li>
<li>Why are you interested in the Catholic Church at this time: <span style="color:#337ab7">{{$rcia->why}}</span></li>
<li>Father's Full Name: <span style="color:#337ab7">{{$rcia->dadFirstName}} {{$rcia->dadMiddleName}} {{$rcia->dadLastName}}</span></li>
<li>Mother's Full Name: <span style="color:#337ab7">{{$rcia->momFirstName}} {{$rcia->momMiddleName}} {{$rcia->momLastName}}</span></li>
<li>Married: <span style="color:#337ab7">{{$rcia->married}}</span></li>
<li>First Marriage: <span style="color:#337ab7">{{$rcia->married}}</span></li>
<li>Is this the first marriage for you and your spouse? <span style="color:#337ab7">{{$rcia->firstMarriage}}</span></li>
<li>Where were you married? <span style="color:#337ab7">{{$rcia->married_location}}</span></li>
<li>Have you or your spouse/fiancee ever been divorced? <span style="color:#337ab7">{{$rcia->married_divorced}}</span></li>
<li>If "yes", has there been an annulment granted by the Catholic Church? <span style="color:#337ab7">{{$rcia->annulment_granted}}</span></li>
<li>Are you or your spouse/fiancee presently seeking an annulment? <span style="color:#337ab7">{{$rcia->annulment_pending}}</span></li>
<li>Has your spouse/fiancee ever been baptized? <span style="color:#337ab7">{{$rcia->spouse_baptized}}</span></li>
<li>If "yes", in what faith tradition? <span style="color:#337ab7">{{$rcia->spouse_faith}}</span></li>
<li>In what church did the baptism take place? <span style="color:#337ab7">{{$rcia->spouse_church}}</span></li>
<li>Church Address: <span style="color:#337ab7">{{$rcia->spouse_church_address}}</span></li>

	
</ul>
<div class='pull-right'>
<a href="{{URL::previous()}}"><button class="btn btn-primary">Back</button></a>
</div>
</div>
@stop