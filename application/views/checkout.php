<!-- Heading -->
<h2 class="my-5 h2 text-center">Checkout</h2>

<!--Grid row-->
<div class="row">

	<!--Grid column-->
	<div class="col-md-8 mb-4">

		<!--Card-->
		<div class="card">
			<!--Card content-->
			<form action="<?php echo base_url() . 'bkashpayment' ?>" method="post" class="card-body">
				<?php

				$product_slug = $result['product_slug'];
				$product_price = $result['product_price'];
				?>

				<input type="hidden" name="amount" value="<?php echo $product_price ?>">
				<input type="hidden" name="product_slug" value="<?php echo $product_slug ?>">
				<!--Grid row-->
				<div class="row">
					<div class="col-md-6 mb-2">
						<div class="md-form">
							<input type="text" name="firstName" id="firstName" class="form-control">
							<label for="firstName" class="">Fast Name</label>
						</div>
					</div>

					<div class="col-md-6 mb-2">
						<div class="md-form">
							<input type="text" name="lastName" id="lastName" class="form-control">
							<label for="lastName" class="">Last Name</label>
						</div>
					</div>

				</div>
				<!--Grid row-->


				<!--email-->
				<div class="col-md-12 mb-2">
					<div class="md-form mb-5">
						<input type="text" class="form-control" name="phone" id="phone" placeholder="01xxxxxxxxx" required>
						<label for="phone" class="">Phone</label>
					</div>
				</div>
				<div class="col-md-12 mb-2">
					<div class="md-form mb-5">
						<input type="text" name="email" id="email" class="form-control" placeholder="youremail@example.com">
						<label for="email" class="">Email (optional)</label>
					</div>
				</div>
				<!--address-->
				<div class="col-md-12 mb-2">
					<div class="md-form mb-5">
						<input type="text" name="address" id="address" class="form-control" placeholder="Dhaka .....">
						<label for="address" class="">Address</label>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 col-md-12 mb-4">
						<label for="country">Country</label>
						<select name="country" class="custom-select d-block w-100" id="country" required>
							<option value="Bangladesh">Bangladesh</option>
						</select>
						<div class="invalid-feedback">
							Please select a valid country.
						</div>
					</div>
					<!-- <div class="col-lg-4 col-md-6 mb-4">
						<label for="state">State</label>
						<select class="custom-select d-block w-100" id="state" required>
							<option value="">Choose...</option>
							<option>California</option>
						</select>
						<div class="invalid-feedback">
							Please provide a valid state.
						</div>
					</div> -->

					<!-- <div class="col-lg-4 col-md-6 mb-4">
						<label for="zip">Zip</label>
						<input type="text" class="form-control" id="zip" placeholder="" required>
						<div class="invalid-feedback">
							Zip code required.
						</div>
					</div> -->

				</div>
				<!--Grid row-->

				<hr>
				<!-- <div class="col-md-12 mb-2">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="same-address">
							<label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="save-info">
							<label class="custom-control-label" for="save-info">Save this information for next time</label>
						</div>

						<hr>

						<div class="d-block my-3">
							<div class="custom-control custom-radio">
								<input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
								<label class="custom-control-label" for="credit">Credit card</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
								<label class="custom-control-label" for="debit">Debit card</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
								<label class="custom-control-label" for="paypal">Paypal</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="cc-name">Name on card</label>
								<input type="text" class="form-control" id="cc-name" placeholder="" required>
								<small class="text-muted">Full name as displayed on card</small>
								<div class="invalid-feedback">
									Name on card is required
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="cc-number">Credit card number</label>
								<input type="text" class="form-control" id="cc-number" placeholder="" required>
								<div class="invalid-feedback">
									Credit card number is required
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5 mb-3">
								<label for="cc-expiration">Expiration</label>
								<input type="text" class="form-control" id="cc-expiration" placeholder="" required>
								<div class="invalid-feedback">
									Expiration date required
								</div>
							</div>
							<div class="col-md-5 mb-3">
								<label for="cc-expiration">CVV</label>
								<input type="text" class="form-control" id="cc-cvv" placeholder="" required>
								<div class="invalid-feedback">
									Security code required
								</div>
							</div>
						</div>
					</div> -->

				<div class="col-md-12 mb-2">
					<hr class="mb-4">
					<button class="btn btn-primary btn-lg btn-block checkoutcolor" type="submit"><?php echo $product_price; ?> TK Pay With bKash </button>
				</div>
			</form>

		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->


	<div class="col-md-4 mb-4">

		<!-- Heading -->
		<h4 class="d-flex justify-content-between align-items-center mb-3">
			<span class="text-muted">Your cart</span>
			<span class="badge badge-secondary badge-pill">1</span>
		</h4>

		<!-- Cart -->
		<ul class="list-group mb-3 z-depth-1">

			<li class="list-group-item d-flex justify-content-between lh-condensed">
				<div class="row">
					<div class="col-md-8">
						<div>
							<h6 class="my-0">Product name</h6>
							<small class="text-muted">Brief description</small>
							<p class="text-muted">Total Price: <?php echo $product_price; ?> TK</p>
						</div>
					</div>

					<div class="col-md-4">
						<div>
							<img src="<?php echo base_url() . '../' ?>assets/img/service/graphics-design.png" alt="img" style="height: 61px;width: 60px;">
						</div>
					</div>

				</div>
			</li>

		</ul>




	</div>
	<!--Grid column-->


</div>
<!--Grid row-->
