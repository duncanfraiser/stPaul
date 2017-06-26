@extends('layouts.main')
@section('content')
<div class="col-md-10 col-md-offset-1" style="margin-top: 50px;">



<table>
  <tr>
    <th class="thHead">
      <h2><center>Religious Education Student Email List</center></h2>
      @include('includes.educationIndex')
    </th>
  </tr>
  <tr>	
    <td>
    @foreach($emails as $email)
{{$email}}, 
@endforeach
    </td>
  </tr>
</table>
</div>
@stop