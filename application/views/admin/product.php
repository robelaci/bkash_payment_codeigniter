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
				<div class="body">
					<?php echo getFlashMsg();?>
					<form class="form-horizontal" action="<?php echo base_url() . $action; ?>" method="post" enctype="multipart/form-data">
						<input type="hidden" name="product_id" value="<?php echo !empty($specific_item) ? $specific_item['product_id']: ''?>">
						<div class="row clearfix">
							<div class="col-lg-6">
								<div class="row form-group">
									<div class="col-lg-4 col-md-2 col-sm-12 form-control-label">
										<label for="product_name">Product Name</label>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-12">
										<div class="form-group">
											<input type="text" id="product_name" name="product_name"
												value="<?php echo !empty($specific_item) ? $specific_item['category_name']: ''?>"
											 class="form-control" placeholder="Enter Product Name">
										</div>
									</div>

								</div>
								<div class="row form-group">
									<div class="col-lg-4 col-md-2 col-sm-12 form-control-label">
										<label for="product_price">Product Price</label>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-12">
										<div class="form-group">
											<input type="number" id="product_price" name="product_price"
												value="<?php echo !empty($specific_item) ? $specific_item['product_price']: ''?>"
											 class="form-control" placeholder="Enter Product Price">
										</div>
									</div>

								</div>
								<div class="row form-group">
									<div class="col-lg-4 col-md-2 col-sm-12 form-control-label">
										<label for="product_price">Product Category</label>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-12">
										<div class="form-group">
											<select id="category_id" name="category_id" class="form-control">
												<option value="">-- select--</option>
												<?php foreach($categories as $item) {
													?>
													<option value="<?php echo $item['product_category_id']?>"
														<?php echo ( isset($specific_item) && !empty($specific_item) && $specific_item['category_id'] == $item['product_category_id'])? 'selected' : ''?>
														 ><?php echo $item['category_name']?></option>
													<?php
												}?>
											</select>
											
										</div>
									</div>

								</div>

								<div class="row form-group">
									<div class="col-lg-4 col-md-2 col-sm-12 form-control-label">
										<label for="product_desription">Product Details</label>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-12">
										<div class="form-group">
											<textarea rows="4" id="product_desription" name="product_desription" class="form-control" placeholder="Please type what you want..."><?php echo !empty($specific_item) ? $specific_item['category_description']: ''?></textarea>

										</div>
									</div>

								</div>

							</div>
							<div class="col-lg-6">
								<div class="row form-group">
									<div class="col-lg-4 col-md-2 col-sm-12 form-control-label">
										<label for="product_image">Product Image</label>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-12">
										<div class="form-group">
											<?php $specificImage = !empty($specific_item) ? base_url().'../assets/img/service/all/'. $specific_item['product_image'] : ''?>
											<input type="file" id="product_image" name="product_image" class="dropify"
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

	
</div>

