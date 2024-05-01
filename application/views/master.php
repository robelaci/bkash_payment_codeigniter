<?php
include('common.php');
include('db_connect.php');  
?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<!-- Mirrored from htmlstream.com/preview/unify-v1.6-production/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Dec 2014 15:29:47 GMT -->
<head>
	<?php echo isset($head) ? $head : ''; ?>
	
</head>	

<body>

	<?php echo isset($header) ? $header : ''; ?>

    <div class="container"> 
		<?php echo isset($content) ? $content : ''; ?>     

    </div>
           
      
    <?php echo isset($footer) ? $footer : ''; ?>

</body>

</html>
