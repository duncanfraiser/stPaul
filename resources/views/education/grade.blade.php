@extends('layouts.main')
@section('content')

<div class="col-md-8 col-md-offset-2" style="margin-top: 50px;">



<table>
  <tr>
    <th class="thHead" colspan="2">
      <h2><center>Religious Education Sort By Grade</center></h2>
      @include('includes.educationIndex')
    </th>
  </tr>	
    <tr>
    <td colspan="2" class="thBlue"><center>3 Year Old Pre-school</center></td>
  </tr>
  <tr>
  	<th class="thYellow">Student</th>
   	<th class="thRed">Family</th>
  </tr>

{{-- 3 Year Old Pre-school --}}

	<?php $num=0; ?>
	@foreach($students as $key=>$student)
	  @if($student->grade == '3yr')	
	    <?php $num++; ?>
	    <tr>
	      <td>{{$num}}. <a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></td>
	      <td><a href="{{url('/education/'.$student->education_id.'/family/')}}">{{$student->lastName}} Family</a></td>
	    </tr>
	  @endif
	@endforeach

{{-- 4 Year Old Pre-school --}}
  <tr>
    <td colspan="2" class="thGreen"><center>4 Year Old Pre-school</center></td>
  </tr>
	<?php $num=0; ?>
	@foreach($students as $key=>$student)
	  @if($student->grade == '4yr')	
	  	<?php $num++; ?>
	    <tr>
	      <td>{{$num}}. <a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></td>
	      <td><a href="{{url('/education/'.$student->education_id.'/family/')}}">{{$student->lastName}} Family</a></td>
	    </tr>
	  @endif
	@endforeach



{{-- Kindergarten --}}
  <tr>
    <td colspan="2" class="thBlue"><center>Kindergarten</center></td>
  </tr>
  	<?php $num=0; ?>
	@foreach($students as $key=>$student)
	  @if($student->grade == 'kindergarten')
	    <?php $num++; ?>
	    <tr>
	      <td>{{$num}}. <a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></td>
	      <td><a href="{{url('/education/'.$student->education_id.'/family/')}}">{{$student->lastName}} Family</a></td>
	    </tr>
	  @endif
	@endforeach


{{-- 1st Grade --}}
  <tr>
    <td colspan="2" class="thYellow"><center>1st Grade</center></td>
  </tr>
    <?php $num=0; ?>
	@foreach($students as $key=>$student)
	  @if($student->grade == '1')
	  <?php $num++; ?>
	    <tr>
	      <td>{{$num}}. <a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></td>
	      <td><a href="{{url('/education/'.$student->education_id.'/family/')}}">{{$student->lastName}} Family</a></td>
	    </tr>
	  @endif
	@endforeach



{{-- 2nd Grade --}}
  <tr>
    <td colspan="2" class="thRed"><center>2nd Grade</center></td>
  </tr>
    <?php $num=0; ?>
	@foreach($students as $key=>$student)
	@if($student->grade == '2')
		<?php $num++; ?>
	    <tr>
	      <td>{{$num}}. <a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></td>
	      <td><a href="{{url('/education/'.$student->education_id.'/family/')}}">{{$student->lastName}} Family</a></td>
	    </tr>
	  @endif
	@endforeach

{{-- 3rd Grade --}}
  <tr>
    <td colspan="2" class="thGreen"><center>3rd Grade</center></td>
  </tr>
    <?php $num=0; ?>
	@foreach($students as $key=>$student)
	@if($student->grade == '3')
		<?php $num++; ?>
	    <tr>
	      <td>{{$num}}. <a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></td>
	      <td><a href="{{url('/education/'.$student->education_id.'/family/')}}">{{$student->lastName}} Family</a></td>
	    </tr>
	  @endif
	@endforeach

{{-- 4th Grade --}}
  <tr>
    <td colspan="2" class="thBlue"><center>4th Grade</center></td>
  </tr>
    <?php $num=0; ?>
	@foreach($students as $key=>$student)
	@if($student->grade == '4')
		<?php $num++; ?>
	    <tr>
	      <td>{{$num}}. <a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></td>
	      <td><a href="{{url('/education/'.$student->education_id.'/family/')}}">{{$student->lastName}} Family</a></td>
	    </tr>
	  @endif
	@endforeach


