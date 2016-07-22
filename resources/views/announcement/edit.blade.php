@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
{{Form::model($announcement, ['method' => 'PATCH', 'action' => ['AnnouncementsController@update', $announcement->id]])}}
	<div class="form-group">
		{{Form::label('heading', 'Heading:')}}
		{{Form::text('heading', null, ['class' => 'form-control', 'placeholder' => 'Enter Announcement Heading'])}}
		{{Form::label('title', 'Title:')}}
		{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Announcement Title'])}}
		{{Form::label('excerpt', 'Excerpt:')}}
		{{Form::textarea('excerpt', null, ['class' => 'form-control', 'placeholder' => 'Enter Announcement Excerpt'])}}
		{{Form::label('body', 'Body:')}}
		{{Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter Announcement Body'])}}
	</div>
	<div class='pull-right'>
		<div class="form-group">
		{{Form::submit('Update', ['class' => 'btn btn-primary'])}}
		{{Form::close()}}		
		</div>
	</div>
<div class='pull-right'>
	<a href="{{url('/')}}"><button class="btn btn-secondary">Cancelee</button></a>
	</div>
</div>
                <div class="col-md-6 col-md-offset-3">
                    {{Form::open(['method' => 'DELETE', 'route' => ['announcement.destroy', $announcement->id], 'class' => 'delete'])}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {{Form::close()}}
                </div>

@stop
@section('scripts')
@include('includes._froalaOptions')
<script>
	$(".delete").on("submit", function(){
		return confirm("Do you want to delete this item?");
	});
</script>
@stop