@extends('layouts.main')
@section('content')
<div class="col-md-10 col-md-offset-1">
<h2><u>Religious Education Student Email List</u></h2>
<p>
@foreach($emails as $email)
{{$email}}, 
@endforeach
</p>
<div class='pull-right'>
<a href="{{URL::previous()}}"><button class="btn btn-primary">Back</button></a>
</div>
</div>
@stop