@extends('layouts.main')
@section('customStyle')
<style type="text/css">
table {
	   table-layout: fixed;
/*    font-family: arial, sans-serif;*/
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #000;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

.container{

	width:90%;
}

   @media (max-width: 764px) {
        .container {
	width:100%;
	padding: 2px;
        }
    }




a { cursor: pointer; cursor: hand; }
</style>

@stop


@section('content')
<div class="col-md-12" style="padding:0px">

	<div class="col-md-10 col-md-offset-1" style="margin-bottom:25px">
		<h2><center>
		  <span style="font-size: 90%">Please sign up to make one Holy Hour of Adoration<br/>
		  in room 107 of the family life center.<br/>
		  St. Paul “40 Hours of Adoration” June 16-18, 2017<br/>
		  </span>
		  <span style="color: #337ab7; font-size: 125%"> Sit with Him, Adore Him, Listen to Him<br/></span>
		  <span style="font-size: 75%; background-color: yellow">We would like to have 5 people sign up per hour.<br/></span>
		  <span style="font-size: 75%">This will lead our Parish into the<br/>
		  Feast of The Most Holy Body and Blood of Christ.</span>
		</h2></center>
	</div>


	

	        <table>
	        	<tr>
	        		<th><center>Day & Time</center></th>
	        		<th><center>Name</center></th>
	        		<th><center>Name</center></th>
	        		<th><center>Name</center></th>
	        		<th><center>Name</center></th>
	        		<th><center>Name</center></th>
	        	</tr>
	       
	        	
	        		@foreach($addays as $adday)
	        		 	<tr>
	        		<td><center>{!!$adday->time!!}</center></td>
	        		@foreach($adday->adds as $add)

	        			@if($add->name!=NULL)
	        				@if(\Auth::check())
							<td><a style="color: #bf202f" href="{{url('/adoration/'.$add->id.'/edit')}}"><center>{{$add->name}}<br/>{{$add->num}}</center></a></td>
	        				@else
	        			  <td><center>{{$add->name}}</center></td>
	        			  	@endif
	        		    
	        		    @else
	        		      <td><center><a href="{{url('/adoration/'.$add->id.'/edit')}}">Available</a></center></td>
	        		  @endif


	        	





	        		@endforeach
					</tr>
	        		@endforeach

	        	
	        </table>

</div>
@endsection