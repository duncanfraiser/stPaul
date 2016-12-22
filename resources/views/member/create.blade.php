@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2">
		<center><h2>Member Registration</h2></center><br>
		{{Form::open(['method' => 'POST', 'action' => 'MembersController@store'])}}
		<div class="form-group">
			{{Form::label('familyName', 'Family Name:')}}
				@if($errors->has('fNameOne'))
		    	<ul class="err">
	    		<li class="err">Please Enter Family Name</li>
				</ul>
				@endif
			{{Form::text('familyName', null, ['class' => 'form-control', 'placeholder' => 'Enter Family Name'])}}
			{{Form::label('todaysDate', "Today's Date:")}}
				@if($errors->has('todaysDate'))
		    	<ul class="err">
	    		<li class="err">Please Enter Today's Date</li>
				</ul>
				@endif
			{{Form::text('todaysDate', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}			
		</div>
		<h3>Head of Household (Active Catholic)</h3>
		<div class="form-group">
{{--		{{Form::label('tNameOne', 'Full Name:')}}
			{{Form::select('tNameOne', ['Mr.' => 'Mr.', 'Ms.' => 'Ms.', 'Mrs.' => 'Mrs.'])}} --}}
			{{Form::label('fNameOne', 'Enter Full Name:')}}
				@if($errors->has('fNameOne') || $errors->has('lNameOne') )
		    	<ul class="err">
	    		<li class="err">Please Enter Full Name</li>
				</ul>
				@endif
			{{Form::text('fNameOne', null, ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
			{{Form::text('mNameOne', null, ['class' => 'form-control', 'placeholder' => 'Enter Middle Name'])}}
			{{Form::text('lNameOne', null, ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
		</div>		
		<div class="form-group">
			{{Form::label('perferedNameOne', 'Name you preferred to be called:')}}
				@if($errors->has('perferedNameOne'))
		    	<ul class="err">
	    		<li class="err">Please Enter Preferred Name</li>
				</ul>
				@endif
			{{Form::text('perferedNameOne', null, ['class' => 'form-control', 'placeholder' => 'Enter Preferred Name'])}}
		</div>
		<div class="form-group">
			{{Form::label('dobOne', 'Date of Birth:')}}
				@if($errors->has('dobOne'))
		    	<ul class="err">
	    		<li class="err">Please Enter Date of Birth</li>
				</ul>
				@endif
			{{Form::text('dobOne', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
		</div>
		<div class="form-group">
			{{Form::label('maritalStat', 'Marital Status:')}}
				@if($errors->has('maritalStat'))
		    	<ul class="err">
	    		<li class="err">Please Enter Marital Status</li>
				</ul>
				@endif
			{{Form::text('maritalStat', null, ['class' => 'form-control', 'placeholder' => 'Enter Marital Status'])}}
		</div>
		<div class="form-group">
			{{Form::label('address', 'Home Address:')}}
				@if($errors->has('address'))
		    	<ul class="err">
	    		<li class="err">Please Enter Home Address</li>
				</ul>
				@endif
			{{Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Enter Home Address'])}}
		</div>
		<div class="form-group">
			{{Form::label('homePhone', 'Home Phone:')}}
				@if($errors->has('homePhone'))
		    	<ul class="err">
	    		<li class="err">Please Enter Home Phone</li>
				</ul>
				@endif
			{{Form::text('homePhone', null, ['class' => 'form-control', 'placeholder' => '(###) ###-####'])}}
		</div>
		<div class="form-group">
			{{Form::label('cellPhoneOne', 'Cell Phone:')}}
				@if($errors->has('cellPhoneOne'))
		    	<ul class="err">
	    		<li class="err">Please Enter Cell Phone</li>
				</ul>
				@endif
			{{Form::text('cellPhoneOne', null, ['class' => 'form-control', 'placeholder' => '(###) ###-####'])}}
		</div>
		<div class="form-group">
			{{Form::label('emailOne', 'Primary Email Address:')}}
				@if($errors->has('emailOne'))
		    	<ul class="err">
	    		<li class="err">Please Enter Email Address</li>
				</ul>
				@endif
			{{Form::text('emailOne', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
		</div>
		<div class="form-group">
			{{Form::label('careerOne', 'Career Type:')}}
				@if($errors->has('careerOne'))
		    	<ul class="err">
	    		<li class="err">Please Enter Career Type</li>
				</ul>
				@endif
			{{Form::text('careerOne', null, ['class' => 'form-control', 'placeholder' => 'Enter Career Type'])}}
		</div>
		<div class="form-group">
			{{Form::label('workPhoneOne', 'Work Phone:')}}
				@if($errors->has('workPhoneOne'))
		    	<ul class="err">
	    		<li class="err">Please Enter Work Phone</li>
				</ul>
				@endif
			{{Form::text('workPhoneOne', null, ['class' => 'form-control', 'placeholder' => '(###) ###-####'])}}
		</div>
		<div class="form-group">
			{{Form::label('employmentOne', 'Place of Employment:')}}
				@if($errors->has('employmentOne'))
		    	<ul class="err">
	    		<li class="err">Please Enter Place of Employment</li>
				</ul>
				@endif
			{{Form::text('employmentOne', null, ['class' => 'form-control', 'placeholder' => 'Enter Place of Employment'])}}
		</div>

	<div class="form-group">
		<h3>Spouse</h3>{{Form::label('active', 'Active Catholic?')}}<br>
    	{{ Form::radio('active', 'Yes') }} {{ Form::label('active', 'Yes')}}<br />
		{{ Form::radio('active', 'No') }} {{ Form::label('active', 'No')}}
 	</div>
		<div class="form-group">
{{--	{{Form::label('tNameOne', 'Full Name:')}}
			{{Form::select('tNameTwo', ['Mr.' => 'Mr.', 'Ms.' => 'Ms.', 'Mrs.' => 'Mrs.'])}} --}}
			{{Form::label('fNameTwo', 'Enter Full Name:')}}
			{{Form::text('fNameTwo', null, ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
			{{Form::text('mNameTwo', null, ['class' => 'form-control', 'placeholder' => 'Enter Middle Name'])}}
			{{Form::text('lNameTwo', null, ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
		</div>
		<div class="form-group">
			{{Form::label('perferedNameTwo', 'Name you preferred to be called:')}}
			{{Form::text('perferedNameTwo', null, ['class' => 'form-control', 'placeholder' => 'Enter Preferred Name'])}}
		</div>
		<div class="form-group">
			{{Form::label('dobTwo', 'Date of Birth:')}}
			{{Form::text('dobTwo', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
		</div>	
		<div class="form-group">
			{{Form::label('cellPhoneTwo', 'Cell Phone:')}}
			{{Form::text('cellPhoneTwo', null, ['class' => 'form-control', 'placeholder' => '(###) ###-####'])}}
		</div>
		<div class="form-group">
			{{Form::label('emailTwo', 'Primary Email Address:')}}
			{{Form::text('emailTwo', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
		</div>
		<div class="form-group">
			{{Form::label('careerTwo', 'Career Type:')}}
			{{Form::text('careerTwo', null, ['class' => 'form-control', 'placeholder' => 'Enter Career Type'])}}
		</div>
		<div class="form-group">
			{{Form::label('workPhoneTwo', 'Work Phone:')}}
			{{Form::text('workPhoneTwo', null, ['class' => 'form-control', 'placeholder' => '(###) ###-####'])}}
		</div>
		<div class="form-group">
			{{Form::label('employmentTwo', 'Place of Employment:')}}
			{{Form::text('employmentTwo', null, ['class' => 'form-control', 'placeholder' => 'Enter Place of Employment'])}}
		</div>	
		<div class='pull-right'>
		<div class="form-group">
			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
			{{Form::close()}}
		</div>

		</div>
	<a href="{{url('/')}}"><button class="pull-right btn btn-secondary">Cancel</button></a>
</div>
@stop