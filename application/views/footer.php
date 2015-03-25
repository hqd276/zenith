<div class="footer container ">
	<div class="col-md-6">
		<a class="logo-footer" href="/"> <img src="<? echo base_url()."uploads/settings/".$setting['logo']['data']->image;?>"></a>
		<p style="padding-top:20px">
			ZenithVietnamTours : One Member Company Limited <br>
			License No: 0104 007688 – 01/09/2012 <br>
			Registered office: Suites 616. 6 F 72 Tran Hung Dao, Hanoi, VIETNAM. <br>
			General enquiries and Online bookings: +84 903479915<br>
			© 2012-15 Zenithvietnamtors  ALL RIGHTS RESERVED
		</p>
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