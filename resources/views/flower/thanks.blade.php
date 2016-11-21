@extends('layouts.main')


@section('content')
<div class="col-md-12">
<div class="col-md-10 col-md-offset-1">
<h2>2017 Flower Chart</h2>
<h3>Altar Flowers - Cost $70<br/>
Blessed Mother Flowers - Cost $40</h3>
<h3>Thank you for signing up to Donate flowers on {{$flower->date}}</h3>
@if($flower->altar_spons != "")
<h3>{{$flower->altar_title}} are Donated by: <span style="color: red">{{$flower->altar_spons}}</span></h3>
@else
<h3><a href="{{url('/flower/'.$flower->id.'/altar')}}">{{$flower->altar_title}} are avaliable.</a></h3>
@endif
@if($flower->date == 'December 8th')
@else
@if($flower->mother_spons != "")
<h3>{{$flower->mother_title}} are Donated by: <span style="color: red">{{$flower->mother_spons}}</span></h3>
@else
<h3><a href="{{url('/flower/'.$flower->id.'/blessedmother')}}">{{$flower->mother_title}} are avaliable.</a></h3>
@endif
@endif

	<div class='pull-right'>

	<a href="{{ url('/flower') }}"><button class="pull-right btn btn-primary">Return to 2017 Flower Chart</button></a>
	</div>
</div>

</div>
@stop
