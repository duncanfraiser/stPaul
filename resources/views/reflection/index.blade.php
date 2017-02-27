@extends('layouts.main')
@section('content')
<div class="row yo" >
  <div class="col-md-10 col-md-offset-1 homecol">
    <div class="box" style="background-color: #6C3E7B">
      Reflection Video Gallery
    </div>
    <div class="col-md-12 homediv text-center">
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
</div>
@stop






