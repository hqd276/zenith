<div class="contact-form col-sm-12 bg-white">
	<h2 class="text-uppercase"><?php echo $title?></h2>
	<a href="/list-category/<?php echo $type;?>" class="btn btn-default pull-right"> List Category </a>

	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="">
		<div class="form-group">
			<div>
				<span class="success">
					<?php 
					if(isset($b_Check))
						if ($b_Check){
							echo "Add Success!";
						}else{
							echo "Add Fail";
						}
					?>
				</span>
				<label class="control-label" for="inputError1"><?php echo form_error('name'); ?></label>
				<label class="control-label" for="inputError1"><?php if(isset($upload_mess)) echo $upload_mess; ?></label>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-10">
			  	<input type="" class="form-control" id="inputEmail3" name="name" placeholder="Name" value="<?php echo $item['name']; ?>">
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Image</label>
			<div class="col-sm-10">
				<?php 
				if ($item['image']!='') {
					echo "<img class='img_item' style='height:150px;' src='".base_url("uploads/categories/".$item['image'])."'/>";
				}
				?>
			  	<input type="file" class="form-control" id="inputEmail3" name="image" placeholder="Image">
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Parent</label>
			<div class="col-sm-10">
				<select class='form-control' name='parent'>
					<option value='-1' <?php echo ($item['parent'] == -1)?'selected':''?> >- Root -</option>
					<?php echo $category_box;?>
				</select>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Description</label>
			<div class="col-sm-10">
				<textarea class="form-control" name="description" placeholder="Description"><?php echo $item['description']; ?></textarea>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Active</label>
			<div class="col-sm-10">
				<input type ="checkbox" name="status" value="1" <?php echo ($item['status'] == 1)?"checked":""; ?>>
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-default" value="ok" name="submit">Send</button>
			</div>
		</div>
	</form>
</div>
		