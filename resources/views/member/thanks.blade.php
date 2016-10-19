@extends('layouts.main')
@section('content')

<center><h3>Thank You!</h3></center>
<a href="{{ url('/member/'.$member->id.'/dependents/create/') }}"><button class="btn btn-primary btn-xs">Add Dependent Currently living in Household</button></a>




@stop