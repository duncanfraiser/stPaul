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
                <ul class="nav navbar-nav navbar-right" style="margin-right: 1px">
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
                        <li><a href="{{url('/ChristLife/create')}}">Sharing Christ</a></li>
                        <li><a href="{{url('/member/create')}}">Parish Membership</a></li>
                        <li><a href="{{url('/RCIA/create')}}">RCIA</a></li>
                        <li><a href="{{url('/education/menu')}}">Religious Education</a></li>                        
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
                        <button class=" dropdown-toggle" data-toggle="dropdown">Hello, {{ Auth::user()->name }}<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                        @if(\Auth::user()->isAdmin() || \Auth::User()->isChristlife())
                        <li><a href="{{url('/ChristLife/')}}">Sharing Christ Index</a></li>
                        @endif
                        @if(\Auth::user()->isAdmin())
                        <li><a href="{{url('/member/')}}">Parish Member Index</a></li>
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
                        <li><a href="{{url('logout')}}">Logout</a></li>
                        </ul>
                        </div>
                    </li>
    @else
{{--     <li><a href="{{url('/login')}}">Login</a></li> --}}
    @endif




                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

