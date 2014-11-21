<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/news.css">
<div class=" bg-white">
	<h2 class="text-uppercase"><?php echo $title?></h2>
	<hr>
	<a href="<?php echo base_url()?>" class="">Home</a> / <a href="<?php echo base_url().'news/list/'.$cat['type'].'/'. $cat['id']?>"><?php echo $cat['name']?></a>
	<hr>

	<div class="news-form col-md-8">
		<?php foreach ($list_news as $key => $value) {?>
			<div class="item">
				<img src="<?php echo base_url().'uploads/news/thumbs/'.$value['image']?>">
				<span><?php echo date("d/m/Y",$value['created'])?></span>
				<a href="<?php echo base_url().'news/detail/'.$value['id']?>"><h4 class="text-uppercase"><?php echo $value['title']?></h4></a>
				<p><?php echo split_char($value['description'],250,1)." ..."?></p>
				<div class="clearfix"></div>
				<a href="<?php echo base_url().'news/detail/'.$value['id']?>" class="text-uppercase more">More</a>
			</div>
		<?php }
		?>
	</div>
	<div class="col-md-4">
		<?php echo $template['partials']['right']; ?>
	</div>
	<div class="clearfix"></div>
</div>