<div class="contact-form col-sm-12 bg-white">
	<h2 class="text-uppercase">List support</h2>
	<table class="table table-bordered table-hover">
		<thead>
			<th>Id</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Action</th>
		</thead>
		<tbody>
		<?php foreach($list as $item) {?>
			<tr>
				<td><?php echo $item->id?></td>
				<td><?php echo $item->email?></td>
				<td><?php echo $item->phone?></td>
				<td>
					<a href="#" onclick="confirmClick('<?php echo base_url('/admin/support/delete/'.$item->id)?>')"  class="btn btn-default"> Delete </a>
					<a href="#" class="btn btn-default"> Reply </a>
				</td>
			</tr>
			
		<?php }?>
		</tbody>
	</table>

	<nav>
	  	<ul class="pager">
		    <li class="previous <?php if ($prev <1) echo 'disabled';?>"><a href="<?php if ($prev >=1) echo  base_url().'admin/support/'. $prev ?>"><span aria-hidden="true">&larr;</span> Older</a></li>
		    <li class="next <?php if ($next == 0) echo 'disabled';?>"><a href="<?php if ($next <> 0) echo base_url().'admin/support/'. $next ?>">Newer <span aria-hidden="true">&rarr;</span></a></li>
	  	</ul>
	</nav>
</div>
		