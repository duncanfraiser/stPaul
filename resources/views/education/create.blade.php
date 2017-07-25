@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br/>
<img class="banner" src="{{url('/banners/ReligiousEdBanner.png/')}}">
<center><h1>Registration</h1></center>

<p>Complete the Registration form (below) for children to be enrolled in the St. Paul Religious Education Program, ages 3 years through 12th Grade. This form is to be completed and submitted online.</p>
<p>Once you have registered online, please print, complete and sign the <a target="blank" href="{{url('/files/photoReleaseForm.docx')}}">"Parental Consent, Photo Release, Medical Release Form"</a> which can be accessed after submitting the Registration Form. You may place this form and payment in a sealed envelope marked, "Religious Ed" and drop it in the collection basket at Mass or mail it to the church office.</p>
<p>Please note that parents of students in 7th-12th Grades need to print, complete, and sign a  <a target="blank" href="{{url('/files/FormsPermanent2.pdf')}}">Diocesan Youth Form</a>. Thank you.</p>


<p><h3>Fees:</h3><ul><li>$30 for one child</li>
<li>$50 for two children</li>
<li>$75 for three or more children</li>
</ul></p>


<h3>Registration Form</h3>
<p><i>* All fields required, type "none" if not applicable</i></p>

{{Form::open(['method' => 'POST', 'action' => 'EducationController@store'])}}

 	  <div class="form-group">
        @if($errors->has('father_first_name') || $errors->has('father_last_name'))
          {{Form::label('father_first_name', 'Father&rsquo;s Full Name:', ['class' => 'errs'])}}
		  {{Form::text('father_first_name', null, ['class' => 'form-control errsInput inputSpace', 'placeholder' => 'Enter First Name'])}}
		  {{Form::text('father_middle_name', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Middle Name'])}}
		  {{Form::text('father_last_name', null, ['class' => 'form-control errsInput inputSpace', 'placeholder' => 'Enter Last Name'])}}
		@else
		  {{Form::label('father_first_name', 'Father&rsquo;s Full Name:')}}<br>
		  {{Form::text('father_first_name', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter First Name'])}}
		  {{Form::text('father_middle_name', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Middle Name'])}}
		  {{Form::text('father_last_name', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Last Name'])}}
		@endif	
	</div>
	<div class="form-group">
        @if($errors->has('father_dob'))
          {{Form::label('father_dob', 'Father&rsquo;s Date of Birth:', ['class' => 'errs'])}}
		  {{Form::text('father_dob', null, ['class' => 'form-control errsInput', 'placeholder' => 'MM/DD/YYYY'])}}
		@else    	
		{{Form::label('father_dob', 'Father&rsquo;s Date of Birth:')}}<br>
		{{Form::text('father_dob', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
		@endif
	</div>

 	  <div class="form-group">
        @if($errors->has('mother_first_name') || $errors->has('mother_last_name'))
          {{Form::label('mother_first_name', 'Mother&rsquo;s Full Name:', ['class' => 'errs'])}}
		  {{Form::text('mother_first_name', null, ['class' => 'form-control errsInput inputSpace', 'placeholder' => 'Enter First Name'])}}
		  {{Form::text('mother_middle_name', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Middle Name'])}}
		  {{Form::text('mother_last_name', null, ['class' => 'form-control errsInput inputSpace', 'placeholder' => 'Enter Last Name'])}}
		@else
		  {{Form::label('mother_first_name', 'Mother&rsquo;s Full Name:')}}<br>
		  {{Form::text('mother_first_name', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter First Name'])}}
		  {{Form::text('mother_middle_name', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Middle Name'])}}
		  {{Form::text('mother_last_name', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Last Name'])}}
		@endif	
	</div>


	<div class="form-group">
        @if($errors->has('mother_dob'))
          {{Form::label('mother_dob', 'Mother&rsquo;s Date of Birth:', ['class' => 'errs'])}}
		  {{Form::text('mother_dob', null, ['class' => 'form-control errsInput', 'placeholder' => 'MM/DD/YYYY'])}}
		@else    	
		{{Form::label('mother_dob', 'Mother&rsquo;s Date of Birth:')}}<br>
		{{Form::text('mother_dob', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
		@endif
	</div>

	<div class="form-group">
        @if($errors->has('mother_dob'))
		{{Form::label('marital_status', 'Marital Status:',  ['class' => 'errs']) }}
        {{Form::select('marital_status', [NULL => 'Please Select' ,'Married' => 'Married', 'Divorced' => 'Divorced', 'Separated' => 'Separated', 'Widowed' => 'Widowed', 'Single' => 'Single'], null, ['class' => 'form-control errsInput'])}}
		@else    	
		{{Form::label('marital_status', 'Marital Status:') }}
        {{Form::select('marital_status', [NULL => 'Please Select' ,'Married' => 'Married', 'Divorced' => 'Divorced', 'Separated' => 'Separated', 'Widowed' => 'Widowed', 'Single' => 'Single'], null, ['class' => 'form-control'])}}
		@endif
	</div>


	<div class="form-group">
        @if($errors->has('reside_with'))
		{{Form::label('reside_with', 'Child(ren) reside with:',  ['class' => 'errs']) }}
        {{Form::select('reside_with', [NULL => 'Please Select' ,'Both' => 'Both', 'Mother' => 'Mother', 'Father' => 'Father', 'Other' => 'Other'], null, ['class' => 'form-control errsInput'])}}
		@else    	
		{{Form::label('reside_with', 'Child(ren) reside with:') }}
        {{Form::select('reside_with', [NULL => 'Please Select' ,'Both' => 'Both', 'Mother' => 'Mother', 'Father' => 'Father', 'Other' => 'Other'], null, ['class' => 'form-control'])}}
		@endif
	</div>


    <br/><h3>Family Information</h3>


    <div class="form-group">
        @if($errors->has('address'))
          {{Form::label('address', 'Home Address:', ['class' => 'errs'])}}
          {{Form::text('address', null, ['class' => 'form-control errsInput inputSpace', 'placeholder' => 'Enter Street Address' ])}}
		  {{Form::text('city', null, ['class' => 'form-control errsInput inputSpace', 'placeholder' => 'Enter City'])}}
		  {{Form::text('state', null, ['class' => 'form-control errsInput inputSpace', 'placeholder' => 'Enter State'])}}
		  {{Form::text('zip', null, ['class' => 'form-control errsInput inputSpace', 'placeholder' => 'Enter Zip'])}}
		@else
		  {{Form::label('address', 'Home Address:')}}
		  {{Form::text('address', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Street Address' ])}}
		  {{Form::text('city', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter City'])}}
		  {{Form::text('state', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter State'])}}
		  {{Form::text('zip', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Zip'])}}
		@endif	
	</div>


	<div class="form-group">
        @if($errors->has('phone'))
		{{Form::label('phone', 'Home Phone:', ['class' => 'errs'])}}
		{{Form::text('phone', null, ['class' => 'form-control errsInput', 'placeholder' => '(###) ###-#####'])}}
		@else    	
		{{Form::label('phone', 'Home Phone:')}}
		{{Form::text('phone', null, ['class' => 'form-control', 'placeholder' => '(###) ###-#####'])}}
		@endif
	</div>

	<div class="form-group">
        @if($errors->has('father_work'))
		{{Form::label('father_work', 'Father&rsquo;s Work Phone:', ['class' => 'errs'])}}
		{{Form::text('father_work', null, ['class' => 'form-control errsInput', 'placeholder' => '(###) ###-#####'])}}
		@else    	
		{{Form::label('father_work', 'Father&rsquo;s Work Phone:')}}
		{{Form::text('father_work', null, ['class' => 'form-control', 'placeholder' => '(###) ###-#####'])}}
		@endif
	</div>

	<div class="form-group">
        @if($errors->has('father_cell'))
		{{Form::label('father_cell', 'Father&rsquo;s Cell Phone:', ['class' => 'errs'])}}
		{{Form::text('father_cell', null, ['class' => 'form-control errsInput', 'placeholder' => '(###) ###-#####'])}}
		@else    	
		{{Form::label('father_cell', 'Father&rsquo;s Cell Phone:')}}
		{{Form::text('father_cell', null, ['class' => 'form-control', 'placeholder' => '(###) ###-#####'])}}
		@endif
	</div>


	<div class="form-group">
        @if($errors->has('father_email'))
		{{Form::label('father_email', 'Father&rsquo;s Email:', ['class' => 'errs'])}}
		{{Form::text('father_email', null, ['class' => 'form-control errsInput', 'placeholder' => 'Enter Email Address'])}}
		@else    	
		{{Form::label('father_email', 'Father&rsquo;s Email:')}}
		{{Form::text('father_email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
		@endif
	</div>


	<div class="form-group">
        @if($errors->has('mother_work'))
		{{Form::label('mother_work', 'Mother&rsquo;s Work Phone:', ['class' => 'errs'])}}
		{{Form::text('mother_work', null, ['class' => 'form-control errsInput', 'placeholder' => '(###) ###-#####'])}}
		@else    	
		{{Form::label('mother_work', 'Mother&rsquo;s Work Phone:')}}
		{{Form::text('mother_work', null, ['class' => 'form-control', 'placeholder' => '(###) ###-#####'])}}
		@endif
	</div>

	<div class="form-group">
        @if($errors->has('mother_cell'))
		{{Form::label('mother_cell', 'Mother&rsquo;s Cell Phone:', ['class' => 'errs'])}}
		{{Form::text('mother_cell', null, ['class' => 'form-control errsInput', 'placeholder' => '(###) ###-#####'])}}
		@else    	
		{{Form::label('mother_cell', 'Mother&rsquo;s Cell Phone:')}}
		{{Form::text('mother_cell', null, ['class' => 'form-control', 'placeholder' => '(###) ###-#####'])}}
		@endif
	</div>


	<div class="form-group">
        @if($errors->has('mother_email'))
		{{Form::label('mother_email', 'Mother&rsquo;s Email:', ['class' => 'errs'])}}
		{{Form::text('mother_email', null, ['class' => 'form-control errsInput', 'placeholder' => 'Enter Email Address'])}}
		@else    	
		{{Form::label('mother_email', 'Mother&rsquo;s Email:')}}
		{{Form::text('mother_email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
		@endif
	</div>



	<br/><h3>Emergency Contacts</h3>
	<div class="form-group">
        @if($errors->has('contact_one_name'))
		{{Form::label('contact_one_name', 'Name:', ['class' => 'errs'])}}
		{{Form::text('contact_one_name', null, ['class' => 'form-control errsInput', 'placeholder' => 'Enter Name'])}}
		@else    	
		{{Form::label('contact_one_name', 'Name:')}}
		{{Form::text('contact_one_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
		@endif
	</div>

	<div class="form-group">
        @if($errors->has('contact_one_relation'))
		{{Form::label('contact_one_relation', 'Relation:', ['class' => 'errs'])}}
		{{Form::text('contact_one_relation', null, ['class' => 'form-control errsInput', 'placeholder' => 'Enter Relation'])}}
		@else    	
		{{Form::label('contact_one_relation', 'Relation:')}}
		{{Form::text('contact_one_relation', null, ['class' => 'form-control', 'placeholder' => 'Enter Relation'])}}
		@endif
	</div>

	<div class="form-group">
        @if($errors->has('contact_one_phone'))
		{{Form::label('contact_one_phone', 'Phone:', ['class' => 'errs'])}}
		{{Form::text('contact_one_phone', null, ['class' => 'form-control errsInput', 'placeholder' => '(###) ###-#####'])}}
		@else    	
		{{Form::label('contact_one_phone', 'Phone:')}}
		{{Form::text('contact_one_phone', null, ['class' => 'form-control', 'placeholder' => '(###) ###-#####'])}}
		@endif
	</div>







	<div class="form-group">
        @if($errors->has('contact_two_name'))
		{{Form::label('contact_two_name', 'Name:', ['class' => 'errs'])}}
		{{Form::text('contact_two_name', null, ['class' => 'form-control errsInput', 'placeholder' => 'Enter Name'])}}
		@else    	
		{{Form::label('contact_two_name', 'Name:')}}
		{{Form::text('contact_two_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
		@endif
	</div>

	<div class="form-group">
        @if($errors->has('contact_two_relation'))
		{{Form::label('contact_two_relation', 'Relation:', ['class' => 'errs'])}}
		{{Form::text('contact_two_relation', null, ['class' => 'form-control errsInput', 'placeholder' => 'Enter Relation'])}}
		@else    	
		{{Form::label('contact_two_relation', 'Relation:')}}
		{{Form::text('contact_two_relation', null, ['class' => 'form-control', 'placeholder' => 'Enter Relation'])}}
		@endif
	</div>

	<div class="form-group">
        @if($errors->has('contact_two_phone'))
		{{Form::label('contact_two_phone', 'Phone:', ['class' => 'errs'])}}
		{{Form::text('contact_two_phone', null, ['class' => 'form-control errsInput', 'placeholder' => '(###) ###-#####'])}}
		@else    	
		{{Form::label('contact_two_phone', 'Phone:')}}
		{{Form::text('contact_two_phone', null, ['class' => 'form-control', 'placeholder' => '(###) ###-#####'])}}
		@endif
	</div>



	<div class="rightBtn">
		<p><a class="backBtn" href="{{URL::previous()}}">Cancel</a></p>
		{{Form::submit('Continue With Student Information' , ['class' => 'blueBtn'])}}
	</div>
{{Form::close()}}

</div>	
@stop