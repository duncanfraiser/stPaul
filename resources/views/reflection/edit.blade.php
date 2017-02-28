@extends('layouts.main')
@section('content')
<div class="row yo" >
  <div class="col-md-8 col-md-offset-2 homecol">
    <div class="box" style="background-color: #6C3E7B">
      Create Reflection Video
    </div>
    <div class="col-md-12 homediv">
    {{Form::model($reflection, ['method' => 'PATCH', 'action' => ['ReflectionController@update', $reflection->id]])}}
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
          {{Form::submit('Update', ['class' => 'bluebtn'])}}
        </div>
      {{Form::close()}}
          <a style='float:right' href="{{url('/')}}"><button class="blackbtn">Cancel</button></a>
      <div class="form-group" style="float:right">
        {{Form::open(['method' => 'DELETE', 'route' => ['reflection.destroy', $reflection->id], 'class' => 'delete'])}}
        {{Form::submit('Delete', ['class' => 'redbtn'])}}
        {{Form::close()}}
      </div>
    </div>
  </div>
</div>  
@stop