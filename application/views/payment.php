<body class="bodypayment">
    <?php var_dump($course) ?>
    <?php echo $this->session->userdata('user_id');?>
    <div class="col-md-4 container bg-default">
        <form class="rounded" action="<?php echo site_url('payment/doPayment/' . $this->session->userdata('user_id')) ?>" method="POST">
            <input type="hidden" name="course_id" value="<?php echo $course->course_id ?>">
            <div class="row">
                <div class="col">
                    <h4 class="md-4 text-light " style="margin-top:10px;">
                        <a href="<?php echo site_url('home/subjek')?>" id="icon" class="ic fa fa-arrow-left" style = "color:white;"></a>
                    </h4>
                </div>
                <div class="col">
                    <h4 class="md-4 text-light text-left" style="margin-top:10px;margin-left:-100px;">
                        Payment Form
                    </h4>
                </div>

            </div>
            <div class="form-group text-light">
                <label for="postcode">Course</label>
                <input type="text" class="form-control" id="postcode" value="<?php echo $course->course_name ?>" readonly required>
                <div class="invalid-feedback">
                    Postcode required.
                </div>
            </div>

            <hr>

            <hr>

            <h4 class="mb-4 text-light">Payment</h4>

            <div class="form-check text-light">
                <input type="radio" class="form-check-input" id="credit" name="payment-method" checked required>
                <label for="credit" class="form-check-label">Credit Card</label>
            </div>

            <div class="form-check text-light">
                <input type="radio" class="form-check-input" id="debit" name="payment-method" required>
                <label for="debit" class="form-check-label">Debit Card</label>
            </div>

            <div class="form-check text-light">
                <input type="radio" class="form-check-input" id="paypal" name="payment-method" required>
                <label for="paypal" class="form-check-label">PayPal</label>
            </div>

            <div class="row mt-4 text-light">
                <div class="col-md-6 form-group">
                    <label for="card-name">Name on card</label>
                    <input type="text" class="form-control" id="card-name" placeholder required>
                    <div class="invalid-feedback">
                        Name on card is required
                    </div>
                </div>

                <div class="col-md-6 form-group">
                    <label for="card-no">Card Number</label>
                    <input type="text" class="form-control" id="card-no" placeholder required>
                    <div class="invalid-feedback">
                        Credit card number is required
                    </div>
                </div>
            </div>

            <div class="form-row text-light">
                <div class="col-md-5 form-group">
                    <label for="expiration">Expire Date</label>
                    <input type="text" class="form-control" id="card-name" placeholder required>
                    <div class="invalid-feedback">
                        Expiration date required
                    </div>
                </div>
                <div class="col-md-5 form-group">
                    <label for="ccv-no">Security Number</label>
                    <input type="text" class="form-control" id="sec-no" placeholder required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
            </div>

            <hr class="mb-4">

            <button class="btn btn-warning bt-lg btn-block" type="submit" style ="background-color:#fec810;">Continue to Checkout</button>
        </form>
    </div>
</body>