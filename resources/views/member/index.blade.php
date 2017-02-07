@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
<center><img width='100%' src="{{url('/banners/member_header.png/')}}"></center>



<div class="col-md-5">
<h2><u>Parish Members</u></h2>
                    
	@foreach($members as $key=>$member)
	<p>{{++$key}}.
	<a href="{{url('/member/'.$member->id.'/info')}}">{{$member->familyName}} Family </a><p/><br />
	@endforeach
</div>
	
</div>
@stop