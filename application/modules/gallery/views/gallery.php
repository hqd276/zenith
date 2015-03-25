<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/gallery.css">
<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/ekko-lightbox/ekko-lightbox.css">

<style type="text/css">
    .ekko-lightbox .modal-dialog {
    	width: 70% !important;
    }
</style>

<div class=" bg-white">
	<h2 class="text-uppercase">Gallery</h2>
	<hr>
	<a href="<?php echo base_url()?>" class="">Home</a> / <a href="<?php echo base_url().'gallery'?>">Gallery</a>
	<hr>

	<div class="row col-md-12 gallery">
		<?php foreach ($list_items as $key => $value) {?>
	    	<a href="<?php echo base_url("uploads/gallery/".$value['image']); ?>" data-toggle="lightbox" data-gallery="multiimages" data-title="<?php echo $value['title'] ?>" class="col-xs-6 col-md-3">
                <img src="<?php echo base_url("uploads/gallery/".$value['image']); ?>" class="img-responsive">
            </a>
	      	<!-- <div class="caption text-center">
		        <h4><?php echo $value['title'] ?></h4>
	      	</div> -->
		<?php }
		?>
	</div>
	<div class="clearfix"></div>
</div>

<script src="<? echo base_url();?>assets/css/ekko-lightbox/ekko-lightbox.js"></script>

<script type="text/javascript">
    $(document).ready(function ($) {
        // delegate calls to data-toggle="lightbox"
        $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                onShown: function() {
                    if (window.console) {
                        return console.log('Checking our the events huh?');
                    }
                },
                onNavigate: function(direction, itemIndex) {
                    if (window.console) {
                        return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                    }
                }
            });
        });

        //Programatically call
        $('#open-image').click(function (e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });
        $('#open-youtube').click(function (e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });

        // navigateTo
        $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                onShown: function() {

                    var a = this.modal_content.find('.modal-footer a');
                    if(a.length > 0) {

                        a.click(function(e) {

                            e.preventDefault();
                            this.navigateTo(2);

                        }.bind(this));

                    }

                }
            });
        });


    });
</script>