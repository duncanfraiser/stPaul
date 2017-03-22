@extends('layouts.main')
@section('customStyle')
<style>
    .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
    }
    /* basic positioning */
    .legend { list-style: none; }
    .legend li { float: left; margin-right: 10px; }
    .legend span { border: 1px solid #ccc; float: left; width: 12px; height: 12px; margin: 2px; }
    /* your colors */
    .legend .superawesome { background-color: #e8c562; }
    .legend .awesome { background-color: #bf202f; }
    .legend .kindaawesome { background-color: #509543; }
    .legend .notawesome { background-color: #3e95d1; }
</style>
@stop

@section('content')


    <div class="content">
        <div class="container-fluid">
            <h1><center>Event Calendar</center></h1>
            <div class="flex-center">
                <ul class="legend">
                    <li><span class="superawesome"></span> Liturgy & Sacraments</li>
                    <li><span class="awesome"></span> Prayer & Study</li>
                    <li><span class="kindaawesome"></span> Religious Ed & Youth</li>
                    <li><span class="notawesome"></span> Discipleship & Special Events</li>
                </ul>
            </div>
            <div id='calendar' class="col-md-10 col-md-offset-1" style="margin-top: 50px"></div>
           
                @if(\Auth::Check())
                <div class='text-center'>
                <a href="{{url('/event/create')}}"><button class="btn btn-primary" style="margin-top: 15px">Add An Event</button></a>
                </div>
                @endif
            
        </div>
    </div>
@stop
@section('scripts')

<!--         {{-- Full Calendar Links --}} -->
        <link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}">

        <script src="{{ asset('js/moment.min.js') }}"></script>
        <script src="{{ asset('js/fullcalendar.js') }}"></script>

<script>
 $(document).ready(function() {
    // page is now ready, initialize the calendar...
    $('#calendar').fullCalendar({
        events: [
            @foreach($events as $event)
            {
            @if($event->sunday != ""||$event->monday != "" ||$event->tuesday != ""|| $event->wednesday != ""|| $event->thursday != ""|| $event->friday != ""|| $event->saturday != "")
            title  : '{{$event->title}}',
            dow: [ {{$event->sunday}},{{$event->monday}},{{$event->tuesday}},{{$event->wednesday}},{{$event->thursday}},{{$event->friday}},{{$event->saturday}}],
            start  : '{{$event->start_time}}',
            @else
            title  : '{{$event->title}}',
            start  : '{{$event->start_date}} {{$event->start_time}}',
            end    : '{{$event->end_date}} {{$event->end_time}}',
            @endif
            @if($event->start_time == "00:00:00")
            allDay : true,
            @else
            allDay : false,
            @endif
            url: '{{ url('/event/'.$event->id)  }}',
            @if($event->color == "")
            color: '#fff',
            textColor: '#000' // an option!
            @else
            color: '{{$event->color}}',
            textColor: '' // an option!
            @endif

            },
            @endforeach
        ],

    
    });
}); 
</script>


@stop