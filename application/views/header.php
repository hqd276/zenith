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
		  <a class="navbar-brand" href="<? echo base_url();?>"><span class="glyphicon glyphicon-home"></span></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav text-uppercase">
		    <li <? if ($page=="about") {?> class="active"<? }?> >
		    	<a href="<? echo base_url();?>aboutus">About Us</a>
		    </li>
		    <li>
		    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery</a>
		    </li>
		    <li class="dropdown <?php echo ($page=="news")?'active':'';?>">
		      	<a href="<?php echo base_url().'news/list/0';?>" class="dropdown-toggle">News & Events</span></a>
		      	<?php if (count($cat_news_events)>0){?>
		    	<ul class="dropdown-menu" role="menu">
		      		<?php	foreach ($cat_news_events as $key => $value) {
		      				echo "<li><a href='".base_url()."news/list/0/".$value['id']."'>".$value['name']."</a></li>";
	      			}?>
		      	</ul>
		      	<?php }?>
		    </li>
		    <li class="dropdown <?php echo ($page=="blog")?'active':'';?>">
		    	<a href="<?php echo base_url().'news/list/3';?>" class="dropdown-toggle">Blog</a>
		    	<?php if (count($cat_blog)>0){?>
		    	<ul class="dropdown-menu" role="menu">
		      		<?php	foreach ($cat_blog as $key => $value) {
		      				echo "<li><a href='".base_url()."news/list/3/".$value['id']."'>".$value['name']."</a></li>";
	      			}?>
		      	</ul>
		      	<?php }?>
		    </li>
		    <li <? if ($page=="contact") {?> class="active"<? }?>>
		    	<a href="<? echo base_url();?>contact">Contact</a>
		    </li>
		  </ul>
		  <!-- <form class="navbar-form navbar-left pull-right" role="search">
		    <div class="form-group">
		      <input type="text" class="form-control input-lg" placeholder="Search">
		    </div>
		    <button type="submit" class="btn btn-default btn-lg">Submit</button>
		  </form> -->
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>