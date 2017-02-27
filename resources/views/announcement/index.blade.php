@extends('layouts.main')
@section('content')
<div class="row yo" >
  <div class="col-md-8 col-md-offset-2 homecol">
    <div class="box" style="background-color: #3e95d1">
      Announcement Archive
    </div>
    <div class="col-md-12 homediv">
      <div class="col-md-10 col-md-offset-1" style="margin-top: 1em">
      <ul>
      	@foreach($announcements as $announcement)
		<li><a href="{{url('/announcement/'.$announcement->id)}}">{{$announcement->title}}</a></li>
		@endforeach
      </ul>
    </div>
  </div>
</div>
@stop