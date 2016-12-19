@extends('layouts.main')
@section('content')
<dir class="container text-center"><h1>Thank You!</h1>
<h3>The {{$member->familyName}} family has been added to the St. Paul Parish Members Index.</h3>
<h3>Plese <a href="{{ url('/member/'.$member->id.'/dependents/create/') }}">Click Here</a> to add a dependent currently living in the household, <br/> or <a href="{{ url('/') }}">Click Here</a> to return home.</h3>
</dir>






@stop