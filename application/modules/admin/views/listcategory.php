<div class="contact-form col-sm-12 bg-white">
	<h2 class="text-uppercase">List category</h2>
	<a href="/add-category/<?php echo $type;?>" class="btn btn-default pull-right"> Add new Category </a>
	
	<table class="table table-bordered">
		<thead>
			<th>Id</th>
			<th>Email</th>
			<th>Parent</th>
			<th>Action</th>
		</thead>
		<tbody>
		<?php if(count($list)>0){ ?>
			<?php foreach($list as $item) {?>
			<tr>
				<td><?php echo $item["id"]?></td>
				<td><?php echo $item["name"]?></td>
				<td><?php echo $item["parent"]?></td>
				<td>
					<a href="#" class="btn btn-default"> Delete </a>
					<a href="#" class="btn btn-default"> Reply </a>
				</td>
			</tr>
			<?php }?>
		<?php }else{?>
			<tr>
				<td class="text-center" colspan="4">Don't have any Item!</td>
			</tr>
		<?php }?>
		</tbody>
	</table>
</div>
		