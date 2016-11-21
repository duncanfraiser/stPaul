@extends('layouts.main')


@section('content')
<div class="col-md-8 col-md-offset-2"><br />
	<h2>{{$flower->altar_title}} for {{$flower->date}}, 2017
	@if($flower->extra != "")
	<br>{{$flower->extra}}
	@endif
	@if($flower->extratwo != "")
	<br>{{$flower->extratwo}}
	@endif
	</h2>

	<h3>Altar Flowers - Cost $70<br/>
Blessed Mother Flowers - Cost $40</h3>
<p>You may mail your payment or drop it in the Weekend Offertory. Please make checks payable to St. Paul Catholic Church, and indicate payment is for Altar Flowers or Blessed Mother Flowers with the designated date. The Church will order the flowers and have them delivered on {{$flower->date}}.</p>

{{Form::model($flower, ['method' => 'PATCH', 'action' => ['FlowerController@update', $flower->id]])}}
{{ Form::hidden('errorswitch', 'altar') }}
    @if (count($errors))
    <ul class="err">
    @foreach($errors->all() as $error)
    <li class="err">Plaese Enter Donator's Full Name</li>
    @endforeach
    </ul>
    @endif


	<div class="form-group">
		{{Form::label('altar_spons', 'Donated By:')}}
		{{Form::text('altar_spons', null, ['class' => 'form-control', 'placeholder' => "Please Enter Altar Flowers Donator's Full Name"])}}
	</div>
	<div class="form-group">
		{{Form::label('altar_color', 'Please indicate any special color or flower requests:')}}
		{{Form::textarea('altar_color', null, ['class' => 'form-control', 'placeholder' => "Please Enter Special Color or Flower Requests"])}}
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