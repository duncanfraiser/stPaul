@extends('layouts.main')
@section('content')
<div class="col-md-10 col-md-offset-1" style="margin-top: 50px">
<table>
  <tr>
    <th class="thHead" colspan="3">
      <h2>RCIA Registration List</h2>
      @include('includes.rciaIndex')      
    </th>
  </tr>
  <tr>
  	<th class="thBlue">
  		Name
  	</th>
  	<th class="thYellow">
  		Cell Phone
  	</th>
  	<th class="thRed">
  		Email
  	</th>
	@foreach($rcias as $key=>$rcia)
	<tr>
	  <td>{{++$key}}. <a href="{{url('/RCIA/'.$rcia->id)}}">{{$rcia->lastName}}, {{$rcia->firstName}}</a></td>
	  <td>{{$rcia->cellPhone}}</td>
	  <td>{{$rcia->email}}</td>
	<tr>
	@endforeach
</table>
</div>
@stop