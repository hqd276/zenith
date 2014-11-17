<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/news.css">
<div class="bg-white">
	<h2 class="text-uppercase"><?php echo $item['title']?></h2>
	<hr>
	<a href="<?php echo base_url()?>" class="">Home</a> / <a href="<?php echo base_url().'news/list/'.$cat['type'].'/'. $cat['id']?>"><?php echo $cat['name']?></a>
	<hr>

	<div class="col-md-8 news-detail">
		<img class="col-md-12" src="<?php echo base_url().'uploads/news/'.$item['image']?>">
		<div class="clearfix"></div>
		<p class="description"><i><?php echo $item['description']?></i></p>
		<p class="detail"><?php echo $item['detail']?></p>
		<hr>
		<span class="glyphicon glyphicon-tags"></span> <?php echo $item['tag']?> 
		<span class="glyphicon glyphicon-pencil"></span><?php echo date("d/m/Y",$item['created'])?> 
		<hr>
		<ul>
		<?php if (count($other_news)>0) {
			foreach ($other_news as $key => $value) {?>
				<li><a href="<?php echo base_url().'news/detail/'.$value['id']?>"> <?php echo $value['title']?> - <i><?php echo date("d/m/Y",$value['created'])?></i></a></li>
				
		<?php	}
		}?>
		</ul>
	</div>
	<div class="col-md-4">
		<?php echo $template['partials']['right']; ?>
	</div>
	<div class="clearfix"></div>
</div>