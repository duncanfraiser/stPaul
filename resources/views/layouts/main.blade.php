<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{url('/img/logo.png')}}">
    <title>St. Paul</title>
   
    {{-- FONT AWESOME --}}
    <script src="https://use.fontawesome.com/80936d74be.js"></script>
    <!--google font ovo-->
    <link href='https://fonts.googleapis.com/css?family=Ovo' rel='stylesheet' type='text/css'>



    <!-- Bootstrap Core CSS -->
{{--     <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> --}}
    <!-- jQuery -->
    <script src="{{asset('js/jquery-2.2.1.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  


    <link rel="stylesheet" href="{{ asset('css/custom.css') }}?47">



 


    @yield('customStyle')
    
         <!-- APPLE IOS WEB APP NECESSITIES -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="St. Paul">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <link rel="apple-touch-startup-image" href="/apple-touch-icon.png">
        <!-- By Default, Links open externally (in safari) on the IOS Web App after 'download'. This prevents internal links from opening externally. It still allows external links to open externally, though. -->
        <script type="text/javascript">
            if(("standalone" in window.navigator) && window.navigator.standalone){
                var noddy, remotes = false;
                document.addEventListener('click', function(event) {
                    noddy = event.target;
                    while(noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
                    noddy = noddy.parentNode;
                    }
                    if('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes))
                    {
                    event.preventDefault();
                    document.location.href = noddy.href;
                    }
                },false);
            }
        </script>
</head>


<body>
  <div class="loader"></div>

@include('includes.nav')



    <!-- Page Content -->
    <div class="container">



 

        @yield('content')



    </div>
    

<div class="col-md-12 foots">
  <div class="col-md-6 col-xs-6 footsleft">
    <p align="left">
        @if(\Auth::check())
        <a style="cursor: pointer; " href="{{url('/logout')}}"><img src="{{url('img/footLogo.png')}}"></a>
        @else
      <a style="cursor: pointer; " href="{{url('/login')}}"><img src="{{url('img/footLogo.png')}}"></a>
      @endif
     <span> &copy; <?php echo date("Y"); ?> St. Paul Catholic Church</span></p>
    </p>  
  </div>


  <div class="col-md-6 col-xs-6 footsright">
     <p align="right"><span>Follow us on:</span>
              <a target="BLANK" title="Facebook" href="https://www.facebook.com/StPaulCatholicChurch/">
              <img src="/img/facebook.png" width="35" height="35" /></a>
              <a target="BLANK" title="Youtube" href="https://www.youtube.com/channel/UCHG6kYCxd7QY7-n7_FjxIrw">
              <img src="/img/youtube.png" width="35" height="35" /></a>
    </p>


  </div>
</div>
    <!-- PAGE FOOTER -->







<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
})
</script>

@yield('scripts')








  

</body>

</html>