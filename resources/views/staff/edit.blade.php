
@extends('layouts.main')
@section('content')


<div class="container">
<div class='text-center'>
<h2>Edit {{$staff->name}}</h2>
<img style="width: 50%" src="{{url($staff->img_path)}}">
</div>


<div class='col-md-8 col-md-offset-2'>
{{Form::model($staff, ['method' => 'PATCH', 'action' => ['StaffController@update', $staff->id], 'files'=>true])}}
  <div class="form-group">
    {{ Form::label('image', 'Change Picture:')}}
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
  			{{Form::submit('Update', ['class' => 'btn btn-primary'])}}

{{Form::close()}}
  </div>
    <div class='pull-right'>
  <a href="{{url('/')}}"><button class="btn btn-secondary">Cancel</button></a>
  </div>
      <div class="pull-right">
        <div class="form-group">
        {{Form::open(['method' => 'DELETE', 'route' => ['staff.destroy', $staff->id], 'class' => 'delete'])}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {{Form::close()}}
      </div>
    </div>




</div>

</div>
@stop

@section('scripts')
@include('includes._froalaOptions')
<script>
  $(".delete").on("submit", function(){
    return confirm("Do you want to delete this Staff Member?");
  });
</script>
@stop