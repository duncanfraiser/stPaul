@extends('layouts.main')
@section('content')

<div class="col-md-8 col-md-offset-2"><br/>
<img width='100%' src="{{url('/banners/relEd.png/')}}">  
  <h3 style="margin-left: 1.5em">Please Select Family</h3>
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
  <div class="col-md-12">
  <a href="{{url('/education/menu')}}"><button class="greenBtn" style="float:right">Back to Menu</button></a>
  </div>
</div>

@stop