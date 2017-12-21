@extends('layouts.main')


@section('content')
<div class="col-md-12">
<div class="col-md-10 col-md-offset-1">
<h2>2017 Flower Chart</h2>
<h3>Altar Flowers - Cost $70<br/>
Blessed Mother Flowers - Cost $40</h3>
<h3>Thank you for signing up to Donate flowers on {{$flower->date}}</h3>
<p>You may mail your payment or drop it in the Weekend Offertory. Please make checks payable to St. Paul Catholic Church, and indicate payment is for Altar Flowers or Blessed Mother Flowers with the designated date. The Church will order the flowers and have them delivered on {{$flower->date}}.</p>
@if($flower->altar_donor != "")
<h3>{{$flower->altar_title}} are Donated by: <span style="color: red">{{$flower->altar_donor}}</span></h3>
@else
<h3><a href="{{url('/flower/'.$flower->id.'/altar')}}">{{$flower->altar_title}} are avaliable.</a></h3>
@endif
@if($flower->date == 'December 8th')
@else
@if($flower->blessed_mother_donor != "")
<h3>{{$flower->mother_title}} are Donated by: <span style="color: red">{{$flower->blessed_mother_donor}}</span></h3>
@else
<h3><a href="{{url('/flower/'.$flower->id.'/blessedmother')}}">{{$flower->mother_title}} are avaliable.</a></h3>
@endif
@endif

	<div class='pull-right'>

	<a href="{{ url('/flower') }}"><button class="pull-right btn btn-primary">Return to Flower Chart</button></a>
	</div>
</div>

</div>
@stop
