<div class="row">

	<?php
	foreach ($result as $row) {
		// echo '<pre>',print_r($row['product_name']);die();
	?>
		<div class="col-md-3 col-sm-6">
			<div class="product-grid">
				<div class="product-image">
					<a href="<?php echo base_url().'product-details?slug='.$row['product_slug'] ?>" class="image">
						<img class="pic-1" src="<?php echo base_url().'../'?>assets/img/service/all/subservice/<?php echo $row['product_image']; ?>">
						<img class="pic-2" src="<?php echo base_url().'../'?>assets/img/service/all/subservice/<?php echo $row['product_image']; ?>">
					</a>
					<ul class="product-links">
						<li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
						<li><a href="#"><i class="fas fa-search"></i></a></li>
						<li><a href="#"><i class="fas fa-random"></i></a></li>
					</ul>
				</div>
				<div class="product-content">
					<h3 class="title"><a href="<?php echo base_url().'product-details?slug='.$row['product_slug'] ?>"><?php echo $row['product_name']; ?></a></h3>
					<p class="">Price: <b> <?php echo $row['product_price']; ?></b></p>
					<ul class="rating">
						<li class="fas fa-star"></li>
						<li class="fas fa-star"></li>
						<li class="fas fa-star"></li>
						<li class="far fa-star"></li>
						<li class="far fa-star"></li>
					</ul>

					<a href="<?php echo base_url().'checkout?slug='.$row['product_slug'] ?>" class="add-to-cart" data-hover="Proceed To Buy">Proceed To Buy</a>
				</div>
			</div>
		</div>
	<?php

	}

	?>

</div>
