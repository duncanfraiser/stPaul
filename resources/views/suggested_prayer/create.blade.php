 @extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br />

{{Form::open(['method' => 'POST', 'action' => 'SuggestedPrayerController@store'])}}
	<div class="form-group">
		{{Form::label('title', 'Title:')}}
		{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
		{{Form::label('body', 'Body:')}}
		{{Form::textarea('body', null, ['class' => 'form-control'])}}
	</div>
	<div class='pull-right'>
		<div class="form-group">
		{{Form::submit('Create', ['class' => 'btn btn-primary'])}}
		{{Form::close()}}		
		</div>
	</div>
	<a href="{{url('/')}}"><button class="pull-right btn btn-secondary">Cancel</button></a>
</div>		
@stop

@section('scripts')
@include('includes._froalaOptions')
@stop
