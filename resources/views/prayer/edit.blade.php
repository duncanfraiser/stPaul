@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br />
{{Form::model($prayer, ['method' => 'PATCH', 'action' => ['PrayerController@update', $prayer->id]])}}
	<div class="form-group">

		{{Form::label('title', 'Title:')}}
		{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Prayer Title'])}}
		{{Form::label('body', 'Body:')}}
		{{Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter Prayer Body'])}}
	</div>
	<div class='pull-right'>
		<div class="form-group">
		{{Form::submit('Update', ['class' => 'btn btn-primary'])}}
		{{Form::close()}}		
		</div>
	</div>
	<div class='pull-right'>
	<a href="{{url('/')}}"><button class="btn btn-secondary">Cancel</button></a>
	</div>
    <div class="pull-right">
       	<div class="form-group">
        {{Form::open(['method' => 'DELETE', 'route' => ['prayer.destroy', $prayer->id], 'class' => 'delete'])}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {{Form::close()}}
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