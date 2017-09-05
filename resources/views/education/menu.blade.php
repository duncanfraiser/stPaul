@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br/>
<img class="banner" src="{{url('/banners/ReligiousEdBanner.png/')}}">
</div>
<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 text-center">
<h1><u>Online Registration is now closed.</u></h1>

<p><i>Please call the Church Office @ 601-992-9547 to enroll a new or returning student for the 2017/2018 year.<br/><br/>

3 yrs~6th grade classes begin Sunday, September 10th @ 9:15 am<br/>
Big Deal Youth Group (7th~12th grade) begins Wednesday, September 13th @ 6:30 pm</i></p>
</div>
{{--   <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 text-center">
	  <div class="row">
	    <div class="col-md-6 col-sm-6 col-xs-12 bigBtnDiv">
		  <a href="{{url('/education/create')}}"><button class="bigBlueBtn">New Family & Student</button></a>
	    </div>
	    <div class="col-md-6 col-sm-6 col-xs-12 bigBtnDiv">	
	  	  <a href="{{url('/studentUpdate/create')}}"><button class="bigYellowBtn">Update Returning Student</button></a>
	    </div>
	    <div class="col-md-6 col-sm-6 col-xs-12 bigBtnDiv">
	      <a href="{{url('/education/addNew')}}"><button class="bigGreenBtn">Add New Student to Existing Family</button></a>
	    </div>
	    <div class="col-md-6 col-sm-6 col-xs-12 bigBtnDiv">	
		  <a href="{{url('/education/about')}}"><button class="bigRedBtn">About Religious Education</button></a>
	    </div>
	  </div>  
  </div> --}}
@stop
