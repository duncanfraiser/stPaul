@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br />
<h1>Volunteer Registration Form</h1>
<h4>Thank you {{$volunteer->first_name}} for volunteering!</h4>
<p>Sarah O'Donnell, Religious Ed Coordinator, will contact you soon. We look forward to having you on our Ministry Team!</p>

<p>Please note: All volunteers must go through a screening process through our Diocesan Protection of Children Safe Environment program.</p>
<p>Thank you!</p>
</div>

@stop

@section('scripts')
@stop