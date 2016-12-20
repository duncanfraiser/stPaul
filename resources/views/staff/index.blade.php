
@extends('layouts.main')
@section('content')
<div class="container">
<div class='text-center'>
<h1>St. Paul Staff</h1>
</div>
<div class='col-md-12'>
@foreach($staffs as $staff)
<div style="min-height: 30em" class='col-md-3 text-center'>
<a  href="{{url('/staff/'.$staff->id)}}">
<img class="staff" style="width: 90%" src="{{url($staff->img_path)}}"><br/>
{{$staff->name}}
</a>
</div>
@endforeach

</div>
</div>
@stop