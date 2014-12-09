<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/home.css">
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
		<?php foreach ($list_news as $key => $value) {?>
			<div class="item <?php if($key==key($list_news)) echo "active"; ?>">
				<img class="img-responsive" src="<?php echo base_url().'uploads/news/'.$value['image']?>" alt="...">
			  	<div class="carousel-caption  hidden-xs">
				    <a href="<?php echo base_url().'news/detail/'.$value['id']?>"><?php echo $value['title']?></a>
			  	</div>
			</div>
		<?php }
		?>
	</div>

	<!-- Controls -->
	<a class="left carousel-control hidden-xs" href="#carousel-large" role="button" data-slide="prev">
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control hidden-xs" href="#carousel-large" role="button" data-slide="next">
		<span class="sr-only">Next</span>
	</a>
</div>

<div class="hotnews row">
	<div class="col-sm-6 col-md-3">
		<div class="thumbnail events">
			<h3 class="text-uppercase"><?php echo $setting['news']['data']->name;?></h3>
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
			<h3 class="text-uppercase"><?php echo $setting['theme']['data']->name;?></h3>
		  	<a href="<? echo base_url();?>news/list/1" class="img">
		  	<img src="<? echo base_url()."uploads/settings/".$setting['theme']['data']->image;?>" alt="...">
		  	</a>
		  	<div class="caption">
			    <p><?php echo split_char($setting['theme']['data']->description,100,1)." ...";?></p>
		  		<a href="<? echo base_url();?>news/list/1" class="text-uppercase more">More</a>
		  	</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-3">
		<div class="thumbnail tours">
			<h3 class="text-uppercase"><?php echo $setting['tour']['data']->name;?></h3>
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
			<h3 class="text-uppercase"><?php echo $setting['blog']['data']->name;?></h3>
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
		<h3 class="text-uppercase"><strong><?php echo $setting['about']['data']->name;?></strong></h3>
		<a href="<? echo base_url();?>aboutus" class="img">
	  		<img src="<? echo base_url()."uploads/settings/".$setting['about']['data']->image;?>" alt="...">
	  	</a>
		<p><?php echo $setting['about']['data']->description;?></p>
		<div class="clearfix"></div>
		<a href="<? echo base_url();?>aboutus" class="text-uppercase more">More</a>
	</div>
	<div class="supports col-md-3 col-sm-6">
		<div>
			<h4 class="text-uppercase"><?php echo $setting['support']['data']->description;?></h4>
			<p><?php echo $setting['support']['data']->description;?></p>
			<div class="clearfix"></div>
			<a href="<? echo base_url();?>contact" class="text-uppercase more">More</a>
		</div>
		<div>
			<h4 class="text-uppercase"><?php echo $setting['gallery']['data']->description;?></h4>
			<p><?php echo $setting['gallery']['data']->description;?></p>
			<div class="clearfix"></div>
			<a href="<? echo base_url();?>gallery" class="text-uppercase more">More</a>
		</div>
	</div>
	<div class="services col-md-3 col-sm-6">
		<div>
			<h4 class="text-uppercase"><?php echo $setting['booking']['data']->name;?></h4>
			<p><?php echo $setting['booking']['data']->description;?></p>
			<div class="clearfix"></div>
			<a href="<? echo base_url();?>booking" class="text-uppercase more">More</a>
		</div>
		<!-- <div>
			<h4 class="text-uppercase"><?php echo $setting['service']['data']->name;?></h4>
			<p><?php echo $setting['service']['data']->description;?></p>
			<div class="clearfix"></div>
			<a href="<? echo base_url();?>service" class="text-uppercase more">More</a>
		</div> -->
	</div>
</div>
	
	