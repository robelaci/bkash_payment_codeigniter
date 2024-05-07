<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/preview/unify-v1.6-production/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Dec 2014 15:29:47 GMT -->
<head>
	<?php echo isset($head) ? $head : ''; ?>
	
</head>	

<body class="theme-blush">

	<?php echo isset($header) ? $header : ''; ?>

	<section class="content">
    <div class="body_scroll">
		<div class="block-header">
			<div class="row">
				<div class="col-lg-7 col-md-6 col-sm-12">
					<h2><?php echo isset($title) ? $title : 'Title'; ?></h2>
					<button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
				</div>
			</div>
		</div>
		<?php echo isset($content) ? $content : ''; ?>     

    </div>
	</section>
           
      
    <?php echo isset($footer) ? $footer : ''; ?>

</body>

</html>
