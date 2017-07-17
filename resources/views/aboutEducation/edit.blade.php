@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br/>
<img class="banner" src="{{url('/banners/ReligiousEdBanner.png/')}}"><br/><br/>
{{Form::model($about, ['method' => 'PATCH', 'action' => ['AboutController@update', $about->id]])}}
	<div class="form-group">
		  {{Form::label('body', 'Body:')}}
	 {{Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter Announcement Body'])}}

	</div>
		    <div class="form-group" style="float: right">
          {{Form::submit('Update', ['class' => 'blueBtn'])}}
          <a href=""><button class="redBtn">Cancel</button></a>

        </div>
{{Form::close()}}
</div>
@stop
@section('scripts')
  @include('includes._froala-js')
  @include('includes._froala-css')
@include('includes._froalaOptions')
@stop