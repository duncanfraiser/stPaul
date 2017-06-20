@extends('layouts.main')
@section('content')
  <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 text-center" style="min-height: 45em">
	<h2>Religious Education</h2>
	  <div class="row">
	    <div class="col-md-6 col-sm-6 col-xs-12 bigBtnDiv">
		  <a href="{{url('/education/create')}}"><button class="bigBlueBtn">New Family & Student</button></a>
	    </div>
	    <div class="col-md-6 col-sm-6 col-xs-12 bigBtnDiv">	
	  	  <a href="{{url('/education/create')}}"><button class="bigYellowBtn">Update Returning Student</button></a>
	    </div>
	    <div class="col-md-6 col-sm-6 col-xs-12 bigBtnDiv">
	      <a href="{{url('/education/addNew')}}"><button class="bigGreenBtn">Add New Student to Existing Family</button></a>
	    </div>
	    <div class="col-md-6 col-sm-6 col-xs-12 bigBtnDiv">	
		  <a href="{{url('/education/addNew')}}"><button class="bigRedBtn">Fubar</button></a>
	    </div>
	  </div>  
  </div>
@stop
