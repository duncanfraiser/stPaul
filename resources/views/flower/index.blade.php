@extends('layouts.main')


@section('content')


            <div class="content">


                <div class="container-fluid">


                <div id='calendar' class="col-md-10 col-md-offset-1" style="margin-top: 50px"></div>

            
                </div>
                <br>




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
            @foreach($flowers as $flower)
            {
            title  : '{{$flower->title}}',
            start  : '{{$flower->start_date}}',
            end    : '',
            url: '{{ url('/flower/'.$flower->id.'/edit')  }}',
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