@extends('layouts.main')
@section('content')
<div class="row yo" >
  <div class="col-md-8 col-md-offset-2 homecol">
    <div class="box" style="background-color: #bf202f">
      Religious Ed & Youth Archive
    </div>
    <div class="col-md-12 homediv">
      <div class="col-md-10 col-md-offset-1" style="margin-top: 1em">
      <ul>
      	@foreach($youths as $youth)
		<li><a href="{{url('/youth/'.$youth->id)}}">{{$youth->title}}</button></a></li>
		@endforeach
      </ul>
    </div>
  </div>
</div>
@stop
