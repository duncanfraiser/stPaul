@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2 formdiv">
	<h2>Create Reflection Video</h2>
  {{Form::open(['method' => 'POST', 'action' => 'ReflectionController@store'])}}
	<div class="form-group">
	  @if($errors->has('title'))		    	
	    {{Form::label('title', 'Please Enter Reflection Title:', ['class' => 'errs'])}}<br/>
	  @else
	    {{Form::label('title', 'Reflection Title:')}}
	  @endif
		{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
	</div>
	<div class="form-group">
	  @if($errors->has('embed'))		    	
	    {{Form::label('embed', 'Please Enter Embed Src Code:', ['class' => 'errs'])}}<br/>
	  @else
	    {{Form::label('embed', 'Embed Src Code:')}}
	  @endif
	    {{Form::text('embed', null, ['class' => 'form-control', 'placeholder' => 'Example:   src="https://www.youtube.com/embed/279vLNfhcQo" '])}}
	</div>


	<div class="form-group" style="float: right">
	  {{Form::submit('Enter', ['class' => 'bluebtn'])}}
	</div>
  {{Form::close()}}
	<a style="float: right; margin-right: .5em" href="{{ URL('/') }}"><button class="redbtn">Cancel</button></a>
</div>
@stop