@extends('layouts.main')


@section('content')
<div class="col-md-8 col-md-offset-2"><br />

{{Form::model($flower, ['method' => 'PATCH', 'action' => ['FlowerController@update', $flower->id]])}}

	{{ Form::hidden('start_date', $flower->start_date) }}


	<div class="form-group">
	@if($flower->alter != '')
	{{ Form::hidden('alter', $flower->alter) }}
	<p>{{$flower->alter}}</p>	
	@else
		{{Form::label('alter', 'Alter:')}}
		{{Form::text('alter', null, ['class' => 'form-control', 'placeholder' => ''])}}
	</div>
	@endif
	@if($flower->mother != '')
	{{ Form::hidden('mother', $flower->mother) }}
	<p>{{$flower->mother}}</p>	
	@else
	<div class="form-group">
		{{Form::label('mother', 'Mother:')}}
		{{Form::text('mother', null, ['class' => 'form-control'])}}
	</div>
	@endif
	<div class='pull-right'>
		<div class="form-group">
		{{Form::submit('Sign Up', ['class' => 'btn btn-primary'])}}
		{{Form::close()}}		
		</div>
	</div>
	<div class='pull-right'>

	<a href="{{ URL::previous() }}"><button class="pull-right btn btn-secondary">Back</button></a>
	</div>

</div>	

@stop

@section('scripts')
@include('includes._froalaOptions')
<script>
	$(".delete").on("submit", function(){
		return confirm("Do you want to delete this Event?");
	});
</script>
@stop