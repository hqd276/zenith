<div class="footer">
	<div class="col-md-6">
		<a class="logo" href="/"> </a>
	</div>
	<div class="col-md-3">
		<h4 class="text-uppercase">About us</h4>
		<ul>
			<li><span class="glyphicon glyphicon-chevron-right"></span><a href="/gallery">Gallery</a></li>
			<li><span class="glyphicon glyphicon-chevron-right"></span><a href="/news">News & Events</a></li>
		</ul>
	</div>
	<div class="col-md-3">
		<h4 class="text-uppercase">Tours</h4>
		<ul>
			<?php if (count($cat_tour)>0){?>
	      		<?php	foreach ($cat_tour as $key => $value) {
      				echo "<li><span class='glyphicon glyphicon-chevron-right'></span><a href='".base_url()."news/list/2/".$value['id']."'>".$value['name']."</a></li>";
      			}?>
	      	<?php }?>
		</ul>
	</div>
</div>