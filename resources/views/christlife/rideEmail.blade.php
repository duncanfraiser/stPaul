@extends('layouts.main')
@section('content')
<div class="col-md-10 col-md-offset-1">
<h2>Christ Life Transportation</h2>

<h3><u>Christ Life Session</u></h3>
<p>
<h3>Need a Ride Email List</h3>
@foreach($needs as $need)
{{$need}}, 
@endforeach
<h3>Provide a Ride Email List</h3>
@foreach($gives as $give)
{{$give}}, 
@endforeach
</p>


<div class='pull-right'>
<a href="{{URL::previous()}}"><button class="btn btn-primary">Back</button></a>
</div>
</div>

@stop