@extends('layouts.main')
@section('content')

<div class="col-md-12" style="margin-top: 50px;margin-bottom: 50px;">



<table>
  <tr>
    <th class="thHead" colspan="4">
      <h2><center>Pending Student Changes</center></h2>
      @include('includes.educationIndex')

    </th>
  </tr>
  <th class="thBlue">
    <center>Student Name</center>
  </th>
    <th class="thYellow">
    <center>Parents Names</center>
  </th>
    <th class="thRed">
   <center>Information to be Updated</center>
  </th>
  <th class="thGreen">
   <center>Delete Request</center>
  </th>
	@foreach($updates as $update)
	  <tr>
	    <td>
		{{$update->name}}
		</td>
		<td>
		@if($update->father != "")
		{{$update->father}}<br/>
		@endif
		{{$update->mother}}
		</td>
		<td>
		Grade: <span class="tdBlue">{{$update->grade}}</span><br>
		School: <span class="tdBlue">{{$update->school}}</span><br>
		Updates: <span class="tdBlue">{{$update->info}}</span>
		</td>
		<td>
		  <center>
		  {{Form::open(['method' => 'DELETE', 'route' => ['studentUpdate.destroy', $update->id], 'class' => 'delete'])}}
		  	{{Form::submit('Delete', ['class' => 'smRedBtn'])}}
		  {{Form::close()}}
		  </center>
		</td>
	  </tr>
	@endforeach

</table>
</div>
@stop