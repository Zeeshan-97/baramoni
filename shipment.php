<!-- Head Include Here -->
<?php include 'inc/app.php';?>
<!-- Head Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/stepform.css">
<!-- Stylesheet -->

<!-- Step Form Start Here -->

<!-- Step Form End Here -->

<section class="checkout_page_sec">
    <div class="container">
        <div id="stepper1" class="bs-stepper">
            <div class="bs-stepper-header" role="tablist">
                <div class="step" data-target="#test-l-1">
                    <button type="button" class="btn btn-link step-trigger" role="tab" id="stepper1trigger1"
                        aria-controls="test-l-1">
                        <span class="bs-stepper-circle">01</span>
                        <!-- <span class="bs-stepper-label">Email</span> -->
                    </button>
                </div>
                <div class="line"></div>
                <div class="step" data-target="#test-l-2">
                    <button type="button" class="btn btn-link step-trigger" role="tab" id="stepper1trigger2"
                        aria-controls="test-l-2">
                        <span class="bs-stepper-circle">02</span>
                        <!-- <span class="bs-stepper-label">Password</span> -->
                    </button>
                </div>
                <div class="line"></div>
                <div class="step" data-target="#test-l-3">
                    <button type="button" class="btn btn-link step-trigger" role="tab" id="stepper1trigger3"
                        aria-controls="test-l-3">
                        <span class="bs-stepper-circle">03</span>
                        <!-- <span class="bs-stepper-label">Validate</span> -->
                    </button>
                </div>
            </div>
            <div class="bs-stepper-content">
                <form novalidate>
                    <div id="test-l-1" role="tabpanel" class="content" aria-labelledby="stepper1trigger1">
                        <h2 class="font-40 fw-600 text-center pb-5">Shipment Address</h2>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="addressDetail">
                                    <div class="head">
                                        <h4 class="font-20 fw-600">Enter Your Address Details</h4>
                                    </div>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="tel" class="form-control" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select class="region">
                                                        <option>Select a Region</option>
                                                        <option>California</option>
                                                        <option>Manchester</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Postal code" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Town City" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea placeholder="Enter Your Address"
                                                        class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <ul class="list-inline">
                                    <li><button type="button" class="default-btn next-step">Continue to next
                                            step</button></li>
                                </ul> -->
                                        <button type="button" class="btn btn-primary" onclick="stepper1.next()">Continue
                                            to Next Step</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="OrderSummary">
                                    <div class="headingg">
                                        <h3 class="font-25 pb-3">Order Summary</h3>
                                    </div>
                                    <div class="order_info">
                                        <div class="itemTotal order-flex">
                                            <div class="property">
                                                <h5 class="fw-500" style="font-size:17px;">Item Total:</h5>
                                            </div>
                                            <div class="value">
                                                <h5 class="fw-300" style="font-size:17px;">$50</h5>
                                            </div>
                                        </div>
                                        <div class="shipmentDelivery order-flex">
                                            <div class="property">
                                                <h5 class="fw-500" style="font-size:17px;">Shipment & Delivery:</h5>
                                            </div>
                                            <div class="value">
                                                <h5 class="fw-300" style="font-size:17px;">$0</h5>
                                            </div>
                                        </div>
                                        <div class="promoApplied order-flex">
                                            <div class="property">
                                                <h5 class="fw-500" style="font-size:17px;">Promo Applied:</h5>
                                            </div>
                                            <div class="value">
                                                <h5 class="fw-300" style="font-size:17px;">-$5</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orderTotal">
                                        <div class="property">
                                            <h5 class="fw-700" style="font-size:20px; color:#619700;">Order Total
                                            </h5>
                                        </div>
                                        <div class="value">
                                            <h5 class="fw-400" style="font-size:20px;">$45</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="test-l-2" role="tabpanel" class="content" aria-labelledby="stepper1trigger2">
                        <h2 class="font-40 fw-600 text-center pb-5">Payment Details</h2>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="paymentInfo">
                                    <div class="head">
                                        <h4 class="font-20 fw-600 text-center">Enter Your Address Details</h4>
                                    </div>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="tel" class="form-control" placeholder="Card Number">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Name On Card">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Expire Date">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Expire Year">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="CVV">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="payment-cards">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio1" value="option1">
                                                <label class="form-check-label cus_label" for="inlineRadio1">
                                                    <img src="img/Image1.png" class="img-fluid" alt="">
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2">
                                                <label class="form-check-label cus_label" for="inlineRadio2">
                                                    <img src="img/Image2.png" class="img-fluid" alt="">
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio3" value="option1">
                                                <label class="form-check-label cus_label" for="inlineRadio3">
                                                    <img src="img/Image3.png" class="img-fluid" alt="">
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio4" value="option1">
                                                <label class="form-check-label cus_label" for="inlineRadio4">
                                                    <img src="img/Image4.png" class="img-fluid" alt="">
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio5" value="option1">
                                                <label class="form-check-label cus_label" for="inlineRadio5">
                                                    <img src="img/Image5.png" class="img-fluid" alt="">
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <ul class="list-inline">
                                    <li><button type="button" class="default-btn next-step">Continue to next
                                            step</button></li>
                                </ul> -->
                                        <button type="button" class="btn btn-primary"
                                            onclick="stepper1.next()">Continue to Next Step</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="OrderSummary">
                                    <div class="headingg">
                                        <h3 class="font-25 pb-3">Order Summary</h3>
                                    </div>
                                    <div class="order_info">
                                        <div class="itemTotal order-flex">
                                            <div class="property">
                                                <h5 class="fw-500" style="font-size:17px;">Item Total:</h5>
                                            </div>
                                            <div class="value">
                                                <h5 class="fw-300" style="font-size:17px;">$50</h5>
                                            </div>
                                        </div>
                                        <div class="shipmentDelivery order-flex">
                                            <div class="property">
                                                <h5 class="fw-500" style="font-size:17px;">Shipment & Delivery:</h5>
                                            </div>
                                            <div class="value">
                                                <h5 class="fw-300" style="font-size:17px;">$0</h5>
                                            </div>
                                        </div>
                                        <div class="promoApplied order-flex">
                                            <div class="property">
                                                <h5 class="fw-500" style="font-size:17px;">Promo Applied:</h5>
                                            </div>
                                            <div class="value">
                                                <h5 class="fw-300" style="font-size:17px;">-$5</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orderTotal">
                                        <div class="property">
                                            <h5 class="fw-700" style="font-size:20px; color:#8DC63F;">Order Total
                                            </h5>
                                        </div>
                                        <div class="value">
                                            <h5 class="fw-400" style="font-size:20px;">$45</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <button type="button" class="btn btn-primary" onclick="stepper1.previous()">Previous</button> -->

                    </div>
                    <div id="test-l-3" role="tabpanel" class="content text-center" aria-labelledby="stepper1trigger3">
                        <h2 class="font-40 fw-600 text-center pb-5">Confirm Order</h2>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="productsummary-info">
                                    <div class="topBaR">
                                        <div class="headd">
                                            <h4 class="font-20">Products</h4>
                                        </div>
                                        <div class="iconDvv">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="addproduct">
                                        <div class="imgBox">
                                            <figure><img src="img/wishlist1.png" alt=""></figure>
                                        </div>
                                        <div class="name">
                                            <h5 style="font-size:18px;">One Plus 9t Ultra max pro</h5>
                                        </div>
                                        <div class="quantity">
                                            <h5 style="font-size:18px; color:#1F2C35;">X1</h5>
                                        </div>
                                    </div>
                                    <div class="addproduct lst">
                                        <div class="imgBox">
                                            <figure><img src="img/wishlist1.png" alt=""></figure>
                                        </div>
                                        <div class="name">
                                            <h5 style="font-size:18px;">One Plus 9t Ultra max pro</h5>
                                        </div>
                                        <div class="quantity">
                                            <h5 style="font-size:18px; color:#1F2C35;">X1</h5>
                                        </div>
                                    </div>
                                    <div class="shipment-Info">
                                        <div class="topBaR">
                                            <div class="headd">
                                                <h4 class="font-20">Shipment Address</h4>
                                            </div>
                                            <div class="iconDvv">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="uerInfo">
                                            <div class="country info-flex">
                                                <div class="property">
                                                    <h5 class="fw-500" style="font-size:18px; color:#244638;">
                                                        Country:</h5>
                                                </div>
                                                <div class="value">
                                                    <h5 class="fw-300" style="font-size:18px; color:#244638;">
                                                        United States</h5>
                                                </div>
                                            </div>
                                            <div class="address info-flex">
                                                <div class="property">
                                                    <h5 class="fw-500" style="font-size:18px; color:#244638;">
                                                        Address:</h5>
                                                </div>
                                                <div class="value">
                                                    <h5 class="fw-300" style="font-size:18px; color:#244638;">
                                                        10515 Fox Ave Fairdale, Kentucky(KY), 40118</h5>
                                                </div>
                                            </div>
                                            <div class="phone info-flex">
                                                <div class="property">
                                                    <h5 class="fw-500" style="font-size:18px; color:#244638;">
                                                        Phone:</h5>
                                                </div>
                                                <div class="value">
                                                    <h5 class="fw-300" style="font-size:18px; color:#244638;">
                                                        +44-123-456-789</h5>
                                                </div>
                                            </div>
                                            <div class="state info-flex">
                                                <div class="property">
                                                    <h5 class="fw-500" style="font-size:18px; color:#244638;">
                                                        State:</h5>
                                                </div>
                                                <div class="value">
                                                    <h5 class="fw-300" style="font-size:18px; color:#244638;">
                                                        Texas</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="billing-detail">
                                        <div class="topBaR">
                                            <div class="headd">
                                                <h4 class="font-20">Billing Details</h4>
                                            </div>
                                            <div class="iconDvv">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="card-infoo">
                                            <div class="img-box">
                                                <figure><img src="img/visabig.png" alt=""></figure>
                                            </div>
                                            <div class="card-number">
                                                <span>My Personal Card</span>
                                                <input type="text" value="**********1239">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <ul class="list-inline">
                                <li><button type="button" onclick="location.href='thankyou.php';"
                                        class="default-btn next-step">Confirm & place
                                        order</button></li>
                            </ul> -->
                                    <a href="thankyou.php">
                                        <button type="submit" class="btn btn-primary mt-5">Confirm & Place order</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="OrderSummary">
                                    <div class="headingg">
                                        <h3 class="font-25 pb-3">Order Summary</h3>
                                    </div>
                                    <div class="order_info">
                                        <div class="itemTotal order-flex">
                                            <div class="property">
                                                <h5 class="fw-500" style="font-size:17px;">Item Total:</h5>
                                            </div>
                                            <div class="value">
                                                <h5 class="fw-300" style="font-size:17px;">$50</h5>
                                            </div>
                                        </div>
                                        <div class="shipmentDelivery order-flex">
                                            <div class="property">
                                                <h5 class="fw-500" style="font-size:17px;">Shipment & Delivery:</h5>
                                            </div>
                                            <div class="value">
                                                <h5 class="fw-300" style="font-size:17px;">$0</h5>
                                            </div>
                                        </div>
                                        <div class="promoApplied order-flex">
                                            <div class="property">
                                                <h5 class="fw-500" style="font-size:17px;">Promo Applied:</h5>
                                            </div>
                                            <div class="value">
                                                <h5 class="fw-300" style="font-size:17px;">-$5</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orderTotal">
                                        <div class="property">
                                            <h5 class="fw-700" style="font-size:20px; color:#8DC63F;">Order Total
                                            </h5>
                                        </div>
                                        <div class="value">
                                            <h5 class="fw-400" style="font-size:20px;">$45</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <button type="button" class="btn btn-primary mt-5"
                            onclick="stepper1.previous()">Previous</button> -->

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
<!-- Footer Include Here -->