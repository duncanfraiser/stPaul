@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
<center><img width='100%' src="{{url('/banners/member_header.png/')}}"></center>



<div class="col-md-12">
<h2><u>{{$member->familyName}} Family</u></h2>  
<p>Registered Date: <span style="color:#337ab7">{{$member->todaysDate}}</span><br/>
Parish Previously Registered: <span style="color:#337ab7">{{$member->prevParish}}</span></p><div class="col-md-6">                
<h3><u>Head of Household</u></h3>
<p><h4><span style="color:#337ab7">{{$member->tNameOne}} {{$member->fNameOne}} {{$member->mNameOne}} {{$member->lNameOne}}</span></h4>
Preferred Name: <span style="color:#337ab7">{{$member->perferedNameOne}}</span><br/>
Date Of Birth: <span style="color:#337ab7">{{$member->dobOne}}</span><br/>
Marital Status: <span style="color:#337ab7">{{$member->maritalStat}}</span><br/>
Home Address: <span style="color:#337ab7">{{$member->address}}</span><br/>
City: <span style="color:#337ab7">{{$member->city}}</span><br/>
State: <span style="color:#337ab7">{{$member->state}}</span><br/>
Zip: <span style="color:#337ab7">{{$member->zip}}</span><br/>
Home Phone: <span style="color:#337ab7">{{$member->homePhone}}</span><br/>
Cell Phone: <span style="color:#337ab7">{{$member->cellPhoneOne}}</span><br/>
Primary Email Address: <span style="color:#337ab7">{{$member->emailOne}}</span><br/>
Career Type: <span style="color:#337ab7">{{$member->careerOne}}</span><br/>
Work Phone: <span style="color:#337ab7">{{$member->workPhoneOne}}</span><br/>
Place of Employment: <span style="color:#337ab7">{{$member->employmentOne}}</span><br/>
Best Way to Contact: <span style="color:#337ab7">{{$member->contact}}</span><br/>
Preference for Stewardship: <span style="color:#337ab7">{{$member->stewardship}}</span><br/>
</p>
</div>
<div class="col-md-6"> 
<h3><u>Spouse</u></h3>
<p><h4><span style="color:#337ab7">{{$member->tNameTwo}} {{$member->fNameTwo}} {{$member->mNameTwo}} {{$member->lNameTwo}}</span></h4>
Preferred Name: <span style="color:#337ab7">{{$member->perferedNameTwo}}</span><br/>
Active Catholic: <span style="color:#337ab7">{{$member->active}}</span><br/>
Date Of Birth: <span style="color:#337ab7">{{$member->dobTwo}}</span><br/>
Cell Phone: <span style="color:#337ab7">{{$member->cellPhoneTwo}}</span><br/>
Primary Email Address: <span style="color:#337ab7">{{$member->emailTwo}}</span><br/>
Career Type: <span style="color:#337ab7">{{$member->careerTwo}}</span><br/>
Work Phone: <span style="color:#337ab7">{{$member->workPhoneTwo}}</span><br/>
Place of Employment: <span style="color:#337ab7">{{$member->employmentTwo}}</span><br/>
</p>
</div>	
<div class="col-md-6">

<h3><u>Dependents</u></h3>  
@foreach($member->dependent as $child)
<h4><a href="{{url('/member/'.$member->id.'/dependents/'.$child->id)}}">{{$child->firstName}} {{$child->lastName}} </a></h4>
@endforeach
</div>
</div>
@stop
