@extends('layouts.main')
@section('content')

<div class="col-md-8 col-md-offset-2">
  <h2>Religious Education</h2>
  <h4>Please Select Family</h4>
  <div class="col-md-6">
    <ul>
      @foreach($fams as $key=>$fam)
        @if($key<$colTot)
          <li><a href="{{url('education/'.$fam->id.'/student/create')}}">{{$fam->father_last_name}} Family</a></li>
	          @if($fam->father_first_name != "" && $fam->mother_first_name != "")
	          <p>Parents: {{$fam->father_first_name}} & {{$fam->mother_first_name}}</p>
	          @else
	          <p>Parent: {{$fam->father_first_name}}{{$fam->mother_first_name}}</p>
	          @endif
        @endif
      @endforeach
    </ul>	
  </div>
  <div class="col-md-6">
    <ul>
      @foreach($fams as $key=>$fam)
        @if($key>$colTot)
          <li><a href="{{url('education/'.$fam->id.'/student/create')}}">{{$fam->father_last_name}} Family</a></li>
	          @if($fam->father_first_name != "" && $fam->mother_first_name != "")
	          <p>Parents: {{$fam->father_first_name}} & {{$fam->mother_first_name}}</p>
	          @else
	          <p>Parent: {{$fam->father_first_name}}{{$fam->mother_first_name}}</p>
	          @endif          
         @endif
      @endforeach
    </ul>	
  </div>
</div>
@stop