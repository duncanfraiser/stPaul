@extends('layouts.main')
@section('content')
<div class="DFcontainer col-md-8 col-md-offset-2">
{{Form::model($bulletin, ['method' => 'PATCH', 'action' => ['BulletinController@update', $bulletin->id]])}}
	<div class="form-group">
		{{Form::label('title', 'Title:')}}
		{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Bulletin Title'])}}
		{{Form::label('body', 'Body:')}}
		{{Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter Bulletin Body'])}}
	</div>
	<div class='pull-right'>
		<div class="form-group">
		{{Form::submit('Update Bulletin', ['class' => 'btn btn-primary'])}}
		{{Form::close()}}		
		</div>
	</div>
	<a href="{{url('/')}}"><button class="pull-right btn btn-secondary">Cancel</button></a>
</div>
                <div class="col-md-6 col-md-offset-3">
                    {{Form::open(['method' => 'DELETE', 'route' => ['bulletin.destroy', $bulletin->id], 'class' => 'delete'])}}
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