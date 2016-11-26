@extends('layouts.main')


@section('content')
<div class="col-md-8 col-md-offset-2"><br />

{{Form::model($flower, ['method' => 'PATCH', 'action' => ['FlowerController@update', $flower->id]])}}

{{-- 	{{ Form::hidden('start_date', $flower->start_date) }} --}}
	<h2>{{$flower->date}} Flowers</h2>
<h3>{{$flower->altar_title}}</h3>
	<div class="form-group">
		{{Form::label('altar_donor', "Donor's Name:" )}}
		{{Form::text('altar_donor', null, ['class' => 'form-control', 'placeholder' => "Please Enter Altar Flowers Sponser's Full Name"])}}
	</div>
	<div class="form-group">
		{{Form::label('altar_color', 'Please indicate any special color or flower requests:')}}
		{{Form::textarea('altar_color', null, ['class' => 'form-control', 'placeholder' => "Please Enter Special Color or Flower Requests"])}}
	</div>
	<div class="form-group">
		{{Form::label('altar_flower_honor_memory', 'Please Select:')}}<br/>
    	{{ Form::radio('altar_flower_honor_memory', 'In Honor of') }} {{ Form::label('altar_flower_honor_memory', 'In Honor of')}}<br />
		{{ Form::radio('altar_flower_honor_memory', 'In Memory of') }} {{ Form::label('altar_flower_honor_memory', 'In Memory of')}}<br/>
		{{ Form::radio('altar_flower_honor_memory', '') }} {{ Form::label('altar_flower_honor_memory', 'None')}}<br/>
	</div>

	<div class="form-group">
		{{Form::label('altar_honor', 'In Honor/Memory of:')}}
		{{Form::textarea('altar_honor', null, ['class' => 'form-control', 'placeholder' => "Please Enter Honor/Memory Information for Altar Flowers"])}}
	</div>
	<h3>{{$flower->mother_title}}</h3>
	<div class="form-group">
		{{Form::label('blessed_mother_donor', 'Donated by:')}}
		{{Form::text('blessed_mother_donor', null, ['class' => 'form-control', 'placeholder' => "Please Enter Blessed Mother Flowers Donator's Full Name"])}}
	</div>
	<div class="form-group">
		{{Form::label('mother_color', 'Please indicate any special color or flower requests:')}}
		{{Form::textarea('mother_color', null, ['class' => 'form-control', 'placeholder' => "Please Enter Special Color or Flower Requests"])}}
	</div>
	<div class="form-group">
		{{Form::label('blessed_mother_flower_honor_memory', 'Please Select:')}}<br/>
    	{{ Form::radio('blessed_mother_flower_honor_memory', 'In Honor of') }} {{ Form::label('blessed_mother_flower_honor_memory', 'In Honor of')}}<br />
		{{ Form::radio('blessed_mother_flower_honor_memory', 'In Memory of') }} {{ Form::label('blessed_mother_flower_honor_memory', 'In Memory of')}}<br/>
		{{ Form::radio('blessed_mother_flower_honor_memory', '') }} {{ Form::label('blessed_mother_flower_honor_memory', 'None')}}<br/>
	</div>
	<div class="form-group">
		{{Form::label('mother_honor', 'In Honor/Memory of:')}}
		{{Form::textarea('mother_honor', null, ['class' => 'form-control', 'placeholder' => "Please Enter Honor/Memory Information for Blessed Mother Flowers"])}}
	</div>




	<div class='pull-right'>
		<div class="form-group">
		{{Form::submit('Update', ['class' => 'btn btn-primary'])}}
		{{Form::close()}}		
		</div>
	</div>
	<div class='pull-right'>

	<a href="{{ URL::previous() }}"><button class="pull-right btn btn-secondary">Back</button></a>
	</div>

</div>	

@stop

