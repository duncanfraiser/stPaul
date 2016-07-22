@extends('layouts.main')
@section('content')
<div class="DFcontainer col-md-8 col-md-offset-2">
{{Form::model($masstime, ['method' => 'PATCH', 'action' => ['MasstimeController@update', $masstime->id]])}}
	<div class="form-group">
		{{Form::label('heading', 'Heading:')}}
		{{Form::text('heading', null, ['class' => 'form-control', 'placeholder' => 'Enter Heading'])}}
		{{Form::label('title', 'Title:')}}
		{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
		{{Form::label('excerpt', 'Excerpt:')}}
		{{Form::textarea('excerpt', null, ['class' => 'form-control'])}}
		{{Form::label('body', 'Body:')}}
		{{Form::textarea('body', null, ['class' => 'form-control'])}}
	</div>
	<div class="form-group">
		<div class='pull-right'>		
		{{Form::submit('Edit Mass Times', ['class' => 'btn btn-primary'])}}
		{{Form::close()}}
		<a href="{{ URL::previous() }}"><button class="btn btn-secondary">Cancel</button></a>
		</div>
	</div>
</div>
                <div class="col-md-6 col-md-offset-3">
                    {{Form::open(['method' => 'DELETE', 'route' => ['masstime.destroy', $masstime->id]])}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {{Form::close()}}
                </div>
@stop

@section('scripts')
@include('includes._froalaOptions')
@stop