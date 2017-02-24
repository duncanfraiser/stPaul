@extends('layouts.main')
@section('content')
<div class="col-md-10 col-md-offset-1 formdiv text-center" >
      <h2>Reflection Video Gallery</h2>
      <div class='col-md-12' style="padding-bottom: 2em">
        @foreach ($reflections as $reflection)
        <div class='col-md-4' style="margin-bottom: 2em">
			<iframe width="100%" {!!$reflection->embed!!} frameborder="0" allowfullscreen></iframe>
			<a href="{{url('/reflection/'.$reflection->id)}}">{{$reflection->title}}</a>
        </div>
        @endforeach
       </div>
           <div class="text-center">
        {{$reflections->links()}}
      </div>




</div>
@stop


