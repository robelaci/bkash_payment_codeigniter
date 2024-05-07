
<div class="container-fluid">	
	<div class="row clearfix">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="card">
				<div class="body">
					<?php echo getFlashMsg();?>
					<form class="form-horizontal" action="<?php echo base_url() . $action; ?>" method="post" enctype="multipart/form-data">
						<input type="hidden" name="product_category_id" value="<?php echo !empty($specific_item) ? $specific_item['product_category_id']: ''?>">
						<div class="row clearfix">
							<div class="col-lg-6">
								<div class="row form-group">
									<div class="col-lg-4 col-md-2 col-sm-12 form-control-label">
										<label for="category_name">Category Name</label>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-12">
										<div class="form-group">
											<input type="text" id="category_name" name="category_name"
												value="<?php echo !empty($specific_item) ? $specific_item['category_name']: ''?>"
											 class="form-control" placeholder="Enter Category Name">
										</div>
									</div>

								</div>

								<div class="row form-group">
									<div class="col-lg-4 col-md-2 col-sm-12 form-control-label">
										<label for="category_description">Category Details</label>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-12">
										<div class="form-group">
											<textarea rows="4" id="category_description" name="category_description" class="form-control" placeholder="Please type what you want..."><?php echo !empty($specific_item) ? $specific_item['category_description']: ''?></textarea>

										</div>
									</div>

								</div>

							</div>
							<div class="col-lg-6">
								<div class="row form-group">
									<div class="col-lg-4 col-md-2 col-sm-12 form-control-label">
										<label for="category_image">Category Image</label>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-12">
										<div class="form-group">
											<?php $specificImage = !empty($specific_item) ? base_url().'../assets/img/service/all/'. $specific_item['category_image'] : ''?>
											<input type="file" id="category_image" name="category_image" class="dropify"
												data-default-file="<?php echo $specificImage;?>">

										</div>
									</div>
								</div>

							</div>
						</div>

						<div class="row clearfix">

							<div class="col-sm-8 offset-sm-2">							
								<button type="submit" class="btn btn-primary btn-round">Submit</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>

	<div class="row clearfix">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="card">	
				<div class="header">
				<h2><strong>Category List</strong></h2>
				</div>			
				<div class="body">
					
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Edit</th>
									<th>Category Name</th>
									<th>Category Details</th>
									<th>Image</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($items as $key=>$item){
								?>
								<tr>
									<th scope="row"><?php echo $key+1;?></th>
									<td><a href="<?php echo base_url().'admin/category/'. $item['product_category_id'];?>"  class="btn btn-sm btn-info">Edit</a></td>
									<td><?php echo $item['category_name'];?></td>
									<td><?php echo $item['category_description'];?></td>
									<td><img src="<?php echo base_url().'../assets/img/service/all/'. $item['category_image'];?>" alt="category image" height="50px" width="auto"></td>
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

