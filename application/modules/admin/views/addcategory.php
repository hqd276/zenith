<div class="contact-form col-sm-12 bg-white">
	<h2 class="text-uppercase"><?php echo $title?></h2>
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
			  	<input type="" class="form-control" id="inputEmail3" name="name" placeholder="Name" value="<?php echo set_value('name'); ?>">
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Image</label>
			<div class="col-sm-10">
			  	<input type="file" class="form-control" id="inputEmail3" name="image" placeholder="Image">
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Parent</label>
			<div class="col-sm-10">
				<select class="form-control" name="parent">
					<option value='-1' <?php echo set_select('parent', -1); ?>>- Root -</option>
					<?php
					foreach ($category as $key => $value) {
						if ($value["parent"]==-1){?>
						<option value='<?php echo $value['id'];?>' <?php echo set_select('parent', $value['id']); ?>><?php echo $value['name'];?></option>
					<?php }
					}	
					?>
				</select>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Description</label>
			<div class="col-sm-10">
				<textarea class="form-control" name="description" placeholder="Description"><?php echo set_value('description'); ?></textarea>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Active</label>
			<div class="col-sm-10">
				<input type ="checkbox" name="status" value="1" <?php echo set_checkbox('status',1,true); ?>>
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-default">Send</button>
			</div>
		</div>
	</form>
</div>
		