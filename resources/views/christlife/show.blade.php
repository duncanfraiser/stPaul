@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
<h2>{{$christlife->firstName}} {{$christlife->lastName}}  <small><a style="color:red" href="{{url('/ChristLife/'.$christlife->id.'/edit')}}">edit|delete</a></small></h2>
<ul>
<li>Session Day: <span style="color:#337ab7">{{$christlife->day}}</span></li>
<li>Age: <span style="color:#337ab7">{{$christlife->age}}</span></li>
<li>Gender: <span style="color:#337ab7">{{$christlife->gender}}</span></li>
<li>Phone Number: <span style="color:#337ab7">{{$christlife->phone}}</span></li>
<li>Receive Text: <span style="color:#337ab7">{{$christlife->text}}</span></li>
<li>Email: <span style="color:#337ab7">{{$christlife->email}}</span></li>
<li>Street Address: <span style="color:#337ab7">{{$christlife->street}}</span></li>
<li>City, State, Zip: <span style="color:#337ab7">{{$christlife->city}}, {{$christlife->state}}, {{$christlife->zip}}</span></li>
<li>Child Care Needed: <span style="color:#337ab7">{{$christlife->childcare}}</span></li>
<li>If Yes, Child Details: <span style="color:#337ab7">{{$christlife->childage}}</span></li>
<li>Ride Needed: <span style="color:#337ab7">{{$christlife->ride}}</span></li>
<li>Provide Ride: <span style="color:#337ab7">{{$christlife->provideride}}</span></li>
<li>Food Allergies: <span style="color:#337ab7">{{$christlife->allergies}}</span></li>
<li>Additional Comments: <span style="color:#337ab7">{{$christlife->comments}}</span></li>
</ul>
<div class='pull-right'>
<a href="{{URL::previous()}}"><button class="btn btn-primary">Back</button></a>
</div>
</div>
@stop