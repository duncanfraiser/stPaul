@extends('layouts.main')
@section('content')
<div class="row yo" >
  <div class="col-md-8 col-md-offset-2 homecol">
    <div class="box" style="background-color: #e8c562">
      Edit Mass Time 
    </div>
	<div class="col-md-12 homediv">
      {{Form::open(['method' => 'POST', 'action' => 'MasstimeController@store'])}}
		<div class="form-group">
		  {{Form::label('title', 'Title:')}}
		  {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Mass Time Title'])}}
		</div>
		<div class="form-group">
		  {{Form::label('excerpt', 'Excerpt:')}}
		  {{Form::textarea('excerpt', null, ['class' => 'form-control', 'placeholder' => 'Enter Mass Time Excerpt'])}}
		</div>
		<div class="form-group">
		  {{Form::label('body', 'Body:')}}
		  {{Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter Mass Time Body'])}}
	    </div>
	    <div class="form-group" style="float: right">
          {{Form::submit('Create', ['class' => 'bluebtn'])}}
        </div>
      {{Form::close()}}
          <a style='float:right' href="{{url('/')}}"><button class="blackbtn">Cancel</button></a>
    </div>
  </div>	
</div>	
@stop
@section('scripts')
@include('includes._froala-js')
@include('includes._froala-css')
@include('includes._froalaOptions')
@stop
