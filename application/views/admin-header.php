<h1><a class="logo" href="<? echo base_url();?>admin"> Administrator</a></h1>

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
		  <a class="navbar-brand" href="<? echo base_url();?>admin"><span class="glyphicon glyphicon-home"></span></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav text-uppercase">
		    <li class="dropdown">
	          	<a href="#" class="dropdown-toggle" data-toggle="dropdown">News <span class="caret"></span></a>
	          	<ul class="dropdown-menu text-capitalize" role="menu">
	          		<li class="dropdown-submenu">
	                <a tabindex="-1" href="#">News & Events</a>
	                <ul class="dropdown-menu">
	                  	<li><a href="<? echo base_url();?>list-category/0">News Category Manager</a></li>
	                  	<li><a href="#">News Manager</a></li>
	                </ul>
	              	</li>
	              	<li class="divider"></li>
	              	<li class="dropdown-submenu">
	                <a tabindex="-1" href="#">Destinations</a>
	                <ul class="dropdown-menu">
	                  	<li><a href="<? echo base_url();?>list-category/1">Destinations Category Manager</a></li>
	                  	<li><a href="#">Destinations Manager</a></li>
	                </ul>
	              	</li>
	              	<li class="divider"></li>
	              	<li class="dropdown-submenu">
	                <a tabindex="-1" href="#">Tours</a>
	                <ul class="dropdown-menu">
	                  	<li><a href="<? echo base_url();?>list-category/2">Tours Category Manager</a></li>
	                  	<li><a href="#">Tours Manager</a></li>
	                </ul>
	              	</li>
	              	<li class="divider"></li>
	              	<li class="dropdown-submenu">
	                <a tabindex="-1" href="#">Blog</a>
	                <ul class="dropdown-menu">
	                  	<li><a href="<? echo base_url();?>list-category/3">Blog Category Manager</a></li>
	                  	<li><a href="#">Blog Manager</a></li>
	                </ul>
	              	</li>
	          	</ul>
	        </li>
	        <li class="dropdown">
	          	<a href="#" class="dropdown-toggle" data-toggle="dropdown">System <span class="caret"></span></a>
	          	<ul class="dropdown-menu text-capitalize" role="menu">
	          		<li><a href="<? echo base_url();?>list-support">Supports</a></li>
	          	</ul>
          	</li>
		  </ul>
		</div><!-- /.navbar-collapse -->
		<div class="user-info text-right col-md-4">
			Hi <span><strong><?php echo $user['email'];?></strong></span>!
			<a href="<?php echo base_url();?>logout">Logout</a> 
		</div>
	</div><!-- /.container-fluid -->
</nav>