@extends('layouts.main')


@section('content')
<div class="col-md-8 col-md-offset-2"><br />

{{Form::model($flower, ['method' => 'PATCH', 'action' => ['FlowerController@update', $flower->id]])}}

{{-- 	{{ Form::hidden('start_date', $flower->start_date) }} --}}
	<h2>{{$flower->date}} Flowers</h2>

	<div class="form-group">
	@if($flower->alter != '')
{{-- 	{{ Form::hidden('alter', $flower->alter) }} --}}
	<p>{{$flower->alter}}</p>	
	@else
		{{Form::label('altar_spons', $flower->altar_title)}}
		{{Form::text('altar_spons', null, ['class' => 'form-control', 'placeholder' => "Please Enter Altar Flowers Sponser's Full Name"])}}
	</div>
	@endif
	@if($flower->mother != '')
	{{ Form::hidden('mother', $flower->mother) }}
	<p>{{$flower->mother}}</p>	
	@else
	<div class="form-group">
		{{Form::label('mother_spons', $flower->mother_title)}}
		{{Form::text('mother_spons', null, ['class' => 'form-control', 'placeholder' => "Please Enter Blessed Mother Flowers Sponser's Full Name"])}}
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

