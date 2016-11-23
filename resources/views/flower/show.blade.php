@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
<h2>2017 Flower Chart Information for {{$flower->date}} <a style="font-size: 75%; color: red" href="{{url('/flower/'.$flower->id.'/edit')}}">Edit</a>
	@if($flower->extra != "")
	<br>{{$flower->extra}}
	@endif
	@if($flower->extratwo != "")
	<br>{{$flower->extratwo}}
	@endif
	</h2>


<h3>{{$flower->altar_title}} </h3>
<ul>
	<li><h4>Donor: <span style="color: #3e95d1">{{$flower->altar_donor}}</span></h4></li>
	<li><h4>In Honor/Memory of:  <span style="color: #3e95d1">{{$flower->altar_flower_honor_memory}}{{$flower->altar_honor}}</span></h4></li>
	<li><h4>Special Flower Requests:  <span style="color: #3e95d1">{{$flower->altar_color}}</span></h4></li>
</ul>
<h3>{{$flower->mother_title}}</h3>
<ul>
	<li><h4>Donor: <span style="color: #3e95d1">{{$flower->blessed_mother_donor}}</span></h4></li>
	<li><h4>In Honor/Memory of:  <span style="color: #3e95d1">{{$flower->blessed_mother_flower_honor_memory}}{{$flower->mother_honor}}</span></h4></li>
	<li><h4>Special Flower Requests:  <span style="color: #3e95d1">{{$flower->mother_color}}</span></h4></li>
</ul>

</div>

@stop