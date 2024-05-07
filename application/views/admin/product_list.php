<div class="block-header">
	<div class="row">
		<div class="col-lg-7 col-md-6 col-sm-12">
			<h2><?php echo isset($title) ? $title : 'Title'; ?></h2>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row clearfix">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="card">	
				<div class="header">
				<h2><strong>Product List</strong></h2>
				</div>			
				<div class="body">
					
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Edit</th>
									<th>Product Name</th>
									<th>Price</th>
									<th>Category</th>
									<th>Product Details</th>
									<th>Image</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($items as $key=>$item){
								?>
								<tr>
									<th scope="row"><?php echo $key+1;?></th>
									<td><a href="<?php echo base_url().'admin/product/'. $item['product_id'];?>"  class="btn btn-sm btn-info">Edit</a></td>
									<td><?php echo $item['product_name'];?></td>
									<td><?php echo $item['product_price'];?></td>
									<td><?php echo $item['category_name'];?></td>
									<td><?php echo $item['product_description'];?></td>
									<td><img src="<?php echo base_url().'../assets/img/service/all/subservice/'. $item['product_image'];?>" alt="category image" height="50px" width="auto"></td>
								</tr>
								<?php
								}
								?>
								
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

