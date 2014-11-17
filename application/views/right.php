<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/right.css">

<div class="category-block">
	<h3 class="text-uppercase">Categories</h3>
	<ul>
	<?php foreach ($categories as $key => $value) {
		if ($value['parent'] == -1) {?>
		<li><a href="<?php echo base_url()."news/list/3/".$value['id'];?>"><?php echo $value['name']?></a></li>
	<?php }
		}
	?>
	</ul>
</div>
<div class="recent-post-block">
	<h3 class="text-uppercase">Recent Post</h3>
	<?php foreach ($recent_post as $key => $value) {?>
		<div class="item">
			<img src="<?php echo base_url().'uploads/news/thumbs/'.$value['image']?>">
			<span><?php echo date("d/m/Y",$value['created'])?></span>
			<a href="<?php echo base_url().'news/detail/'.$value['id']?>"><h4 class="text-uppercase"><?php echo $value['title']?></h4></a>
			<p><?php echo $value['description']?></p>
			<div class="clearfix"></div>
			<a href="<?php echo base_url().'news/detail/'.$value['id']?>" class="text-uppercase more">More</a>
		</div>
		<hr>
	<?php }
	?>
</div>
<!-- <div class="recent-comment-block">
	<h3 class="text-uppercase">Recent Comments</h3>
</div> -->