{{-- 5th Grade --}}
  <tr>
    <td colspan="2" class="thYellow"><center>5th Grade</center></td>
  </tr>
    <?php $num=0; ?>
	@foreach($students as $key=>$student)
	@if($student->grade == '5')
		<?php $num++; ?>
	    <tr>
	      <td>{{$num}}. <a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></td>
	      <td><a href="{{url('/education/'.$student->education_id.'/family/')}}">{{$student->lastName}} Family</a></td>
	    </tr>
	  @endif
	@endforeach



{{-- 6th Grade --}}
  <tr>
    <td colspan="2" class="thRed"><center>6th Grade</center></td>
  </tr>
    <?php $num=0; ?>
	@foreach($students as $key=>$student)
	@if($student->grade == '6')
		<?php $num++; ?>
	    <tr>
	      <td>{{$num}}. <a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></td>
	      <td><a href="{{url('/education/'.$student->education_id.'/family/')}}">{{$student->lastName}} Family</a></td>
	    </tr>
	  @endif
	@endforeach

{{-- 7th Grade --}}
  <tr>
    <td colspan="2" class="thGreen"><center>7th Grade</center></td>
  </tr>
    <?php $num=0; ?>
	@foreach($students as $key=>$student)
	@if($student->grade == '7')
		<?php $num++; ?>
	    <tr>
	      <td>{{$num}}. <a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></td>
	      <td><a href="{{url('/education/'.$student->education_id.'/family/')}}">{{$student->lastName}} Family</a></td>
	    </tr>
	  @endif
	@endforeach

{{-- 8th Grade --}}
  <tr>
    <td colspan="2" class="thBlue"><center>8th Grade</center></td>
  </tr>
    <?php $num=0; ?>
	@foreach($students as $key=>$student)
	@if($student->grade == '8')
		<?php $num++; ?>
	    <tr>
	      <td>{{$num}}. <a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></td>
	      <td><a href="{{url('/education/'.$student->education_id.'/family/')}}">{{$student->lastName}} Family</a></td>
	    </tr>
	  @endif
	@endforeach


{{-- 9th Grade --}}
  <tr>
    <td colspan="2" class="thYellow"><center>9th Grade</center></td>
  </tr>
    <?php $num=0; ?>
	@foreach($students as $key=>$student)
	@if($student->grade == '9')
		<?php $num++; ?>
	    <tr>
	      <td>{{$num}}. <a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></td>
	      <td><a href="{{url('/education/'.$student->education_id.'/family/')}}">{{$student->lastName}} Family</a></td>
	    </tr>
	  @endif
	@endforeach

{{-- 10th Grade --}}
  <tr>
    <td colspan="2" class="thRed"><center>10th Grade</center></td>
  </tr>
    <?php $num=0; ?>
	@foreach($students as $key=>$student)
	@if($student->grade == '10')
		<?php $num++; ?>
	    <tr>
	      <td>{{$num}}. <a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></td>
	      <td><a href="{{url('/education/'.$student->education_id.'/family/')}}">{{$student->lastName}} Family</a></td>
	    </tr>
	  @endif
	@endforeach

{{-- 11th Grade --}}
  <tr>
    <td colspan="2" class="thGreen"><center>11th Grade</center></td>
  </tr>
    <?php $num=0; ?>
	@foreach($students as $key=>$student)
	@if($student->grade == '11')
		<?php $num++; ?>
	    <tr>
	      <td>{{$num}}. <a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></td>
	      <td><a href="{{url('/education/'.$student->education_id.'/family/')}}">{{$student->lastName}} Family</a></td>
	    </tr>
	  @endif
	@endforeach

{{-- 12th Grade --}}
  <tr>
    <td colspan="2" class="thBlue"><center>12th Grade</center></td>
  </tr>
    <?php $num=0; ?>
	@foreach($students as $key=>$student)
	@if($student->grade == '12')
		<?php $num++; ?>
	    <tr>
	      <td>{{$num}}. <a href="{{url('/education/'.$student->education_id.'/family/'.$student->id)}}">{{$student->lastName}}, {{$student->firstName}}</a></td>
	      <td><a href="{{url('/education/'.$student->education_id.'/family/')}}">{{$student->lastName}} Family</a></td>
	    </tr>
	  @endif
	@endforeach

</table>


</div>

@stop