<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->
<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/order.css">
<!-- Css Stylesheet -->

<!-- section profile head start -->
<section class="section-head">
    <div class="">
        <h3 class="heading-page wow animate__animated animate__fadeInDown">My Account</h3>
    </div>
</section>
<!-- section profile head End -->


<!-- Profile Info section start-->
<section class="ProfileInfo-section agentprofile">
    <div class="container">
        <div class="row">
            <div class="col-md-3 wow animate__animated animate__fadeInLeft">
                <h3 class="useracc">My Accounts</h3>
                <div class="user-profile-sec">
                    <div class="useriamge">
                        <a href="profile.php">
                            <img src="img/userimg.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="username"><a href="profile.php">John Doe</a></div>
                    <div class="useremail">myemail@gmail.com</div>
                    <hr>
                    <div class="username1"><a class="green_para" href="profile.php">My Profile</a></div>
                    <hr class="line">
                    <div class="username1"><a href="order.php">My orders</a></div>
                    <hr class="line">
                    <div class="username1"><a href="wishlist.php">My Wishlist</a></div>
                    <hr class="line">
                    <div class="username1"><a href="chat.php">Chat</a></div>
                    <hr class="line">
                    <div class="username1"><a href="signin.php">Log Out</a></div>

                </div>
            </div>
            <div class="col-md-9 wow animate__animated animate__fadeInRight">
                <h3 class="basic_head">
                    My Order
                </h3>
                <div class="">
                    <div class="order-table-wrapper table-responsive">
                        <table>
                            <tbody>
                                <tr class="row1">
                                    <th class="order-no">OrderNo</th>
                                    <th class="order-date">Order Date</th>
                                    <th class="order-status">Status</th>
                                    <th class="order-pay">Payment Status</th>
                                    <th class="order-total">Total</th>
                                    <th class="details"></th>
                                </tr>
                                <tr class="row2">
                                    <td class="number">#1084598423154</td>
                                    <td class="date">04-12-21</td>
                                    <td class="status">Confirm</td>
                                    <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </td>
                                    <td class="total-price">$590.00</td>
                                    <td class="order-details">
                                        <a class="order-details-btn" data-toggle="modal"
                                            data-target="#exampleModalLong">view Details</a>
                                    </td>
                                </tr>
                                <tr class="row2">
                                    <td class="number">#1084598423154</td>
                                    <td class="date">04-12-21</td>
                                    <td class="status">Confirm</td>
                                    <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </td>
                                    <td class="total-price">$590.00</td>
                                    <td class="order-details">
                                        <a href="#">view Details</a>
                                    </td>
                                </tr>
                                <tr class="row2">
                                    <td class="number">#1084598423154</td>
                                    <td class="date">04-12-21</td>
                                    <td class="status">Confirm</td>
                                    <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </td>
                                    <td class="total-price">$590.00</td>
                                    <td class="order-details">
                                        <a href="#">view Details</a>
                                    </td>
                                </tr>
                                <tr class="row2">
                                    <td class="number">#1084598423154</td>
                                    <td class="date">04-12-21</td>
                                    <td class="status">Confirm</td>
                                    <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </td>
                                    <td class="total-price">$590.00</td>
                                    <td class="order-details">
                                        <a href="#">view Details</a>
                                    </td>
                                </tr>
                                <tr class="row2">
                                    <td class="number">#1084598423154</td>
                                    <td class="date">04-12-21</td>
                                    <td class="status">Confirm</td>
                                    <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </td>
                                    <td class="total-price">$590.00</td>
                                    <td class="order-details">
                                        <a href="#">view Details</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="model-header pt-5">
                    <h5 class="modal-title" id="exampleModalLongTitle">Order Details</h5>
                    <h6>Order #1084598423154 was placed on 30 March 2022</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="product-deatail-wrapper my-3">
                        <div class="product_img">
                            <figure>
                                <img src="img/wishlist1.png" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="product-content">
                            <h5 class="product-name">Lorem ipsum dolor sit</h5>
                            <h6 class="product-size">$ 49.00 <span>Category : <small>Lorem ipsom</small></span>
                            </h6>
                            <h4 class="stocks">Quantity : <span style="color:#619700">(02)</span></h4>
                        </div>
                    </div>
                    <div class="product-deatail-wrapper my-3">
                        <div class="product_img">
                            <figure>
                                <img src="img/wishlist1.png" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="product-content">
                            <h5 class="product-name">Lorem ipsum dolor sit</h5>
                            <h6 class="product-size">$ 49.00 <span>Category : <small>Lorem ipsom</small></span>
                            </h6>
                            <h4 class="stocks">Quantity : <span style="color:#619700">(02)</span></h4>
                        </div>
                    </div>
                    <div class="product-deatail-wrapper my-3">
                        <div class="product_img">
                            <figure>
                                <img src="img/wishlist1.png" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="product-content">
                            <h5 class="product-name">Lorem ipsum dolor sit</h5>
                            <h6 class="product-size">$ 49.00 <span>Category : <small>Lorem ipsom</small></span>
                            </h6>
                            <h4 class="stocks">Quantity : <span style="color:#619700">(02)</span></h4>
                        </div>
                    </div>
                    <div class="order-details">
                        <div class="order-details-wrapper mt-5">
                            <h6><span>Sub Total :</span> <span class="date">$ 147.00</span></h6>
                            <h6><span>Disscount Code Applied :</span> <span class="subtotal">-$ 14.00</span></h6>
                            <h6><span>Shipping Cost :</span> <span class="tax-fee">$ 69.00</span></h6>
                            <h6><span>Shipping Address:</span> <span class="shipping-fee">Lorem ipsum dolr sit</span>
                            </h6>
                            <h6><span>Total Amount :</span> <span class="Coupon">$ 150.00</span></h6>
                        </div>
                    </div>
                    <div class="order-details pb-5">
                        <div class="order-details-wrapper mt-5">
                            <button class="btn form-control" onclick="location.href='shop.php'">Continue
                                Shopping</button>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="row">
                                           
                                        </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

</section>
<!-- Profile Info section End-->
<!-- Profile Info form section Start-->
<section class="Profile-Info-form-section">

</section>
<!-- Profile Info form section End-->

<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
<!-- Footer Include Here -->