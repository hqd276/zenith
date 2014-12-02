<div id="carousel-large" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<!-- <ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		<li data-target="#carousel-example-generic" data-slide-to="3"></li>
	</ol> -->

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
		  <img src="<? echo base_url();?>images/slider/1.jpg" alt="...">
		  <div class="carousel-caption">
		    Zenith Vietnam Tour
		  </div>
		</div>
		<div class="item">
		  <img src="<? echo base_url();?>images/slider/2.jpg" alt="...">
		  <div class="carousel-caption">
		    Zenith Vietnam Tour
		  </div>
		</div>
		<div class="item">
		  <img src="<? echo base_url();?>images/slider/3.jpg" alt="...">
		  <div class="carousel-caption">
		    Zenith Vietnam Tour
		  </div>
		</div>
		<div class="item">
		  <img src="<? echo base_url();?>images/slider/4.jpg" alt="...">
		  <div class="carousel-caption">
		    Zenith Vietnam Tour
		  </div>
		</div>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-large" role="button" data-slide="prev">
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-large" role="button" data-slide="next">
		<span class="sr-only">Next</span>
	</a>
</div>

<div class="hotnews row">
	<div class="col-sm-6 col-md-3">
		<div class="thumbnail events">
			<h3 class="text-uppercase">News <br/><strong>& Events</strong></h3>
			<a href="<? echo base_url();?>news/list/0" class="img">
		  	<img src="<? echo base_url()."uploads/settings/".$setting['news']['data']->image;?>" alt="...">
		  	</a>
		  	<div class="caption">
			    <p><?php echo split_char($setting['news']['data']->description,100,1)." ...";?></p>
		  		<a href="<? echo base_url();?>news/list/0" class="text-uppercase more">More</a>
		  	</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-3">
		<div class="thumbnail destinations">
			<h3 class="text-uppercase">New <br/><strong>destinations</strong></h3>
		  	<a href="<? echo base_url();?>news/list/1" class="img">
		  	<img src="<? echo base_url()."uploads/settings/".$setting['destination']['data']->image;?>" alt="...">
		  	</a>
		  	<div class="caption">
			    <p><?php echo split_char($setting['destination']['data']->description,100,1)." ...";?></p>
		  		<a href="<? echo base_url();?>news/list/1" class="text-uppercase more">More</a>
		  	</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-3">
		<div class="thumbnail tours">
			<h3 class="text-uppercase">Popular <br/><strong>Tours</strong></h3>
		  	<a href="<? echo base_url();?>news/list/2" class="img">
		  	<img src="<? echo base_url()."uploads/settings/".$setting['tour']['data']->image;?>" alt="...">
		  	</a>
		  	<div class="caption">
			    <p><?php echo split_char($setting['tour']['data']->description,100,1)." ...";?></p>
		  		<a href="<? echo base_url();?>news/list/2" class="text-uppercase more">More</a>
		  	</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-3">
		<div class="thumbnail booking">
			<h3 class="text-uppercase">New <br/><strong>blogs</strong></h3>
		  	<a href="<? echo base_url();?>news/list/3" class="img">
		  	<img src="<? echo base_url()."uploads/settings/".$setting['blog']['data']->image;?>" alt="...">
		  	</a>
		  	<div class="caption">
			    <p><?php echo split_char($setting['blog']['data']->description,100,1)." ...";?></p>
		  		<a href="<? echo base_url();?>news/list/3" class="text-uppercase more">More</a>
		  	</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div class="content row">
	<div class="hello col-md-6">
		<h3 class="text-uppercase"><strong>HELLO THERE!</strong> <br>
		WELCOME TO OUR SITE</h3>
		<a href="<? echo base_url();?>aboutus" class="img">
	  		<img src="<? echo base_url()."uploads/settings/".$setting['about']['data']->image;?>" alt="...">
	  	</a>
		<p><?php echo $setting['blog']['data']->description;?></p>
		<div class="clearfix"></div>
		<a href="<? echo base_url();?>aboutus" class="text-uppercase more">More</a>
	</div>
	<div class="supports col-md-3">
		<div>
			<h4 class="text-uppercase">24/7 CLIENT /<br>
			<strong>SUPPORT</strong></h4>
			<p><?php echo $setting['support']['data']->description;?></p>
			<div class="clearfix"></div>
			<a href="<? echo base_url();?>contact" class="text-uppercase more">More</a>
		</div>
		<div>
			<h4 class="text-uppercase">VIEW /<br>
			<strong>OUR GALLERY</strong></h4>
			<p><?php echo $setting['gallery']['data']->description;?></p>
			<div class="clearfix"></div>
			<a href="#" class="text-uppercase more">More</a>
		</div>
	</div>
	<div class="services col-md-3">
		<div>
			<h4 class="text-uppercase">Booking /<br>
			<strong>ONLINE</strong></h4>
			<p><?php echo $setting['booking']['data']->description;?></p>
			<div class="clearfix"></div>
			<a href="#" class="text-uppercase more">More</a>
		</div>
		<div>
			<h4 class="text-uppercase">TOP  /<br>
			<strong>SERVICES</strong></h4>
			<p><?php echo $setting['service']['data']->description;?></p>
			<div class="clearfix"></div>
			<a href="#" class="text-uppercase more">More</a>
		</div>
	</div>
</div>
	
	