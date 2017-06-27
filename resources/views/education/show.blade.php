@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br/>
<img class="banner" src="{{url('/banners/ReligiousEdBanner.png/')}}">
<h3>ELDEST CHILD being registered for Religious Education Classes</h3>
<p>All fields required, type "none" if not applicable</p>

{{Form::open(['method' => 'POST', 'action' => ['StudentController@store', Request::route()->education]])}}
	{{Form::hidden('education_id', Request::route()->education)}}
	<div class="form-group">
        @if($errors->has('firstName') || $errors->has('lastName'))
          {{Form::label('firstName', 'Full Name:', ['class' => 'errs'])}}
		  {{Form::text('firstName', null, ['class' => 'form-control errsInput inputSpace', 'placeholder' => 'Enter First Name'])}}
		  {{Form::text('middleName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Middle Name'])}}
		  {{Form::text('lastName', null, ['class' => 'form-control errsInput inputSpace', 'placeholder' => 'Enter Last Name'])}}
		@else
		  {{Form::label('firstName', 'Full Name:')}}<br>
		  {{Form::text('firstName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter First Name'])}}
		  {{Form::text('middleName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Middle Name'])}}
		  {{Form::text('lastName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Last Name'])}}
		@endif	
	</div>
	<div class="form-group">
        @if($errors->has('dob'))
          {{Form::label('dob', 'Date of Birth:', ['class' => 'errs'])}}
		  {{Form::text('dob', null, ['class' => 'form-control errsInput', 'placeholder' => 'MM/DD/YYYY'])}}
		@else
		  {{Form::label('dob', 'Date of Birth:')}}<br>
		  {{Form::text('dob', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
		@endif	
	</div>
	<div class="form-group">
        @if($errors->has('gender'))
          {{Form::label('gender', 'Gender:', ['class' => 'errs'])}}
		  {{Form::select('gender', ['' => '-Please Select-','male' => 'male','female' => 'female'], null, ['class' => 'form-control errsInput'])}}
		@else
		  {{Form::label('gender', 'Gender:')}}
		  {{Form::select('gender', ['' => '-Please Select-','male' => 'male','female' => 'female'], null,  ['class' => 'form-control'])}}
		@endif	
	</div>		
	<div class="form-group">
        @if($errors->has('age'))
          {{Form::label('age', 'Age:', ['class' => 'errs'])}}
		  {{Form::text('age', null, ['class' => 'form-control errsInput', 'placeholder' => 'Enter Age'])}}
		@else
		  {{Form::label('age', 'Age:')}}<br>
		  {{Form::text('age', null, ['class' => 'form-control', 'placeholder' => 'Enter Age'])}}
		@endif	
	</div>
	<div class="form-group">
        @if($errors->has('grade'))
          {{Form::label('grade', 'Grade:', ['class' => 'errs'])}}
		  {{Form::select('grade', ['' => '-Please Select-','3yr' => '3yr old','4yr' => '4 yr old','kindergarten' => 'kindergarten', '1' => '1st','2' => '2nd','3' => '3rd', '4' => '4th', '5' => '5th', '6' => '6th','7' => '7th','8' => '8th','9' => '9th','10' => '10th','11' => '11th','12' => '12th'], null, ['class' => 'form-control errsInput'])}}
		@else
		  {{Form::label('grade', 'Grade:')}}
		  {{Form::select('grade', ['' => '-Please Select-','3yr' => '3yr old','4yr' => '4 yr old','kindergarten' => 'kindergarten', '1' => '1st','2' => '2nd','3' => '3rd', '4' => '4th', '5' => '5th', '6' => '6th','7' => '7th','8' => '8th','9' => '9th','10' => '10th','11' => '11th','12' => '12th'], null,  ['class' => 'form-control'])}}
		@endif	
	</div>
	<div class="form-group">
        @if($errors->has('email'))
          {{Form::label('email', 'Child&rsquo;s Email Address:', ['class' => 'errs'])}}
		  {{Form::text('email', null, ['class' => 'form-control errsInput', 'placeholder' => 'Enter Email Address'])}}
		@else
		  {{Form::label('email', 'Child&rsquo;s Email Address:')}}<br>
		  {{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
		@endif	
	</div>
	<div class="form-group">
        @if($errors->has('cell'))
          {{Form::label('cell', 'Cell Phone:', ['class' => 'errs'])}}
		  {{Form::text('cell', null, ['class' => 'form-control errsInput', 'placeholder' => '(###) ###-#####'])}}
		@else
		  {{Form::label('cell', 'Cell Phone:')}}<br>
		  {{Form::text('cell', null, ['class' => 'form-control', 'placeholder' => '(###) ###-#####'])}}
		@endif	
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
        @if($errors->has('needs'))
          {{Form::label('needs', 'Special Needs/Allergies:', ['class' => 'errs'])}}
		  {{Form::textarea('needs', null, ['class' => 'form-control errsInput', 'placeholder' => 'Enter Special Needs/Allergies'])}}
		@else
		  {{Form::label('needs', 'Special Needs/Allergies:')}}<br>
		  {{Form::textarea('needs', null, ['class' => 'form-control', 'placeholder' => 'Enter Special Needs/Allergies'])}}
		@endif	
	</div>

	<h3>Baptism Information</h3>
	<div class="form-group">
        @if($errors->has('Date_of_Baptism'))
          {{Form::label('Date_of_Baptism', 'Date of Baptism:', ['class' => 'errs'])}}
		  {{Form::text('Date_of_Baptism', null, ['class' => 'form-control errsInput', 'placeholder' => 'MM/DD/YYYY'])}}
		@else
		  {{Form::label('Date_of_Baptism', 'Date of Baptism:')}}<br>
		  {{Form::text('Date_of_Baptism', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
		@endif	
	</div>
	<div class="form-group">
        @if($errors->has('Baptism_Church'))
          {{Form::label('Baptism_Church', 'Church Name:', ['class' => 'errs'])}}
		  {{Form::text('Baptism_Church', null, ['class' => 'form-control errsInput', 'placeholder' => 'Enter Church Name'])}}
		@else
		  {{Form::label('Baptism_Church', 'Church Name:')}}<br>
		  {{Form::text('Baptism_Church', null, ['class' => 'form-control', 'placeholder' => 'Enter Church Name'])}}
		@endif	
	</div>
	<div class="form-group">
        @if($errors->has('Church_Address'))
          {{Form::label('Church_Address', 'Church Mailing Address:', ['class' => 'errs'])}}
		  {{Form::text('Church_Address', null, ['class' => 'form-control errsInput', 'placeholder' => 'Enter Church Mailing Address'])}}
		@else
		  {{Form::label('Church_Address', 'Church Mailing Address:')}}<br>
		  {{Form::text('Church_Address', null, ['class' => 'form-control', 'placeholder' => 'Enter Church Mailing Address'])}}
		@endif	
	</div>
	<h3>First Holy Communion Information</h3>
	<div class="form-group">
        @if($errors->has('Communion'))
          {{Form::label('Communion', 'Date of First Holy Communion:', ['class' => 'errs'])}}
		  {{Form::text('Communion', null, ['class' => 'form-control errsInput', 'placeholder' => 'MM/DD/YYYY'])}}
		@else
		  {{Form::label('Communion', 'Date of First Holy Communion:')}}<br>
		  {{Form::text('Communion', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
		@endif	
	</div>
	<div class="form-group">
        @if($errors->has('Communion_Church'))
          {{Form::label('Communion_Church', 'Church:', ['class' => 'errs'])}}
		  {{Form::text('Communion_Church', null, ['class' => 'form-control errsInput', 'placeholder' => 'Enter Church'])}}
		@else
		  {{Form::label('Communion_Church', 'Church:')}}<br>
		  {{Form::text('Communion_Church', null, ['class' => 'form-control', 'placeholder' => 'Enter Church'])}}
		@endif	
	</div>
	<h3>Confirmation Information</h3>
	<div class="form-group">
        @if($errors->has('Confirmation'))
          {{Form::label('Confirmation', 'Date of Confirmation:', ['class' => 'errs'])}}
		  {{Form::text('Confirmation', null, ['class' => 'form-control errsInput', 'placeholder' => 'MM/DD/YYYY'])}}
		@else
		  {{Form::label('Confirmation', 'Date of Confirmation:')}}<br>
		  {{Form::text('Confirmation', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
		@endif	
	</div>
	<div class="form-group">
        @if($errors->has('Confirmation_Church'))
          {{Form::label('Confirmation_Church', 'Church:', ['class' => 'errs'])}}
		  {{Form::text('Confirmation_Church', null, ['class' => 'form-control errsInput', 'placeholder' => 'Enter Church'])}}
		@else
		  {{Form::label('Confirmation_Church', 'Church:')}}<br>
		  {{Form::text('Confirmation_Church', null, ['class' => 'form-control', 'placeholder' => 'Enter Church'])}}
		@endif	
	</div>


	<div class="rightBtn">
		<a class="backBtn" href="{{url('/education/menu')}}">Cancel</a>
		{{Form::submit('Submit' , ['class' => 'blueBtn'])}}
	</div>
{{Form::close()}}
</div>

@stop