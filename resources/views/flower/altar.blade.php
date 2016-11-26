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
	<div class="form-group">
		{{Form::label('altar_donor', 'Donated By:')}}
			@if($errors->has('altar_donor'))
		    <ul class="err">
	    	<li class="err">Please Enter Donor's Full Name</li>
			</ul>
			@endif
		{{Form::text('altar_donor', null, ['class' => 'form-control', 'placeholder' => "Please Enter Altar Flowers Donor's Full Name"])}}
	</div>
	<div class="form-group">
		{{Form::label('altar_color', 'Please indicate any special color or flower requests:')}}
		{{Form::textarea('altar_color', null, ['class' => 'form-control', 'placeholder' => "Please Enter Special Color or Flower Requests"])}}
	</div>
	<div class="form-group">
		{{Form::label('altar_flower_honor_memory', 'Please Select:')}}<br/>
			@if($errors->has('altar_flower_honor_memory'))
		    <ul class="err">
	    	<li class="err">Please Make A Selection</li>
			</ul>
			@endif
    	{{ Form::radio('altar_flower_honor_memory', 'In Honor of') }} {{ Form::label('altar_flower_honor_memory', 'In Honor of')}}<br />
		{{ Form::radio('altar_flower_honor_memory', 'In Memory of') }} {{ Form::label('altar_flower_honor_memory', 'In Memory of')}}<br/>

	</div>

	<div class="form-group">
		{{Form::label('altar_honor', 'In Honor/Memory of Information:')}}<br/>
			@if($errors->has('altar_honor'))
		    <ul class="err">
	    	<li class="err">Please Fill Out Information Below</li>
			</ul>
			@endif
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