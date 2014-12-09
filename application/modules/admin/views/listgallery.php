<div class="contact-form col-sm-12 bg-white">
	<h2 class="text-uppercase">List Image</h2>
	<a href="<?php echo base_url('/admin/gallery/add')?>" class="btn btn-default pull-right"> Add new Image </a>
	
	<table class="table table-bordered table-hover">
		<thead>
			<th>Id</th>
			<th>Title</th>
			<th>Image</th>
			<th>Status</th>
			<th>Action</th>
		</thead>
		<tbody>
		<?php if(count($list)>0){ ?>
			<?php foreach($list as $item) {?>
			<tr>
				<td><?php echo $item["id"]?></td>
				<td><?php echo $item["title"]?></td>
				<td><?php 
				if ($item['image']!='') {
					echo "<img class='img_item' style='height:150px;' src='".base_url("uploads/gallery/".$item['image'])."'/>";
				}
				?></td>
				<td><?php echo $item["status"]?></td>
				<td>
					<a href="#" onclick="confirmClick('<?php echo base_url('/admin/gallery/delete/'.$item["id"])?>')" class="btn btn-default"> Delete </a>
				</td>
			</tr>
			<?php }?>
		<?php }else{?>
			<tr>
				<td class="text-center" colspan="5">Don't have any Item!</td>
			</tr>
		<?php }?>
		</tbody>
	</table>
</div>
		