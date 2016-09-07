@extends('layouts.main')
@section('content')
<div class="col-md-10 col-md-offset-1">
<h3>Child Care Email List For Tuesday Christ Life Session</h3>
<p>
@foreach($tuChildCares as $tuEmail)
{{$tuEmail}}, 
@endforeach
</p>
<h3>Child Care Email List For Thursday Christ Life Session</h3>
<p>
@foreach($trChildCares as $trEmail)
{{$trEmail}}, 
@endforeach
</p>
<div class='pull-right'>
<a href="{{URL::previous()}}"><button class="btn btn-primary">Back</button></a>
</div>
</div>
@stop