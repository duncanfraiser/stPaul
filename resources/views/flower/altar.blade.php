@extends('layouts.main')


@section('content')
<div class="col-md-8 col-md-offset-2"><br />

{{Form::model($flower, ['method' => 'PATCH', 'action' => ['FlowerController@update', $flower->id]])}}

{{-- 	{{ Form::hidden('start_date', $flower->start_date) }} --}}
	<h2>{{$flower->date}} Flowers<br>{{$flower->extra}}<br>{{$flower->extratwo}}</h2>
	<h3>{{$flower->altar_title}}</h3>

	<div class="form-group">

		{{Form::label('altar_spons', 'Donated By:')}}
		{{Form::text('altar_spons', null, ['class' => 'form-control', 'placeholder' => "Please Enter Altar Flowers Donator's Full Name"])}}
	</div>
	<div class="form-group">
		{{Form::label('altar_color', 'Please indicate any special color or flower requests:')}}
		{{Form::textarea('Altar_color', null, ['class' => 'form-control', 'placeholder' => "Please Enter Special Color or Flower Requests"])}}
	</div>
	<div class="form-group">
		{{Form::label('altar_honor', 'In Honor/Memory of:')}}
		{{Form::textarea('altar_honor', null, ['class' => 'form-control', 'placeholder' => "Please Enter Honor/Memory Information for Altar Flowers"])}}
	</div>


	<div class='pull-right'>
		<div class="form-group">
		{{Form::submit('Sign Up', ['class' => 'btn btn-primary'])}}
		{{Form::close()}}		
		</div>
	</div>
	<div class='pull-right'>

	<a href="{{ url('/flower') }}"><button class="pull-right btn btn-secondary">Cancel</button></a>
	</div>

</div>	

@stop