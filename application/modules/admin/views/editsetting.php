<script type="text/javascript" src="<?php echo base_url();?>assets/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "#detail",
    height:"300",
    style_formats: [
        {title: 'Open Sans', inline: 'span', styles: { 'font-family':'Open Sans'}},
        {title: 'Arial', inline: 'span', styles: { 'font-family':'arial'}},
        {title: 'Book Antiqua', inline: 'span', styles: { 'font-family':'book antiqua'}},
        {title: 'Comic Sans MS', inline: 'span', styles: { 'font-family':'comic sans ms,sans-serif'}},
        {title: 'Courier New', inline: 'span', styles: { 'font-family':'courier new,courier'}},
        {title: 'Georgia', inline: 'span', styles: { 'font-family':'georgia,palatino'}},
        {title: 'Helvetica', inline: 'span', styles: { 'font-family':'helvetica'}},
        {title: 'Impact', inline: 'span', styles: { 'font-family':'impact,chicago'}},
        {title: 'Symbol', inline: 'span', styles: { 'font-family':'symbol'}},
        {title: 'Tahoma', inline: 'span', styles: { 'font-family':'tahoma'}},
        {title: 'Terminal', inline: 'span', styles: { 'font-family':'terminal,monaco'}},
        {title: 'Times New Roman', inline: 'span', styles: { 'font-family':'times new roman,times'}},
        {title: 'Verdana', inline: 'span', styles: { 'font-family':'Verdana'}}
    ],
});
</script>

<div class="contact-form col-sm-12 bg-white">
	<h2 class="text-uppercase"><?php echo $title?></h2>
	<a href="/setting" class="btn btn-default pull-right"> List Setting </a>

	<form class="form-horizontal col-md-12" role="form" method="post" enctype="multipart/form-data" action="">
		<div class="form-group">
			<div>
				<span class="success">
					<?php 
					if(isset($b_Check))
						if ($b_Check){
							echo "<div class='alert alert-success' role='alert'>Add Success</div>";
						}else{
							echo "<div class='alert alert-danger' role='alert'>Add Fail</div>";
						}
					?>
				</span>
				<?php if(form_error('name')!='') echo '<label class="control-label alert alert-warning" for="inputError1">'.form_error('name').'</label>'; ?>
				<?php if(isset($upload_mess)) echo '<label class="control-label alert alert-warning" for="inputError1">'.$upload_mess.'</label>'; ?>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Setting</label>
			<label for="inputEmail3" class="col-sm-10 control-label text-left"><?php echo $item['key']; ?></label>
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
					echo "<img class='img_item' style='height:150px;' src='".base_url("uploads/settings/".$item['image'])."'/>";
				}
				?>
			  	<input type="file" class="form-control" id="inputEmail3" name="image" placeholder="Image">
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Description</label>
			<div class="col-sm-10">
				<textarea class="form-control" name="description" placeholder="Description"><?php echo $item['description']; ?></textarea>
			</div>
		</div>
		<?php if ($item['key']=='about') {?>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Detail</label>
			<div class="col-sm-10">
				<textarea class="form-control" id="detail" name="detail" placeholder="Detail"><?php echo $item['detail']; ?></textarea>
			</div>
		</div>
		<?php }?>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-default" value="ok" name="submit">Send</button>
			</div>
		</div>
	</form>
</div>
		