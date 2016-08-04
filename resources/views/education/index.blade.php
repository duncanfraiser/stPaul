@extends('layouts.main')
@section('content')
<div class="col-md-11 col-md-offset-1">
<h2>Religious Education Registration Index</h2>
 <div class="col-md-5">                   
	@foreach($eds as $key=>$ed)
	{{++$key}}.
	<a href="{{url('/education/'.$ed->id.'/edit')}}">{{$ed->father_last_name}} Family</a><br />
	<ul>
	    @foreach($ed->student as $stud)
    <a href="{{url('/education/'.$ed->id.'/student/'.$stud->id.'/edit')}}"><li>{{$stud->firstName}} {{$stud->middleName}} {{$stud->lastName}}</li></a>
    @endforeach   

	</ul>
	@endforeach
</div>
</div>
@stop