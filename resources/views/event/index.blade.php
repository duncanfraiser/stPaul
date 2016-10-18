@extends('layouts.main')


@section('content')


            <div class="content">


                <div class="container-fluid">


                <div id='calendar' class="col-md-10 col-md-offset-1" style="margin-top: 50px"></div>

            
                </div>
                <br>
                  @if(\Auth::Check())
                    <div class='text-center'>
                    <a href="{{url('/event/create')}}"><button class="btn btn-primary">Add An Event</button></a>
                    </div>
                @endif



            </div>
 


@stop
@section('scripts')

<!--         {{-- Full Calendar Links --}} -->
         <link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}">
         <script src="{{ asset('js/jquery.min.js') }}"></script>
         <script src="{{ asset('js/moment.min.js') }}"></script>
         <script src="{{ asset('js/fullcalendar.js') }}"></script>
        <script>

 $(document).ready(function() {
    // page is now ready, initialize the calendar...
    $('#calendar').fullCalendar({
        events: [
            @foreach($events as $event)
            {
            title  : '{{$event->title}}',
            start  : '{{$event->start_date}}{{$event->start_time}}',
            end    : '{{$event->end_date}}{{$event->end_time}}',
            url: '{{ url('/event/'.$event->id)  }}',
            color: '',
            textColor: '' // an option!
            },
            @endforeach
        ],


        eventClick: function(event) {
            if (event.url) {
            window.open(event.url);
            return false;
            }
        }
    
    });
}); 
</script>

@stop