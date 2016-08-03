@extends('layouts.main')
@section('content')
<div class="col-md-10 col-md-offset-1">
<h2>Christ Life Transportation</h2>

<h3><u>Tuesday Session</u></h3>
<p>
<h3>Need a Ride Email List</h3>
@foreach($tuNeeds as $tuNeed)
{{$tuNeed}}, 
@endforeach
<h3>Provide a Ride Email List</h3>
@foreach($tuGives as $tuGive)
{{$tuGive}}, 
@endforeach
</p>
<h3><u>Thursday Session</u></h3>
<p>
<h3>Need a Ride Email List</h3>
@foreach($trNeeds as $trNeed)
{{$trNeed}}, 
@endforeach
<h3>Provide a Ride Email List</h3>
@foreach($trGives as $trGive)
{{$trGive}}, 
@endforeach
</p>
<div class='pull-right'>
<a href="{{URL::previous()}}"><button class="btn btn-primary">Back</button></a>
</div>
</div>

@stop