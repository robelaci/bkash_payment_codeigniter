<div class="block-header">
	<div class="row">
		<div class="col-lg-7 col-md-6 col-sm-12">
			<h2><?php echo isset($title) ? $title : 'Title'; ?></h2>
		</div>
	</div>
</div>

<div class="container-fluid">
	<!-- Input -->
	<div class="row">
		<form action="">
			<input type="text" name="test" class="form-control">
			<input type="submit" value="OKKK">
		</form>
	</div>
	<div class="row clearfix">
		<div class="col-lg-12 col-md-12 col-sm-12">

			<div class="card">
				<div class="body">
					<form class="form-horizontal" action="<?php echo base_url() . $action; ?>" method="post">
						<div class="row clearfix">
							<div class="col-lg-6">
								<div class="row form-group">
									<div class="col-lg-4 col-md-2 col-sm-12 form-control-label">
										<label for="category_name">Category Name</label>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-12">
										<div class="form-group">
											<input type="text" id="category_name" name="category_name" class="form-control" placeholder="Enter Category Name">
										</div>
									</div>

								</div>

								<div class="row form-group">
									<div class="col-lg-4 col-md-2 col-sm-12 form-control-label">
										<label for="category_description">Category Details</label>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-12">
										<div class="form-group">
											<textarea rows="4" id="category_description" name="category_description" class="form-control" placeholder="Please type what you want..."></textarea>

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
											<input type="file" id="category_image" name="category_image" class="dropify">

										</div>
									</div>
								</div>

							</div>
						</div>

						<div class="row clearfix">

							<div class="col-sm-8 offset-sm-2">
								<input type="submit" value="submit" class="btn btn-success">
								<button type="submit" class="btn btn-primary btn-round">Submit</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

