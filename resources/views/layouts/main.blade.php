<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   
    {{-- FONT AWESOME --}}
    <script src="https://use.fontawesome.com/80936d74be.js"></script>

    <title>St. Paul</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">


        {{-- Full Calendar Links --}}
         <link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}">
                  <script src="{{ asset('js/jquery.min.js') }}"></script>
                           <script src="{{ asset('js/moment.min.js') }}"></script>
                             <script src="{{ asset('js/fullcalendar.js') }}"></script>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="{{asset('js/jquery-2.2.1.min.js')}}"></script>
 

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    @include('includes._froala-js')

    @include('includes._froala-css')
    <!--google font ovo-->
    <link href='https://fonts.googleapis.com/css?family=Ovo' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}?1">

@yield('customStyle')
    
 
</head>


<body>

    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="    border: 1px solid #999">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <a class="navbar-brand" href="{{ url('/')}}">
                    <img  src="/banners/Saint-Paul-Logo-horizontal.png">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{url('/welcome/1')}}">Welcome</a>
                    </li>
                    <li>
                        <div class="dropdown">
                        <button class=" dropdown-toggle" data-toggle="dropdown">Prayer<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                        <li><a href="{{url('/prayer/'.$prayer->id)}}">Prayer List</a></li>
                        <li><a href="{{url('/suggested_prayer/'.$suggestedprayer->id)}}">Suggested Prayers</a></li>
                        <li><a href="{{url('/Lectio_Divina/'.$divina->id)}}">Lectio Divina</a></li>
                        <li><a href="{{url('/contemplative/'.$contemplative->id)}}">Contemplative Prayer</a></li>
                        </ul>
                        </div>
                    </li>

                    <li>
                        <div class="dropdown">
                        <button class=" dropdown-toggle" data-toggle="dropdown">Registration Forms
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                        <li><a href="{{url('/flower')}}">Altar Flowers</a></li>
                        <li><a href="{{url('/ChristLife/create')}}">Discovering Christ</a></li>
                        <li><a href="{{url('/education/create')}}">Religious Education</a></li>
                        <li><a href="{{url('/RCIA/create')}}">RCIA</a></li>
                        <li><a href="{{url('/volunteer/create')}}">Volunteer</a></li>
                        </ul>
                        </div>
                    </li>
                    <li>
                            <a href="{{url('/event/')}}">Calendar</a>
                    </li>
                    <li>
                        <a href="{{url('/staff')}}">Contact Us</a>
                    </li>

    @if(\Auth::Check())
                    <li>
                        <div class="dropdown">
                        <button class=" dropdown-toggle" data-toggle="dropdown">Administration<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                        @if(\Auth::user()->isAdmin() || \Auth::User()->isChristlife())
                        <li><a href="{{url('/ChristLife/')}}">Discovering Christ Index</a></li>
                        @endif
                        @if(\Auth::user()->isAdmin() || \Auth::User()->isEducation())
                        <li><a href="{{url('/education/')}}">Religious Ed Index</a></li>
                        @endif
                        @if(\Auth::user()->isAdmin() || \Auth::User()->isRcia())
                        <li><a href="{{url('/RCIA/')}}">RCIA Index</a></li>
                        @endif
                        @if(\Auth::user()->isAdmin() || \Auth::User()->isVolunteer())
                        <li><a href="{{url('/volunteer/')}}">Volunteer Index</a></li>
                        @endif
                        </ul>
                        </div>
                    </li>
    @endif




                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



    <!-- Page Content -->
    <div class="container">



        @yield('content')

    </div>
   
    <!-- PAGE FOOTER -->
<div class="footer pull-right">
    <div class="col-lg-12">
    <!-- Yield the slider if there is one -->
    <p align="right ">Follow us on: 
              <a target="BLANK" title="Facebook" href="https://www.facebook.com/StPaulCatholicChurch/">
              <img src="/img/facebook.png" width="35" height="35" /></a>
              <a target="BLANK" title="Youtube" href="https://www.youtube.com/channel/UCHG6kYCxd7QY7-n7_FjxIrw">
              <img src="/img/youtube.png" width="35" height="35" /></a>
    <br/>&copy; 2016 St. Paul Catholic Church</p>
    </div>
</div>

    <!-- /.container -->



 
    @yield('scripts')

</body>

</html>