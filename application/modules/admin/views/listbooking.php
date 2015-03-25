<div class="contact-form col-sm-12 bg-white">
	<h2 class="text-uppercase">List booking</h2>
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
					<a href="#" onclick="confirmClick('<?php echo base_url('/admin/booking/delete/'.$item->id)?>')" class="btn btn-default"> Delete </a>
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#viewBooking" 
							data-email="<?php echo $item->email?>" 
							data-phone="<?php echo $item->phone?>"
							data-content="<?php echo $item->content?>"
							data-from="<?php echo $item->from?>"
							data-to="<?php echo $item->to?>"
							data-tour="<?php echo $item->tour?>"
							data-departure="<?php echo $item->departure?>"
							data-destination="<?php echo $item->destination?>"
							data-adult="<?php echo $item->adult?>"
							data-children="<?php echo $item->children?>"
							>View</button>
				</td>
			</tr>
			
		<?php }?>
		</tbody>
	</table>
	<nav>
	  	<ul class="pager">
		    <li class="previous <?php if ($prev <1) echo 'disabled';?>"><a href="<?php if ($prev >=1) echo  base_url().'admin/booking/'. $prev ?>"><span aria-hidden="true">&larr;</span> Older</a></li>
		    <li class="next <?php if ($next == 0) echo 'disabled';?>"><a href="<?php if ($next <> 0) echo base_url().'admin/booking/'. $next ?>">Newer <span aria-hidden="true">&rarr;</span></a></li>
	  	</ul>
	</nav>
</div>

<div class="modal fade" id="viewBooking" tabindex="-1" role="dialog" aria-labelledby="viewBookingLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="viewBookingLabel">Booking Info</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label class=" from-to"></label>
          </div>
          <div class="form-group">
            <label class=" tour"></label>
          </div>
          <div class="form-group">
            <label class=" departure"></label>
          </div>
          <div class="form-group">
            <label class=" destination"></label>
          </div>
          <div class="form-group">
            <label class=" adult-children"></label>
          </div>
          <div class="form-group">
            <label class=" email"></label>
          </div>
          <div class="form-group">
            <label class=" phone"></label>
          </div>
          <div class="form-group">
            <label class=" content"></label>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Reply</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	$('#viewBooking').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var recipient = button.data('whatever') // Extract info from data-* attributes
	  var from = button.data('from')
	  var to = button.data('to')
	  var tour = button.data('tour')
	  var departure = button.data('departure')
	  var destination = button.data('destination')
	  var adult = button.data('adult')
	  var children = button.data('children')
	  var email = button.data('email')
	  var phone = button.data('phone')
	  var content = button.data('content')

	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  var modal = $(this)
	  // modal.find('.modal-title').text('New message to ' + recipient)
	  modal.find('.from-to').html("From: '" + from + "' To: '" + to + "'")
	  modal.find('.tour').html("Tour: " + tour)
	  modal.find('.departure').html("Departure: " + departure)
	  modal.find('.destination').html("Destination: " + destination)
	  modal.find('.adult-children').html("Adult: " + adult + " . Children: " + children + "")
	  modal.find('.email').html("Email: " + email)
	  modal.find('.phone').html("Phone: " + phone)
	  modal.find('.content').html("Content:<br> " + content)
	})
</script>
		
