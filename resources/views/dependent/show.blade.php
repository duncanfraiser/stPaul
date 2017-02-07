@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
<center><img width='100%' src="{{url('/banners/member_header.png/')}}"></center>

<div class="col-md-12">
<h2><u>{{$member->familyName}} Family</u></h2>  
<p>Registered Date: <span style="color:#337ab7">{{$member->todaysDate}}</span><br/>
Parish Previously Registered: <span style="color:#337ab7">{{$member->prevParish}}</span></p>
<div class="col-md-6"> 
<h3><u>Dependent</u></h3>
<p><h4><span style="color:#337ab7">{{$dependent->firstName}} {{$dependent->middleName}} {{$dependent->lastName}}</span></h4>
Gender: <span style="color:#337ab7">{{$dependent->sex}}</span><br/>
Preferred Name: <span style="color:#337ab7">{{$dependent->perferedName}}</span><br/>
Date of Birth: <span style="color:#337ab7">{{$dependent->dob}}</span><br/>
Cell Phone: <span style="color:#337ab7">{{$dependent->cellPhone}}</span><br/>
Primary Email Address: <span style="color:#337ab7">{{$dependent->email}}</span><br/>
Name of School: <span style="color:#337ab7">{{$dependent->school}}</span><br/>
Grade: <span style="color:#337ab7">{{$dependent->grade}}</span><br/>
Active Catholic: <span style="color:#337ab7">{{$dependent->active}}</span><br/>
If no, list religion: <span style="color:#337ab7">{{$dependent->ifNo}}</span><br/>
<h4><u>Baptism</u></h4>
Date of Baptism: <span style="color:#337ab7">{{$dependent->bapDate}}</span><br/>
Name of Parish: <span style="color:#337ab7">{{$dependent->bapParish}}</span><br/>
Location: <span style="color:#337ab7">{{$dependent->bapPlace}}</span><br/>
<h4><u>Reconciliation</u></h4>
Date of First Reconciliation: <span style="color:#337ab7">{{$dependent->recDate}}</span><br/>
Name of Parish: <span style="color:#337ab7">{{$dependent->recParish}}</span><br/>
Location: <span style="color:#337ab7">{{$dependent->recPlace}}</span><br/>
<h4><u>Communion</u></h4>
Date of Communion: <span style="color:#337ab7">{{$dependent->commDate}}</span><br/>
Name of Parish: <span style="color:#337ab7">{{$dependent->commParish}}</span><br/>
Location: <span style="color:#337ab7">{{$dependent->commPlace}}</span><br/>
<h4><u>Confirmation</u></h4>
Date of Confirmation: <span style="color:#337ab7">{{$dependent->confirmDate}}</span><br/>
Name of Parish: <span style="color:#337ab7">{{$dependent->confirmParish}}</span><br/>
Location: <span style="color:#337ab7">{{$dependent->confirmPlace}}</span><br/>




</p>
</div>
</div>
</div>

@stop
