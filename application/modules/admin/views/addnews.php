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
	<a href="/list-news/<?php echo $type;?>" class="btn btn-default pull-right"> List News </a>

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
			<label for="inputEmail3" class="col-sm-2 control-label">Title</label>
			<div class="col-sm-10">
			  	<input type="" class="form-control" id="inputEmail3" name="title" placeholder="Title" value="<?php echo $item['title']; ?>">
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Image</label>
			<div class="col-sm-10">
				<?php 
				if ($item['image']!='') {
					echo "<img class='img_item' style='height:150px;' src='".base_url("uploads/news/".$item['image'])."'/>";
				}
				?>
			  	<input type="file" class="form-control" id="inputEmail3" name="image" placeholder="Image">
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Category</label>
			<div class="col-sm-10">
				<select class='form-control' name='category_id'>
					<option value='-1' <?php echo ($item['category_id'] == -1)?'selected':''?> >- Root -</option>
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
			<label for="inputEmail3" class="col-sm-2 control-label">Detail</label>
			<div class="col-sm-10">
				<textarea class="form-control" id="detail" name="detail" placeholder="Detail"><?php echo $item['detail']; ?></textarea>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Tag</label>
			<div class="col-sm-10">
			  	<input type="" class="form-control" id="inputEmail3" name="tag" placeholder="Tag" value="<?php echo $item['tag']; ?>">
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Order</label>
			<div class="col-sm-10">
			  	<input type="" class="form-control" id="inputEmail3" name="order" placeholder="Order" value="<?php echo $item['order']; ?>">
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Hot News</label>
			<div class="col-sm-10">
				<input type ="checkbox" name="hot_news" value="1" <?php echo ($item['hot_news'] == 1)?"checked":""; ?>>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Home News</label>
			<div class="col-sm-10">
				<input type ="checkbox" name="home_news" value="1" <?php echo ($item['home_news'] == 1)?"checked":""; ?>>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Publish</label>
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
		