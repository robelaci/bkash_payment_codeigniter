<div class="row gy-4">

    <div class="col-lg-8 col-md-12" data-aos="fade-up" data-aos-delay="300">
        <div class="portfolio-info">
            <h3>Billing Details</h3>

        </div>
        <?php       

        foreach ($result as $row) {
            $product_slug = $row['product_slug'];
            $product_price = $row['product_price'];
        ?>

            <form action="<?php echo base_url().'bkashpayment'?>" method="post" role="form" class="php-email-form">
                <input type="hidden" name="amount" value="<?php echo $product_price ?>">
                <input type="hidden" name="product_slug" value="<?php echo $product_slug ?>">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="View Seivices Message" required></textarea>
                </div>
                

                <div class="form-group">
                    <input type="submit" class="btn btn-danger" name="submit" id="submit" value="<?php echo $product_price; ?> TK Pay With bKash ">
                </div>

            </form>

        <?php

        }

        ?>
    </div>

    <div class="col-lg-4" style="border: 1px solid #ddd;padding: 20px;">
        <div class="portfolio-info">
            <h3>Your Order</h3>

        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>Software Development × 1</td>
                    <td><?php echo $product_price; ?> tk</td>
                </tr>
                <tr>

                    <td>Subtotal</td>
                    <td><?php echo $product_price; ?> tk</td>
                </tr>
                <tr>

                    <td>Total</td>
                    <td><?php echo $product_price; ?> tk</td>
                </tr>
            </tbody>
        </table>

    </div>

</div>
