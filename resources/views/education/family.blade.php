@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
<h2>{{$education->father_last_name}} Family <small><a style="color:xred" href="{{url('/education/'.$education->id.'/edit')}}">edit|delete</a></small></h2>

<h4>Payment Information</h4>
<ul>
<li>Payment Received: <span style="color:#337ab7">{{$education->paid}}</span></li>
<li>Payment Type: <span style="color:#337ab7">{{$education->paidType}}</span></li>
<li>Payment Ammount: <span style="color:#337ab7">{{$education->paidAmount}}</span></li>
</ul>
<h4>Parent's Information</h4>
<ul>
<li>Father's Full Name: <span style="color:#337ab7">{{$education->father_first_name}} {{$education->father_middle_name}} {{$education->father_last_name}}</span></li>
<li>Father's Date of Birth: <span style="color:#337ab7">{{$education->father_dob}}</span></li>
<li>Mother's First Name: <span style="color:#337ab7">{{$education->mother_first_name}} {{$education->mother_middle_name}} {{$education->mother_last_name}}</span></li>
<li>Mother's Date of Birth: <span style="color:#337ab7">{{$education->mother_dob}}</span></li>
<li>Marital Status: <span style="color:#337ab7">{{$education->marital_status}}</span></li>
<li>Children Reside With: <span style="color:#337ab7">{{$education->reside_with}}</span></li>
<li>Home Address: <span style="color:#337ab7">{{$education->address}}</span></li>
<li>Home Phone: <span style="color:#337ab7">{{$education->phone}}</span></li>
<li>Father's Work Phone: <span style="color:#337ab7">{{$education->father_work}}</span></li>
<li>Father's Cell Phone: <span style="color:#337ab7">{{$education->father_cell}}</span></li>
<li>Father's Email: <span style="color:#337ab7">{{$education->father_email}}</span></li>
<li>Mother's Work Phone: <span style="color:#337ab7">{{$education->mother_work}}</span></li>
<li>Mother's Cell Phone: <span style="color:#337ab7">{{$education->mother_cell}}</span></li>
<li>Mother's Email: <span style="color:#337ab7">{{$education->mother_email}}</span></li>
</ul>
<h4>Current Enrolled Students</h4>
<ul>
    @foreach($education->student as $stud)
    <li><a href="{{url('/education/'.$stud->education_id.'/family/'.$stud->id)}}">{{$stud->firstName}} {{$stud->middleName}} {{$stud->lastName}}</a></li>
    @endforeach   
</ul>
<h4>Emergency Contacts Information</h4>
<ul>
<li>Emergency Contact: <span style="color:#337ab7">{{$education->contact_one_name}}</span></li>
<li>Emergency Contact Relation: <span style="color:#337ab7">{{$education->contact_one_relation}}</span></li>
<li>Emergency Contact Phone: <span style="color:#337ab7">{{$education->contact_one_phone}}</span></li>
<li>Emergency Contact: <span style="color:#337ab7">{{$education->contact_two_name}}</span></li>
<li>Emergency Contact Relation: <span style="color:#337ab7">{{$education->contact_two_relation}}</span></li>
<li>Emergency Contact Phone: <span style="color:#337ab7">{{$education->contact_two_phone}}</span></li>
</ul>
<div class='pull-right'>
<a href="{{URL::previous()}}"><button class="btn btn-primary">Back</button></a>
</div>
</div>
@stop