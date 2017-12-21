@extends('layouts.main')
@section('customStyle')

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
@stop

@section('content')
<div class="col-md-12">
<div class="col-md-10 col-md-offset-1">
<h2>2018 Flower Chart</h2>
<h3>Altar Flowers - Cost $70<br/>
Blessed Mother Flowers - Cost $40</h3>
<p>You may mail your payment or drop it in the Weekend Offertory. Please make checks payable to St. Paul Catholic Church, and indicate payment is for Altar Flowers or Blessed Mother Flowers with the designated date. The Church will order the flowers and have them delivered on your specific date (select date below).</p>
<table>
  <tr>
    <th>Date</th>
    <th>Please Select a Flower Options</th>
    <th>Donated by</th>
  </tr>
  @foreach($flowers as $flower)
  @if($flower->date == 'December 8th')
  <tr>
    <td>{{$flower->date}}
    @if(\Auth::Check())
    <a href="{{url('/flower/'.$flower->id)}}" style="float: right"> View</a>
    @endif
    <td>
    @if($flower->altar_donor != "")
    <span style="color: red">{{$flower->altar_title}}--- Reserved</span><br/>
    @else
      <a href="{{url('/flower/'.$flower->id.'/altar')}}">{{$flower->altar_title}}---Available</a><br/>
    @endif
    </td>
    <td>
      @if($flower->altar_donor != "")
      <span style="color: red">{{$flower->altar_donor}}</span><br/>
      @else
       <a href="{{url('/flower/'.$flower->id.'/altar')}}">Open</a><br/>
       @endif
    </td>
  </tr>
  @else

  <tr>
    <td>{{$flower->date}}
        @if(\Auth::Check())
    <a href="{{url('/flower/'.$flower->id)}}" style="float: right"> View</a>
    @endif<br/>
        {{$flower->extra}}<br/>
        {{$flower->extratwo}}</td>
    <td>
    @if($flower->altar_donor != "")
    <span style="color: red">{{$flower->altar_title}}--- Reserved</span><br/>
    @else
      <a href="{{url('/flower/'.$flower->id.'/altar')}}">{{$flower->altar_title}}---Available</a><br/>
    @endif
    @if($flower->blessed_mother_donor != "")
    <span style="color: red">{{$flower->mother_title}}--- Reserved</span><br/>
    @else
      <a href="{{url('/flower/'.$flower->id.'/blessedmother')}}">{{$flower->mother_title}}---Available</a>
    @endif
    </td>



    <td>
      @if($flower->altar_donor != "")
      <span style="color: red">{{$flower->altar_donor}}</span><br/>
      @else
       <a href="{{url('/flower/'.$flower->id.'/altar')}}">Open</a><br/>
       @endif


      @if($flower->blessed_mother_donor != "")
      <span style="color: red">{{$flower->blessed_mother_donor}}</span>
      @else
       <a href="{{url('/flower/'.$flower->id.'/blessedmother')}}">Open</a><br/>
      @endif
    </td>
  </tr>
  @endif
  @endforeach
</table>
 
</div>
</div>

@stop
@section('scripts')



@stop