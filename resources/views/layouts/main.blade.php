<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Logo Nav - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   <link rel="stylesheet" href="{{ asset('css/custom.css') }}?1">
</head>


<body>

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
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
                        <a href="#">Welcome</a>
                    </li>
                    <li>
                        <a href="{{url('/ChristLife/create')}}">Register</a>
                    </li>

                    @if(!\Auth::guest())
                    <li >
                    <a href="{{url('/logout')}}">Log Out, {{\Auth::user()->name}}</a>
                    </li>
                    @else
                    <li>
                        <a href="{{url('/login')}}">Login </a>
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
    <p>&copy; 2016 St. Paul Catholic Church</p>
    </div>
</div>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{asset('js/jquery-2.2.1.min.js')}}"></script>
 

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

 
    @yield('scripts')

</body>

</html>