
@extends('layouts.main')
@section('content')


<div class="container">
	<center><h2>Create a Staff Member</h2></center><br>

<div class='col-md-8 col-md-offset-2'>
{{Form::open(['method' => 'POST', 'action' => 'StaffController@store', 'files'=> true])}}

  <div class="form-group">
    {{ Form::label('image', 'Upload Picture:')}}
	{{ Form::file('image')}}
  </div>
  <div class="form-group">
	{{Form::label('name', 'Enter Full Name:')}}
	{{Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Full Name'])}}
  </div>
  <div class="form-group">
	{{Form::label('email', 'Enter Email:')}}
	{{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email'])}}
  </div>
  <div class="form-group">
	{{Form::label('phone', 'Enter Phone Number:')}}
	{{Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number'])}}
  </div>
  <div class="form-group">
	{{Form::label('body', 'Enter Job Description:')}}
	{{Form::textarea('body', null, ['class' => 'form-control'])}}
  </div>
  <div class='pull-right form-group'>
  			{{Form::submit('Create', ['class' => 'btn btn-primary'])}}

{{Form::close()}}
  </div>
{{Form::close()}}
	<a href="{{url('/')}}"><button class="pull-right btn btn-secondary">Cancel</button></a>
</div>

</div>
@stop

@section('scripts')
@include('includes._froala-js')
@include('includes._froala-css')
@include('includes._froalaOptions')
@stop