@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br />
<h1>Religious Education Registration</h1>
<p>Complete the Registration form (below) for children to be enrolled in the St. Paul Religious Education Program, ages 3 years through 12th Grade. This form is to be completed and submitted online.</p>
<p>Once you have registered online, please print, complete and sign the <a target="blank" href="{{url('/files/Parent Consent, Photo Release, Medical Release Form.pdf')}}">"Parental Consent, Photo Release, Medical Release Form"</a> which can be accessed after submitting the Registration Form. You may place this form and payment in a sealed envelope marked, "Religious Ed" and drop it in the collection basket at Mass or mail it to the church office.</p>
<p>Please note that parents of students in 7th-12th Grades need to print, complete, sign and notarize a  <a target="blank" href="{{url('/files/FormsPermanent2.pdf')}}">Diocesan Youth Form</a>. Thank you.</p>


<p><h3>Fees:</h3><ul><li>$30 for one child</li>
<li>$50 for two children</li>
<li>$75 for three or more children</li>
</ul></p>

<h3>Registration Form</h3>
<div class="col-md-12">
    @if (count($errors))
    <ul class="err">
    @foreach($errors->all() as $error)
    <li class="err">{{$error}}</li>
    @endforeach
    </ul>
    @endif
</div>
{{Form::open(['method' => 'POST', 'action' => 'EducationController@store'])}}
	<div class="form-group">
		{{Form::label('father_first_name', 'Father&rsquo;s Full Name:')}}<br>
		{{Form::text('father_first_name', null, ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
		{{Form::text('father_middle_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Middle Name'])}}
		{{Form::text('father_last_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('father_dob', 'Father&rsquo;s Date of Birth:')}}<br>
		{{Form::text('father_dob', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
	</div>
	<div class="form-group">
		{{Form::label('mother_first_name', 'Mother&rsquo;s Full Name:')}}<br>
		{{Form::text('mother_first_name', null, ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
		{{Form::text('mother_middle_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Middle Name'])}}
		{{Form::text('mother_last_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('mother_dob', 'Mother&rsquo;s Date of Birth:')}}<br>
		{{Form::text('mother_dob', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
	</div>
	<div class="form-group">
		{{Form::label('marital_status', 'Marital Status:') }}
        {{Form::select('marital_status', [NULL => 'Please Select' ,'Married' => 'Married', 'Divorced' => 'Divorced', 'Separated' => 'Separated', 'Widowed' => 'Widowed', 'Single' => 'Single'])}}
    </div>
    <div class="form-group">
		{{Form::label('reside_with', 'Child(ren) reside with:') }}
        {{Form::select('reside_with', [NULL => 'Please Select' ,'Both' => 'Both', 'Mother' => 'Mother', 'Father' => 'Father', 'Other' => 'Other'])}}
    </div>
        <br /><h3>Family Information</h3>
    <div class="form-group">
		{{Form::label('address', 'Home Address:')}}
		{{Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Enter Street Address'])}}
		{{Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Enter City'])}}
		{{Form::text('state', null, ['class' => 'form-control', 'placeholder' => 'Enter State'])}}
		{{Form::text('zip', null, ['class' => 'form-control', 'placeholder' => 'Enter Zip'])}}
	</div>
    <div class="form-group">
		{{Form::label('phone', 'Home Phone:')}}
		{{Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Enter Home Phone Number'])}}
	</div>
	<div class="form-group">
		{{Form::label('father_work', 'Father&rsquo;s Work Phone:')}}<br>
		{{Form::text('father_work', null, ['class' => 'form-control', 'placeholder' => '(###) ###-#####'])}}
	</div>
	<div class="form-group">
		{{Form::label('father_cell', 'Father&rsquo;s Cell Phone:')}}<br>
		{{Form::text('father_cell', null, ['class' => 'form-control', 'placeholder' => '(###) ###-#####'])}}
	</div>
	<div class="form-group">
		{{Form::label('father_email', 'Father&rsquo;s Email:')}}<br>
		{{Form::text('father_email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
	</div>
	<div class="form-group">
		{{Form::label('mother_work', 'Mother&rsquo;s Work Phone:')}}<br>
		{{Form::text('mother_work', null, ['class' => 'form-control', 'placeholder' => '(###) ###-#####'])}}
	</div>
	<div class="form-group">
		{{Form::label('mother_cell', 'Mother&rsquo;s Cell Phone:')}}<br>
		{{Form::text('mother_cell', null, ['class' => 'form-control', 'placeholder' => '(###) ###-#####'])}}
	</div>
	<div class="form-group">
		{{Form::label('mother_email', 'Mother&rsquo;s Email:')}}<br>
		{{Form::text('mother_email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
	</div>

	<br /><h3>Emergency Contacts</h3>
	<div class="form-group">
		{{Form::label('contact_one_name', 'Name:')}}
		{{Form::text('contact_one_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('contact_one_relation', 'Relation:')}}
		{{Form::text('contact_one_relation', null, ['class' => 'form-control', 'placeholder' => 'Enter Relation'])}}
	</div>
	<div class="form-group">
		{{Form::label('contact_one_phone', 'Phone:')}}<br>
		{{Form::text('contact_one_phone', null, ['class' => 'form-control', 'placeholder' => '(###) ###-#####'])}}
	</div>
	<div class="form-group">
		{{Form::label('contact_two_name', 'Name:')}}
		{{Form::text('contact_two_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('contact_two_relation', 'Relation:')}}
		{{Form::text('contact_two_relation', null, ['class' => 'form-control', 'placeholder' => 'Enter Relation'])}}
	</div>
	<div class="form-group">
		{{Form::label('contact_two_phone', 'Phone:')}}<br>
		{{Form::text('contact_two_phone', null, ['class' => 'form-control', 'placeholder' => '(###) ###-#####'])}}
	</div>
	<div class="form-group">
		{{Form::submit('Sign Up', ['class' => 'btn btn-primary form-control'])}}
	</div>

</div>	
@stop