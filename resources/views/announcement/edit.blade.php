@extends('layouts.main')
@section('content')
<div class="row yo" >
  <div class="col-md-8 col-md-offset-2 homecol">
    <div class="box" style="background-color: #3e95d1">
      Edit Announcement 
    </div>
	<div class="col-md-12 homediv">
      {{Form::model($announcement, ['method' => 'PATCH', 'action' => ['AnnouncementsController@update', $announcement->id]])}}
		<div class="form-group">
		  {{Form::label('title', 'Title:')}}
		  {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Announcement Title'])}}
		</div>
		<div class="form-group">
		  {{Form::label('excerpt', 'Excerpt:')}}
		  {{Form::textarea('excerpt', null, ['class' => 'form-control', 'placeholder' => 'Enter Announcement Excerpt'])}}
		</div>
		<div class="form-group">
		  {{Form::label('body', 'Body:')}}
		  {{Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter Announcement Body'])}}
	    </div>
	    <div class="form-group" style="float: right">
          {{Form::submit('Update', ['class' => 'bluebtn'])}}
        </div>
      {{Form::close()}}
          <a style='float:right' href="{{url('/')}}"><button class="blackbtn">Cancel</button></a>
      <div class="form-group" style="float:right">
        {{Form::open(['method' => 'DELETE', 'route' => ['announcement.destroy', $announcement->id], 'class' => 'delete'])}}
        {{Form::submit('Delete', ['class' => 'redbtn'])}}
        {{Form::close()}}
      </div>
    </div>
  </div>	
</div>	
@stop
@section('scripts')
  @include('includes._froala-js')
  @include('includes._froala-css')
@include('includes._froalaOptions')
<script>
	$(".delete").on("submit", function(){
		return confirm("Do you want to delete this item?");
	});
</script>
@stop

