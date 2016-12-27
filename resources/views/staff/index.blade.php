
@extends('layouts.main')
@section('content')
<div class="container">


<div class=text-center>
	<h1>Contact Information</h1>
</div>
<div class="col-md-12 text-center">
	<div class="col-md-6">
		<h3><u>St. Paul Church Office</u></h3>
	<p>
	Phone: 601-992-9547<br/>
	Fax: 601-992-9972<br/>
	Email: <a href="mailto:office@saintpaulcatholicchurch.com">office@saintpaulcatholicchurch.com</a><br/>
	Address: 5917 Hwy 25, Flowood Ms. 39232
	</p>
	</div>
	<div class="col-md-6">
	<h3><u>St. Paul Learning Center</u></h3>
	<p>
	Phone:  601-992-2876<br/>
	Email: <a href="mailto: stpaullearningcenter@gmail.com"> stpaullearningcenter@gmail.com</a><br/>
	Website: <a target="blank" href="http://saintpaullearningcenter.com">saintpaullearningcenter.com</a>
<br/>
	Address: 5969 Hwy 25, Flowood Ms. 39232
	</p>
	</div>
</div>
<div class='text-center'>
<h1 style="padding-top: 5em">St. Paul Staff</h1>

</div>
<div class='col-md-12'>
@foreach($staffs as $staff)
<div style="min-height: 20em" class='col-md-3 text-center'>
<a  href="{{url('/staff/'.$staff->id)}}">
<img class="staff" style="width: 90%" src="{{url($staff->img_path)}}">
</a>
</div>
@endforeach

</div>
</div>
@stop