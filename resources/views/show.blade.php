<!DOCTYPE html>
<html>
    <head>
        <title>Adoration Sign up</title>


        <link href="https://fonts.googleapis.com/css?family=Lato:100,400" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


p {
                font-size: 2em;
                font-weight: 400;
                font-family: 'Lato';                
            }
body {
    background: #ffffff url("/StPaulLogoNewColorsCMYK 2.jpg") no-repeat right top;
}


 @media (max-width: 1200px) {
body{
    background: none;
  }
}


</style>
    </head>
    <body>
  
<center><p><h1>St. Paul 40 Hours of Adoration<br>	
Sit with Him, Adore Him, Listen to Him<br><br>
Please sign up for one Holy Hour </h1><br> 
</p>
<p>
We would like at least five people to attend per hour.<br>
This will lead our Parish into the <br>
Feast of The Most Holy Body and Blood of Christ.<br>

</p></center><br><br>

        
			@foreach($attendings as $attending)
			<div class="col-md-12" style="margin-bottom: 2em; padding-right: 0px; padding-left: 1em;">
			{{ Form::model($attending, ['method' => 'PATCH', 'action' => ['AttendingController@update', $attending->id], 'class' => 'form-inline']) }}
				<div class="col-md-1" style="padding-right: 0px; padding-left: 0px;">
					<div class="form-group" >
					{{$attending->time}}<br>{{$attending->date}}
					</div>
				</div>	
				
				<div class="col-md-2" style="padding-right: 0px; padding-left: 0px;">
					<div class="form-group">
					@if($attending->nameOne != "")				
					{{ Form::text('nameOne', null, ['class' => 'form-control', 'placeholder' => 'Enter Name', 'disabled' => 'true']) }}						
					@else
					{{ Form::text('nameOne', null, ['class' => 'form-control', 'placeholder' => 'Enter Name']) }}
					@endif
					</div>
					<div class="form-group">
					@if($attending->phoneOne != "")				
					{{ Form::text('phoneOne', null, ['class' => 'form-control', 'placeholder' => 'Enter Name', 'disabled' => 'true']) }}					
					@else
					{{ Form::text('phoneOne', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number']) }}
					@endif
					</div>
				</div>

				<div class="col-md-2" style="padding-right: 0px; padding-left: 0px;">
					<div class="form-group">
					@if($attending->nameTwo != "")				
					{{ Form::text('nameTwo', null, ['class' => 'form-control', 'placeholder' => 'Enter Name', 'disabled' => 'true']) }}		
					@else
					{{ Form::text('nameTwo', $attending->nameTwo, ['class' => 'form-control', 'placeholder' => 'Enter Name']) }}
					@endif
					</div>
					<div class="form-group">
					@if($attending->phoneTwo != "")				
					{{ Form::text('phoneTwo', null, ['class' => 'form-control', 'placeholder' => 'Enter Name', 'disabled' => 'true']) }}					
					@else
					{{ Form::text('phoneTwo', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number']) }}
					@endif
					</div>
				</div>

				<div class="col-md-2" style="padding-right: 0px; padding-left: 0px;">
					<div class="form-group">
					@if($attending->nameThree != "")				
					{{ Form::text('nameThree', null, ['class' => 'form-control', 'placeholder' => 'Enter Name', 'disabled' => 'true']) }}		
					@else
					{{ Form::text('nameThree', null, ['class' => 'form-control', 'placeholder' => 'Enter Name']) }}
					@endif
					</div>
					<div class="form-group">
					@if($attending->phoneThree != "")				
					{{ Form::text('phoneThree', null, ['class' => 'form-control', 'placeholder' => 'Enter Name', 'disabled' => 'true']) }}					
					@else
					{{ Form::text('phoneThree', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number']) }}
					@endif
					</div>
				</div>

				<div class="col-md-2" style="padding-right: 0px; padding-left: 0px;">
					<div class="form-group">
					@if($attending->nameFour != "")				
					{{ Form::text('nameFour', null, ['class' => 'form-control', 'placeholder' => 'Enter Name', 'disabled' => 'true']) }}		
					@else
					{{ Form::text('nameFour', null, ['class' => 'form-control', 'placeholder' => 'Enter Name']) }}
					@endif
					</div>
					<div class="form-group">
					@if($attending->phoneFour != "")				
					{{ Form::text('phoneFour', null, ['class' => 'form-control', 'placeholder' => 'Enter Name', 'disabled' => 'true']) }}			
					@else
					{{ Form::text('phoneFour', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number']) }}
					@endif
					</div>
				</div>

				<div class="col-md-2" style="padding-right: 0px; padding-left: 0px;">
					<div class="form-group">
					@if($attending->nameFive != "")				
					{{ Form::text('nameFive', null, ['class' => 'form-control', 'placeholder' => 'Enter Name', 'disabled' => 'true']) }}		
					@else
					{{ Form::text('nameFive', null, ['class' => 'form-control', 'placeholder' => 'Enter Name']) }}
					@endif
					</div>
					<div class="form-group">
					@if($attending->phoneFive != "")				
					{{ Form::text('phoneFive', null, ['class' => 'form-control', 'placeholder' => 'Enter Name', 'disabled' => 'true']) }}				
					@else
					{{ Form::text('phoneFive', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number']) }}
					@endif
					</div>
				</div>
			
				<div class="col-md-1" style="padding-right: 0px; padding-left: 0px;">
				    <div class="form-group">
					{{ Form::submit('Save', ['class' => 'btn btn-primary form-control']) }}
					</div>
				</div>


			{{ Form::close()}}
			   </div>  

			@endforeach


    </body>
</html>