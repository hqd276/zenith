<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/news.css">
<div class=" bg-white">
	<h2 class="text-uppercase"><?php echo $title?></h2>
	<hr>
	<a href="<?php echo base_url()?>" class="">Home</a> / <a href="<?php echo base_url().$page.'/list/'.$cat['type'].'/'. $cat['id']?>"><?php echo $cat['name']?></a>
	<hr>

	<div class="news-form col-md-8 row">
		<?php foreach ($list_news as $key => $value) {?>
			<div class="item">
				<div class="col-md-4">
					<img class="img-responsive" src="<?php echo base_url().'uploads/news/'.$value['image']?>">
				</div>
				<div class="col-md-8">
					<a href="<?php echo base_url().'news/detail/'.$value['id']?>"><h4 class="text-uppercase"><?php echo $value['title']?></h4></a>
					<p><?php echo split_char($value['description'],150,1)." ..."?></p>
					<a href="<?php echo base_url().'news/detail/'.$value['id']?>" class="text-uppercase more pull-right">More</a>
				</div>
				
			</div>
		<?php }
		?>
		<nav>
		  	<ul class="pager">
			    <li class="previous <?php if ($prev <1) echo 'disabled';?>"><a href="<?php if ($prev >=1) echo  base_url().$page.'/list/'.$cat['type'].'/'. $cat['id'].'/'. $prev ?>"><span aria-hidden="true">&larr;</span> Older</a></li>
			    <li class="next <?php if ($next == 0) echo 'disabled';?>"><a href="<?php if ($next <> 0) echo base_url().$page.'/list/'.$cat['type'].'/'. $cat['id'].'/'. $next ?>">Newer <span aria-hidden="true">&rarr;</span></a></li>
		  	</ul>
		</nav>
	</div>
	<div class="col-md-4">
		<?php echo $template['partials']['right']; ?>
	</div>
	<div class="clearfix"></div>
</div>