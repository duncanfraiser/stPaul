@extends('layouts.main')
@section('content')
<div class="col-md-8 col-md-offset-2"><br/>
<img class="banner" src="{{url('/banners/rcia.png/')}}">
<div class="col-md-12">
		<center><h1>The Rite of Christian Initiation of Adults (RCIA) Registration</h1></center>
		<center><h3>Class meets on Tuesday nights at 6:30 pm beginning<br>September 27, 2016</h3></center><br>
{{Form::open(['method' => 'POST', 'action' => 'CatechumensController@store'])}}
    <div class="form-group">
        @if($errors->has('firstName') || $errors->has('lastName'))
          {{Form::label('firstName', 'Full Name:', ['class' => 'errs'])}}
          {{Form::text('firstName', null, ['class' => 'form-control errsInput inputSpace', 'placeholder' => 'Full Name:' ])}}
		  {{Form::text('middleName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Middle Name'])}}
		  {{Form::text('lastName', null, ['class' => 'form-control errsInput inputSpace', 'placeholder' => 'Enter Last Name'])}}
		  {{Form::text('zip', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Zip'])}}
		@else
		  {{Form::label('firstName', 'Full Name:')}}
		  {{Form::text('firstName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Full Name:' ])}}
		  {{Form::text('middleName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Middle Name'])}}
		  {{Form::text('lastName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Last Name'])}}
		  {{Form::text('maidenName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'maidenName'])}}
		@endif	
	</div>
	<div class="form-group">
		{{Form::label('homePhone', 'Home Phone Number:')}}
		{{Form::text('homePhone', null, ['class' => 'form-control', 'placeholder' => '(###) ###-####'])}}
	</div>
	<div class="form-group">
		{{Form::label('cellPhone', 'Cell Phone Number:')}}
		{{Form::text('cellPhone', null, ['class' => 'form-control', 'placeholder' => '(###) ###-####'])}}
	</div>
	<div class="form-group">
		{{Form::label('address', 'Home Address:')}}
		{{Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Enter Home Address'])}}
	</div>
	<div class="form-group">
		{{Form::label('dob', 'Date of Birth:')}}
		{{Form::text('dob', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
	</div>
	<div class="form-group">
		{{Form::label('pob', 'Place of Birth:')}}
		{{Form::text('pob', null, ['class' => 'form-control', 'placeholder' => 'Enter Place of Birth'])}}
	</div>
	<div class="form-group">
		{{Form::label('occupation', 'Occupation:')}}
		{{Form::text('occupation', null, ['class' => 'form-control', 'placeholder' => 'Enter Occupation'])}}
	</div>
	<div class="form-group">
		{{Form::label('workPhone', 'Work Number:')}}
		{{Form::text('workPhone', null, ['class' => 'form-control', 'placeholder' => '(###) ###-####'])}}
	</div>
	<div class="form-group">
		{{Form::label('email', 'Primary Email Address:')}}
		{{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
	</div>
	<div class="form-group">
		{{Form::label('childcare', 'Do you require child care?')}}<br/>
    	{{ Form::radio('childcare', 'Yes') }} {{ Form::label('childcare', 'Yes')}}<br />
		{{ Form::radio('childcare', 'No') }} {{ Form::label('childcare', 'No')}}<br/>
	</div>
	<div class="form-group">
		{{Form::label('childage', 'If "Yes," ages of children:')}}
		{{Form::text('childage', null, ['class' => 'form-control', 'placeholder' => 'List Ages of Children'])}}
	</div>
	<div class="form-group">
	    @if($errors->has('baptized'))
		  {{Form::label('baptized', 'Have you ever been baptized?', ['class' => 'errs'])}}<br/>
    	  {{ Form::radio('baptized', 'Yes') }} {{ Form::label('baptized', 'Yes', ['class' => 'errs'])}}<br />
		  {{ Form::radio('baptized', 'No') }} {{ Form::label('baptized', 'No', ['class' => 'errs'])}}<br/>
	    @else
		  {{Form::label('baptized', 'Have you ever been baptized?')}}<br/>
    	  {{ Form::radio('baptized', 'Yes') }} {{ Form::label('baptized', 'Yes')}}<br />
		  {{ Form::radio('baptized', 'No') }} {{ Form::label('baptized', 'No')}}<br/>
		@endif
	</div>
	<div class="form-group">
		{{Form::label('bapChurch', 'If "Yes," Where?')}}
		{{Form::text('bapChurch', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Church Name'])}}
		{{Form::text('bapChurchAddress', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Church Address'])}}
	</div>
	<div class="form-group">
		{{Form::label('bapDate', 'Date of Baptism:')}}
		{{Form::text('bapDate', null, ['class' => 'form-control', 'placeholder' => 'MM/DD/YYYY'])}}
	</div>
	<div class="form-group">
		{{Form::label('practiced', 'If you are baptized Catholic, have you practiced your faith?')}}<br />
    	{{ Form::radio('practiced', 'Yes') }} {{ Form::label('practiced', 'Yes')}}<br />
		{{ Form::radio('practiced', 'No') }} {{ Form::label('practiced', 'No')}}<br/>
	</div>
	<div class="form-group">
		{{Form::label('why', 'Why are you interested in the Catholic Church at this time?')}}
		{{Form::textarea('why', null, ['class' => 'form-control', 'placeholder' => 'Enter Explanation'])}}
	</div>
	<div class="form-group">
		{{Form::label('dadFirstName', 'Father\'s Full Name:')}}
		{{Form::text('dadFirstName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Father\'s First Name'])}}
		{{Form::text('dadMiddleName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Father\'s Middle Name'])}}
		{{Form::text('dadLastName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Father\'s Last Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('momFirstName', 'Mother\'s Full Name:')}}
		{{Form::text('momFirstName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Mother\'s First Name'])}}
		{{Form::text('momMiddleName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Mother\'s Middle Name'])}}
		{{Form::text('momLastName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Mother\'s Last Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('married', 'Are you presently married?')}}<br />
    	{{ Form::radio('married', 'Yes') }} {{ Form::label('married', 'Yes')}}<br />
		{{ Form::radio('married', 'No') }} {{ Form::label('married', 'No')}}
 	</div>
 	<div class="form-group">
		{{Form::label('firstMarriage', 'Is this the first marriage for you and your spouse?')}}<br/>
    	{{ Form::radio('firstMarriage', 'Yes') }} {{ Form::label('firstMarriage', 'Yes')}}<br />
		{{ Form::radio('firstMarriage', 'No') }} {{ Form::label('firstMarriage', 'No')}}<br />
	</div>
	<div class="form-group">
		{{Form::label('married_location', 'Where were you married?')}}
		{{Form::text('married_locationName', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Venue Name'])}}
		{{Form::text('married_location', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Venue Location'])}}
	</div>
	<div class="form-group">
		{{Form::label('divorced', 'Have you or your spouse/fianc&eacute;e ever been divorced?')}}<br/>
    	{{ Form::radio('divorced', 'Yes') }} {{ Form::label('firstMarriage', 'Yes')}}<br />
		{{ Form::radio('divorced', 'No') }} {{ Form::label('firstMarriage', 'No')}}<br />
	</div>
	<div class="form-group">
		{{Form::label('annulment_granted', 'If "Yes," has there been an annulment granted by the Catholic Church?')}}<br/>
    	{{ Form::radio('annulment_granted', 'Yes') }} {{ Form::label('firstMarriage', 'Yes')}}<br />
		{{ Form::radio('annulment_granted', 'No') }} {{ Form::label('firstMarriage', 'No')}}<br />
	</div>
	<div class="form-group">
		{{Form::label('annulment_pending', 'Are you or your spouse/fianc&eacute;e presently seeking an annulment?')}}<br/>
    	{{ Form::radio('annulment_pending', 'Yes') }} {{ Form::label('firstMarriage', 'Yes')}}<br />
		{{ Form::radio('annulment_pending', 'No') }} {{ Form::label('firstMarriage', 'No')}}<br />
	</div>
	<div class="form-group">
		{{Form::label('spouse_baptized', 'Has your spouse/fianc&eacute;e ever been baptized?')}}<br/>
    	{{ Form::radio('spouse_baptized', 'Yes') }} {{ Form::label('firstMarriage', 'Yes')}}<br />
		{{ Form::radio('spouse_baptized', 'No') }} {{ Form::label('firstMarriage', 'No')}}<br />
	</div>
	<div class="form-group">
		{{Form::label('spouse_faith', 'If "Yes," in what faith tradition and where?')}}
		{{Form::text('spouse_faith', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Faith'])}}
		{{Form::text('spouse_church', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Church Name'])}}
		{{Form::text('spouse_church_address', null, ['class' => 'form-control inputSpace', 'placeholder' => 'Enter Church Address'])}}
	</div>
	<div class="rightBtn">
		<p><a class="backBtn" href="{{url('/')}}">Cancel</a></p>
		{{Form::submit('Sign Up', ['class' => 'blueBtn'])}}
	</div>
{{Form::close()}}
</div>
</div>
@stop