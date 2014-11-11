<!DOCTYPE html>
<html lang="en">
<head>
<title>Zenith Vietnam Tours</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/bootstrap.js"></script>

<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/bootstrap-theme.css">

<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/style.css">
</head>

<body>
<div class="container">
	<div class="top">
		<a class="logo" href="/"> </a>

		<nav class="navbar navbar-default " role="navigation">

			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				    <span class="sr-only">Toggle navigation</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home"></span></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav text-uppercase">
				    <li class="active">
				    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us</a>
				    	<ul class="dropdown-menu" role="menu">
					        <li><a href="#">Something else here</a></li>
					        <li class="divider"></li>
					        <li><a href="#">Separated link</a></li>
					        <li class="divider"></li>
					        <li><a href="#">One more separated link</a></li>
				      	</ul>
				    </li>
				    <li>
				    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery</a>
				    	<ul class="dropdown-menu" role="menu">
					        <li><a href="#">Something else here</a></li>
					        <li class="divider"></li>
					        <li><a href="#">Separated link</a></li>
					        <li class="divider"></li>
					        <li><a href="#">One more separated link</a></li>
				      	</ul>
				    </li>
				    <li class="dropdown">
				      	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Events</span></a>
				      	<ul class="dropdown-menu" role="menu">
					        <li><a href="#">Something else here</a></li>
					        <li class="divider"></li>
					        <li><a href="#">Separated link</a></li>
					        <li class="divider"></li>
					        <li><a href="#">One more separated link</a></li>
				      	</ul>
				    </li>
				    <li>
				    	<a href="#">Blog</a>
				    </li>
				    <li>
				    	<a href="#">Contact</a>
				    </li>
				  </ul>
				  <form class="navbar-form navbar-left pull-right" role="search">
				    <div class="form-group">
				      <input type="text" class="form-control input-lg" placeholder="Search">
				    </div>
				    <button type="submit" class="btn btn-default btn-lg">Submit</button>
				  </form>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div>
	<div class="middle">
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

		<div class="hotnews">
			<div class="col-md-3">
				<div class="events">
					<h3 class="text-uppercase">News <br/><strong>& Events</strong></h3>
					<img src="<? echo base_url();?>images/slider/1.jpg"/>
					<p>Donec sit amet felis orci. Fuscet mollis lectus. Duis in mattis nibh. Mauris tempus, massa non auct consectetur, nulla est.</p>
					<a href="#" class="text-uppercase more">More</a>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="destinations">
					<h3 class="text-uppercase">New <br/><strong>destinations</strong></h3>
					<img src="<? echo base_url();?>images/slider/1.jpg"/>
					<p>Donec sit amet felis orci. Fuscet mollis lectus. Duis in mattis nibh. Mauris tempus, massa non auct consectetur, nulla est.</p>
					<a href="#" class="text-uppercase more">More</a>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="tours">
					<h3 class="text-uppercase">Popular <br/><strong>Tours</strong></h3>
					<img src="<? echo base_url();?>images/slider/1.jpg"/>
					<p>Donec sit amet felis orci. Fuscet mollis lectus. Duis in mattis nibh. Mauris tempus, massa non auct consectetur, nulla est.</p>
					<a href="#" class="text-uppercase more">More</a>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="booking">
					<h3 class="text-uppercase">Booking <br/><strong>Online</strong></h3>
					<img src="<? echo base_url();?>images/slider/1.jpg"/>
					<p>Donec sit amet felis orci. Fuscet mollis lectus. Duis in mattis nibh. Mauris tempus, massa non auct consectetur, nulla est.</p>
					<a href="#" class="text-uppercase more">More</a>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="content row">
			<div class="hello col-md-6">
				<h3 class="text-uppercase"><strong>HELLO THERE!</strong> <br>
				WELCOME TO OUR SITE</h3>
				<img src="<? echo base_url();?>images/home.png"/>
				<p>PHASELLUS TURPIS ORG
				PELLENTE DOLOR AVEL<br>

				Lorem ipsum dolor sit amet, cons ctet adipiscing. Duis eros ligula la quiseuis
				in dignisim atne liquam quis consectet magna liquam sed nibh condimentum.

				Lorem ipsum dolor sit amet, consete ctetur adipiscing. Duis eros ligula la quiseuismod dignisim atne liquam quis consectetur magna liquam sed nibh condimentum. ligula con eges. Curabitur eget massa neque, non laoreet purus. Etiam id eros in dultricies posu
				a mauris. Sed accumsan placerat ultricies.</p>
				<div class="clearfix"></div>
				<a href="#" class="text-uppercase more">More</a>
			</div>
			<div class="supports col-md-3">
				<div>
					<h4 class="text-uppercase">24/7 CLIENT <br>
					<strong>SUPPORT</strong></h4>
					<p>Donec sit amet felis orci. Fusce et mollis lectus. Duis in mattis nibh. Mauris tempus, massa non auctor consectetur.</p>
					<div class="clearfix"></div>
					<a href="#" class="text-uppercase more">More</a>
				</div>
				<div>
					<h4 class="text-uppercase">24/7 CLIENT <br>
					<strong>SUPPORT</strong></h4>
					<p>Donec sit amet felis orci. Fusce et mollis lectus. Duis in mattis nibh. Mauris tempus, massa non auctor consectetur.</p>
					<div class="clearfix"></div>
					<a href="#" class="text-uppercase more">More</a>
				</div>
			</div>
			<div class="services col-md-3">
				<div>
					<h4 class="text-uppercase">24/7 CLIENT <br>
					<strong>SUPPORT</strong></h4>
					<p>Donec sit amet felis orci. Fusce et mollis lectus. Duis in mattis nibh. Mauris tempus, massa non auctor consectetur.</p>
					<div class="clearfix"></div>
					<a href="#" class="text-uppercase more">More</a>
				</div>
				<div>
					<h4 class="text-uppercase">24/7 CLIENT <br>
					<strong>SUPPORT</strong></h4>
					<p>Donec sit amet felis orci. Fusce et mollis lectus. Duis in mattis nibh. Mauris tempus, massa non auctor consectetur.</p>
					<div class="clearfix"></div>
					<a href="#" class="text-uppercase more">More</a>
				</div>
			</div>
		</div>
	</div>
	
	
</div>
<div class="clearfix"></div>
<div class="bottom">
	<div class="footer">
	<div class="col-md-6">
		<a class="logo" href="/"> </a>
	</div>
	<div class="col-md-2">
		<h4 class="text-uppercase">About us</h4>
		<ul>
			<li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Vestibulum iaculis</a></li>
			<li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Vestibulum iaculis</a></li>
			<li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Vestibulum iaculis</a></li>
			<li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Vestibulum iaculis</a></li>
			<li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Vestibulum iaculis</a></li>
		</ul>
	</div>
	<div class="col-md-2">
		<h4 class="text-uppercase">Our offers</h4>
		<ul>
			<li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Vestibulum iaculis</a></li>
			<li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Vestibulum iaculis</a></li>
			<li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Vestibulum iaculis</a></li>
			<li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Vestibulum iaculis</a></li>
			<li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Vestibulum iaculis</a></li>
		</ul>
	</div>
	<div class="col-md-2">
		<h4 class="text-uppercase">Categories</h4>
		<ul>
			<li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Vestibulum iaculis</a></li>
			<li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Vestibulum iaculis</a></li>
			<li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Vestibulum iaculis</a></li>
			<li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Vestibulum iaculis</a></li>
			<li><span class="glyphicon glyphicon-chevron-right"></span><a href="#">Vestibulum iaculis</a></li>
		</ul>
	</div>

</div>

</body>

</html>