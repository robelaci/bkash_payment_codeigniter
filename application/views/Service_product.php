<div class="row">
	<?php

	foreach ($result as $row) {
	?>

	<div class="col-md-3 col-sm-6">
		<div class="product-grid">
			<div class="product-image">
				<a href="<?php echo base_url() . 'category-details?cat=' . $row['product_category_id'] ?>" class="image">
					<img class="pic-1" src="<?php echo base_url() . '../' ?>assets/img/service/all/<?php echo $row['category_image'] ?>">
					<img class="pic-2" src="<?php echo base_url() . '../' ?>assets/img/service/all/<?php echo $row['category_image'] ?>">
				</a>
				<ul class="product-links">
					<li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
					<li><a href="#"><i class="fas fa-search"></i></a></li>
					<li><a href="#"><i class="fas fa-random"></i></a></li>
				</ul>
			</div>
			<h3 class="title"><a href="<?php echo base_url() . 'category-details?cat=' . $row['product_category_id'] ?>"><?php echo $row['category_name'] ?></a></h3>
			<div class="product-content">
				<ul class="rating">
					<li class="fas fa-star"></li>
					<li class="fas fa-star"></li>
					<li class="fas fa-star"></li>
					<li class="far fa-star"></li>
					<li class="far fa-star"></li>
				</ul>

				<a href="<?php echo base_url() . 'category-details?cat=' . $row['product_category_id'] ?>" class="add-to-cart" data-hover="View Seivices">View Seivices</a>
			</div>
		</div>
	</div>

	<?php

	}

	?>

</div>
