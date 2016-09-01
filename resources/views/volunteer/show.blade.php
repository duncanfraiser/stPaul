@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br />
<h1>Volunteer {{$volunteer->first_name}} {{$volunteer->last_name}} <small><a style="color:xred" href="{{url('/volunteer/'.$volunteer->id.'/edit')}}">edit|delete</a></small></h1>
<ul>
<li>Age: <span style="color:#337ab7">{{$volunteer->age}}</span></li>
<li>Gender: <span style="color:#337ab7">{{$volunteer->gender}}</span></li>
<li>Phone Number: <span style="color:#337ab7">{{$volunteer->phone}}</span></li>
<li>Receive Texts: <span style="color:#337ab7">{{$volunteer->text}}</span></li>
<li>Email Address: <span style="color:#337ab7">{{$volunteer->email}}</span></li>
<li>Street Address: <span style="color:#337ab7">{{$volunteer->street}}</span></li>
<li>City: <span style="color:#337ab7">{{$volunteer->city}}</span></li>
<li>State: <span style="color:#337ab7">{{$volunteer->state}}</span></li>
<li>Zip: <span style="color:#337ab7">{{$volunteer->zip}}</span></li>
<li>Explanation: <span style="color:#337ab7">{{$volunteer->explanation}}</span></li>

</ul>
@stop

@section('scripts')
@stop