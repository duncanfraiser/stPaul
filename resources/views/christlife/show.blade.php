@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
<h2>{{$christlife->firstName}} {{$christlife->lastName}}  <small><a style="color:red" href="{{url('/ChristLife/'.$christlife->id.'/edit')}}">edit|delete</a></small></h2>
<ul>
<li>Session Day: <span style="color:blue">{{$christlife->day}}</span></li>
<li>Age: <span style="color:blue">{{$christlife->age}}</span></li>
<li>Gender: <span style="color:blue">{{$christlife->gender}}</span></li>
<li>Phone Number: <span style="color:blue">{{$christlife->phone}}</span></li>
<li>Receive Text: <span style="color:blue">{{$christlife->text}}</span></li>
<li>Email: <span style="color:blue">{{$christlife->email}}</span></li>
<li>Street Address: <span style="color:blue">{{$christlife->street}}</span></li>
<li>City, State, Zip: <span style="color:blue">{{$christlife->city}}, {{$christlife->state}}, {{$christlife->zip}}</span></li>
<li>Child Care Needed: <span style="color:blue">{{$christlife->childcare}}</span></li>
<li>If Yes, Child Details: <span style="color:blue">{{$christlife->childage}}</span></li>
<li>Ride Needed: <span style="color:blue">{{$christlife->ride}}</span></li>
<li>Provide Ride: <span style="color:blue">{{$christlife->provideride}}</span></li>
<li>Food Allergies: <span style="color:blue">{{$christlife->allergies}}</span></li>
<li>Additional Comments: <span style="color:blue">{{$christlife->comments}}</span></li>
</ul>
<div class='pull-right'>
<a href="{{URL::previous()}}"><button class="btn btn-primary">Back</button></a>
</div>
</div>
@stop