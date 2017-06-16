@extends('layouts.main')
@section('content')
<div class="row yo" >
  <div class="col-md-8 col-md-offset-2 homecol">
    <div class="box blueDiv">
      Create Announcement 
    </div>
	<div class="col-md-12 homediv">
      {{Form::open(['method' => 'POST', 'action' => 'AnnouncementsController@store'])}}
		<div class="form-group">
		  @if($errors->has('title'))	
		  {{Form::label('title', 'Please Enter Title:',['class' => 'errs'])}}
		  {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Announcement Title'])}}
		  @else

		  {{Form::label('title', 'Title:')}}
		  {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Announcement Title'])}}
		  @endif
		</div>
		<div class="form-group">
		  {{Form::label('excerpt', 'Excerpt:')}}
		  {{Form::textarea('excerpt', null, ['class' => 'form-control', 'placeholder' => 'Enter Announcement Excerpt'])}}
		</div>
		<div class="form-group">
		  {{Form::label('body', 'Body:')}}
		  {{Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter Announcement Body'])}}
	    </div>
	    <div class="form-group" style="float:right">
		  {{Form::submit('Create', ['class' => 'bluebtn'])}}		
		</div>
	  {{Form::close()}}	
    	<a style='float:right' href="{{url('/')}}"><button class="blackbtn">Cancel</button></a>
	</div>
  </div>	
</div>	
@stop
@section('scripts')
  @include('includes._froala-js')
  @include('includes._froala-css')
  @include('includes._froalaOptions')
@stop

