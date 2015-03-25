<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/news.css">
<div class="bg-white">
	<h2 class="text-uppercase"><?php echo $item['title']?></h2>
	<hr>
	<a href="<?php echo base_url()?>" class="">Home</a> / <a href="<?php echo base_url().$page.'/list/'.$cat['type'].'/'. $cat['id']?>"><?php echo $cat['name']?></a>
	<hr>

	<div class="col-md-8 news-detail">
		<img class="img-responsive col-md-12" src="<?php echo base_url().'uploads/news/'.$item['image']?>">
		<div class="clearfix"></div>
		<p class="description"><i><?php echo $item['description']?></i></p>
		<ul class="nav nav-tabs">
	        <li class="active"><a href="#detail" data-toggle="tab"><?php if (($type==2)||($type==1)) { ?>Itinerary<?php }else{?>Detail<?php }?></a></li>
	        <?php if ($type!=0) { ?> <li><a href="#info" data-toggle="tab">Information</a></li><?php }?>
	        <?php if ($type==2) { ?> <li><a href="#booking" data-toggle="tab">Booking</a></li><?php }?>
      	</ul>
      	<div class="tab-content">
            <div class="tab-pane active" id="detail"><?php echo $item['detail']?></div>
            <?php if ($type!=0) { ?> 
            <div class="tab-pane" id="info"><?php echo $item['info']?></div>
            <?php }?>
            <?php if ($type==2) { ?> 
	            <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/bootstrap-datetimepicker.css">
				<script type="text/javascript" src="<? echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
				<script type="text/javascript">
					$(function () {
						$('#to').datetimepicker({
							pickTime: false,
						});
						$('#from').datetimepicker({
							pickTime: false,
						});

						$("#adult").keydown(function (e) {
					        checkInput(e);
				    	});
				    	$("#children").keydown(function (e) {
					        checkInput(e);
				    	});
				    	$("#phone").keydown(function (e) {
					        checkInput(e);
				    	});
				    	function checkInput(e){
							// Allow: backspace, delete, tab, escape, enter and .
					        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
					             // Allow: Ctrl+A
					            (e.keyCode == 65 && e.ctrlKey === true) || 
					             // Allow: home, end, left, right
					            (e.keyCode >= 35 && e.keyCode <= 39)) {
					                // alert("Input Number Only!");
					                return;
					        }
					        // Ensure that it is a number and stop the keypress
					        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
					            e.preventDefault();
					        }
				    	}
					});
				</script>
				<div class="tab-pane" id="booking" style="overflow:hidden">
            		<form class="form-horizontal col-sm-12" role="form" method="post" action="/booking">
						<!-- <h2 class="text-uppercase">Booking form</h2> -->
						<img class="col-sm-12" style="margin-bottom:10px;" src="<? echo base_url();?>images/booking.jpg">
						
						<div class="form-group col-sm-12">
							<label for="inputEmail3" class="col-sm-2 control-label">From</label>
							<div class="col-sm-4">
								<div class='input-group date' id='from'>
								  	<input type="text" class="form-control" id="" name="from" placeholder="From" data-date-format="DD/MM/YYYY" value="<?php echo set_value('from'); ?>">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
							<label for="inputEmail3" class="col-sm-2 control-label">To</label>
							<div class="col-sm-4">
								<div class='input-group date' id='to'>
								  	<input type="text" class="form-control" id="" name="to" placeholder="To" data-date-format="DD/MM/YYYY" value="<?php echo set_value('to'); ?>">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-12">
							<label for="inputEmail3" class="col-sm-2 control-label">Tour</label>
							<div class="col-sm-10">
							  	<input type="text" class="form-control" id="" name="tour" placeholder="Tour" value="<?php echo set_value('tour',$item['title']); ?>">
								<input type="hidden" class="form-control" id="" name="tour_id" value="<?php echo set_value('tour_id',$item['id']); ?>">
							</div>
							<!-- <label for="inputEmail3" class="col-sm-2 control-label">Departure</label>
							<div class="col-sm-4">
							  	<input type="text" class="form-control" id="" name="departure" placeholder="Departure" value="<?php echo set_value('departure'); ?>">
							</div>
							<label for="inputEmail3" class="col-sm-2 control-label">Destination</label>
							<div class="col-sm-4">
							  	<input type="text" class="form-control" id="" name="destination" placeholder="Destination" value="<?php echo set_value('destination'); ?>">
							</div> -->
						</div>
						<div class="form-group col-sm-12">
							<label for="inputEmail3" class="col-sm-2 control-label">Guests</label>
							<div class="col-sm-2">
							  	<input type="text" class="form-control" id="adult" name="adult" placeholder="Adult" value="<?php echo set_value('adult'); ?>">
							</div>
							<div class="col-sm-2">
							  	<input type="text" class="form-control" id="children" name="children" placeholder="Children" value="<?php echo set_value('children'); ?>">
							</div>
						</div>
						<div class="form-group col-sm-12">
							<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
							  	<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
							</div>
						</div>
						<div class="form-group col-sm-12">
							<label for="inputEmail3" class="col-sm-2 control-label">Phone</label>
							<div class="col-sm-10">
							  	<input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo set_value('phone'); ?>">
							</div>
						</div>
						<div class="form-group col-sm-12">
							<label for="inputEmail3" class="col-sm-2 control-label">Content</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="content" placeholder="Content"><?php echo set_value('content'); ?></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							  <button type="submit" class="btn btn-default">Send</button>
							</div>
						</div>
					</form>
            	</div>
            <?php }?>
       	</div>
		<hr>
		<span class="glyphicon glyphicon-tags"></span> <?php echo $item['tag']?> 
		<!-- <span class="glyphicon glyphicon-pencil"></span><?php echo date("d/m/Y",$item['created'])?> --> 
		<hr>
		<ul>
		<?php if (count($other_news)>0) {
			foreach ($other_news as $key => $value) {?>
				<li><a href="<?php echo base_url().'news/detail/'.$value['id']?>"> <?php echo $value['title']?></a></li>
				
		<?php	}
		}?>
		</ul>
	</div>
	<div class="col-md-4">
		<?php echo $template['partials']['right']; ?>
	</div>
	<div class="clearfix"></div>
</div>