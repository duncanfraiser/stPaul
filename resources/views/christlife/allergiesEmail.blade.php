@extends('layouts.main')
@section('content')
<div class="col-md-10 col-md-offset-1">
<h3>Allergy Email List For Tuesday Christ Life Session</h3>
<p>
@foreach($tuEmails as $tuEmail)
{{$tuEmail}}, 
@endforeach
</p>
<h3>Email List For Thursday Christ Life Session</h3>
<p>
@foreach($trEmails as $trEmail)
{{$trEmail}}, 
@endforeach
</p>
<div class='pull-right'>
<a href="{{URL::previous()}}"><button class="btn btn-primary">Back</button></a>
</div>
</div>
@stop