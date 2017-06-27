@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br/>
  <img class="banner" src="{{url('/banners/ReligiousEdBanner.png/')}}"> 
  <h3>Thank you for updating  <span class="tdBlue">{{$studentUpdate->name}}'s</span> information</h3>
  <p>Please check the information below:</p>
  <ul>
	<li>Father's name: <span class="tdBlue">{{$studentUpdate->father}}</span></li>
	<li>Mother's name: <span class="tdBlue"> {{$studentUpdate->mother}}</span></li>
	<li>Grade 2017-18: <span class="tdBlue"> {{$studentUpdate->grade}}</span></li>
	<li>School: <span class="tdBlue"> {{$studentUpdate->school}}</span></li>
	<li>Information to be updated: <span class="tdBlue"> {{$studentUpdate->info}}</span></li>
  </ul>
</div>
@stop