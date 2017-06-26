@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br/>
<img class="banner" src="{{url('/banners/relEd.png/')}}">
</div>
  <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 text-center">
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
		  <a href=""><button class="bigRedBtn">About Religious Education</button></a>
	    </div>
	  </div>  
  </div>
@stop
