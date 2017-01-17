{{-- 

@foreach($banners as $count => $banner)

	@if($count === 0)
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		    <!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
			    	@if($banner->link != "" || $banner->link != null)
			    	<a href="{{ url($banner->link) }}">
		    	    @endif
		    	    	<img src="{{ url($banner->path)}}" alt="...">
			    	@if($banner->link != "" || $banner->link != null)
		    	    </a>
		    	    @endif
		        </div>
		  

    @elseif($count > 0)
		        <div class="item">
			    	@if($banner->link != "" || $banner->link != null)
			    	<a href="{{ url($banner->link) }}">
		    	    @endif
		            	<img src="{{ url($banner->path)}}" alt="...">           	
			    	@if($banner->link != "" || $banner->link != null)
			    	</a>
		    	    @endif	     
		        </div>
				@endif
			@endforeach
		  </div>
		</div> <!-- Carousel --> --}}
<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>


    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
   
      <div class="item active">
        <a href="{{url('/ChristLife/create')}}"><img src="{{url('/banners/Discovering-Christ-logoClick.png/')}}" alt="St Paul Cathloic Church"></a>
      </div>


      <div class="item">
        <img src="{{url('banners/GreenCrucifix.png/')}}" alt="St Paul Cathloic Church">
      </div>
    
      <div class="item">
        <img src="{{url('banners/St.-Paul-Banners10.png')}}" alt="St Paul Cathloic Church">
      </div> 

 

      <div class="item">
        <img src="{{url('banners//churchView.png' )}}" alt="St Paul Cathloic Church">
      </div> 
   
      <div class="item">
        <img src="{{url('banners/St.-Paul-Banners40.png')}}" alt="St Paul Cathloic Church">
      </div> 




         
    </div>

        <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

    
</div>