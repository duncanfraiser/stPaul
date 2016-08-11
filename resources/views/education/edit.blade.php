@extends('layouts.main')
@section('content')
<div class="DFcontainer col-md-8 col-md-offset-2">
<h1>Religious Education Registration</h1>
{{Form::model($education, ['method' => 'PATCH', 'action' => ['EducationController@update', $education->id]])}}
<div class="form-group">
	{{Form::label('paid', 'Payment Received?')}}<br>
   	{{ Form::radio('paid', 'Payment Received') }} {{ Form::label('paid', 'Yes')}}<br> {{ Form::radio('paid', '') }} {{ Form::label('paid', 'No')}}<br />
	{{Form::label('paidType', 'Payment Type?')}}<br>
   	{{ Form::radio('paidType', 'Cash') }} {{ Form::label('paidType', 'Cash')}}<br> {{ Form::radio('paidType', 'Check') }} {{ Form::label('paidType', 'Check')}}<br />
   	{{ Form::radio('paidType', '') }} {{ Form::label('paidType', 'None')}}<br />
	{{Form::label('paidAmount', 'Payment Amount:')}}
	{{Form::text('paidAmount', null, ['class' => 'form-inline', 'placeholder' => 'Enter Amount'])}}
</div><br>
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
<div class='pull-right'>
		<div class="form-group">
		{{Form::submit('Update', ['class' => 'btn btn-primary'])}}
		{{Form::close()}}		
		</div>
	</div>
	<div class='pull-right'>
	<a href="{{url('/education')}}"><button class="btn btn-secondary">Cancel</button></a>
	</div>
    <div class="pull-right">
    {{Form::close()}}
        {{Form::open(['method' => 'DELETE', 'route' => ['education.destroy', $education->id], 'class' => 'delete'])}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {{Form::close()}}
</div>
      

    

<div>
		 <a href="{{url('/education/'.Request::route()->education.'/student/create')}}"><button class=" btn btn-primary">Register Additional Student</button></a>
</div>
</div>

@stop
@section('scripts')
<script>
	$(".delete").on("submit", function(){
		return confirm("Do you want to delete this item?");
	});
</script>
@stop