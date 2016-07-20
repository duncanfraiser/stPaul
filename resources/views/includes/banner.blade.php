

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
		</div> <!-- Carousel -->
