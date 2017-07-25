@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br/>
<img width='100%' src="{{url('/banners/ReligiousEdBanner.png/')}}"> 
<center><h1>Update Existing Student</h1></center>

<p>Complete the Registration form (below) for children to be enrolled in the St. Paul Religious Education Program, ages 3 years through 12th Grade. This form is to be completed and submitted online.</p>
<p>Once you have registered online, please print, complete and sign the <a href="{{url('/files/photoReleaseForm.docx')}}">"Parental Consent, Photo Release, Medical Release Form"</a> which can be accessed after submitting the Registration Form. You may place this form and payment in a sealed envelope marked, "Religious Ed" and drop it in the collection basket at Mass or mail it to the church office.</p>
<p>Please note that parents of students in 7th-12th Grades need to print, complete, and sign a  <a target="blank" href="{{url('/files/FormsPermanent2.pdf')}}">Diocesan Youth Form</a>. Thank you.</p>


<p><h3>Fees:</h3><ul><li>$30 for one child</li>
<li>$50 for two children</li>
<li>$75 for three or more children</li>
</ul></p>


<h3>Registration Form</h3>
<p><i>* All fields required, type "none" if not applicable</i></p>
{{Form::open(['method' => 'POST', 'action' => ['StudentUpdateController@store']])}}
	<div class="form-group">
		{{Form::label('name', "Please enter student's full name:")}}<br>
		{{Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Student Information'])}}
	</div>
	<div class="form-group">
		{{Form::label('father', "Please enter father's full name:")}}<br>
		{{Form::text('father', null, ['class' => 'form-control', 'placeholder' => "Enter Father's Full Name"])}}
	</div>
	<div class="form-group">
		{{Form::label('mother', "Please enter mother's full name")}}<br>
		{{Form::text('mother', null, ['class' => 'form-control', 'placeholder' => "Enter Mother's Full Name"])}}
	</div>	
	<div class="form-group">
		{{Form::label('grade', "Please enter grade 2017-18")}}<br>
		{{Form::text('grade', null, ['class' => 'form-control', 'placeholder' => "Enter grade 2017-18"])}}
	</div>
	<div class="form-group">
        @if($errors->has('school'))
          {{Form::label('school', 'School Attending:', ['class' => 'errs'])}}
		  {{Form::select('school', ['' => '-Please Select-','public' => 'public','private' => 'private','Catholic' => 'Catholic', 'homeschool' => 'homeschool'], null, ['class' => 'form-control errsInput'])}}
		@else
		  {{Form::label('school', 'School Attending:')}}
		  {{Form::select('school', ['' => '-Please Select-','public' => 'public','private' => 'private','Catholic' => 'Catholic', 'homeschool' => 'homeschool'], null,  ['class' => 'form-control'])}}
		@endif	
	</div>
	<div class="form-group">
		{{Form::label('info', 'Please enter contact information that needs to be updated:')}}<br>
		{{Form::textarea('info', null, ['class' => 'form-control', 'placeholder' => "Please enter contact information that needs to be updated."])}}
	</div>
	<div class="rightBtn">
		<a class="backBtn" href="{{URL::previous()}}">Cancel</a>
		{{Form::submit('Submit' , ['class' => 'blueBtn'])}}
	</div>
{{Form::close()}}
</div>
@stop