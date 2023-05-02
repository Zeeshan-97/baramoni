    <?php include 'inc/app.php';?>

    <!-- css file -->
    <link rel="stylesheet" href="css/seller-orders.css">
    <!-- css file -->

    <style>
.navbar-bg {
    padding: 1rem 0.7rem 1rem 0.7rem;
}
    </style>
    <!-- seller dashboard-wrapper starts here -->
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <?php include 'inc/sidebar.php';?>
                </div>
                <div class="col-md-9">
                    <div class="row align-items-center">
                        <?php include 'inc/navbar.php';?>
                        <!-- <div class="col-md-6">
                        <div class="shipmethods">
                            <div class="heading_wrappers">
                                <h4>Filters</h4>
                                <h5>Statu</h5>
                            </div>
                            <div class="shipment_methods">
                                <ul class="shipmemntradios">
                                    <li>
                                        <label class="container">All
                                            <input type="radio" checked="checked" name="shipradio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container">Process
                                            <input type="radio" name="shipradio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container">Shipped
                                            <input type="radio" name="shipradio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container">Unshipped
                                            <input type="radio" name="shipradio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                        <!-- <div class="col-md-6">
                        <div class="filters">
                            <div class="title">
                           
                            </div>
                            <div class="input-group">
                                <div class="form-group">
                                    <label for="Fromdate"></label>
                                    <input type="text" id="Fromdate" class="form-control" placeholder="From Date">
                                </div>
                                <span class="spacer">-</span>
                                <div class="form-group">
                                    <label for="ToDate"></label>
                                    <input type="text" id="ToDate" class="form-control" placeholder="To Date">
                                </div>
                                <span class="spacer">-</span>
                                <div class="form-group">
                                    <label for="weekly"></label>
                                    <select id="weekly" class="form-control">
                                        <option selected>last 7 Days</option>
                                        <option>last 14 Days</option>
                                        <option>last 21 Days</option>
                                        <option>last 28 Days</option>
                                    </select>
                                </div>
                            </div>
                        </div> 
                    </div> -->

                        <div class="col-md-12">
                            <div class="heading_wrapper">
                                <h4>Order History</h4>
                            </div>

                        </div>
                    </div>
                    <div class="sellers_orders">
                        <div class="form-group row pb-4">
                            <div class="col-lg-3">
                                <select name="" class="form-control" id="">
                                    <option value="Type" selected="">Filter</option>
                                    <option value="Type">Lorem ipsom</option>
                                </select>
                            </div>
                            <div class="col-lg-3"></div>
                            <div class="col-lg-3"></div>
                            <div class="col-lg-3">
                                <input type="date" class="form-control" name="" id="">
                            </div>
                        </div>
                        <div class="table-resposnive">
                            <table class="table">
                                <tr class="topbar">
                                    <th class="orderid">Order ID</th>
                                    <th class="billingname">Billing Name</th>
                                    <th class="amount">Amount</th>
                                    <th class="items">Item</th>
                                    <th class="shipmentstatus">Shipment Status</th>
                                    <th class="details">Action</th>
                                </tr>
                                <tr>
                                    <td class="orderid">#1477</td>
                                    <td class="billingname">John Doe</td>
                                    <td class="amount">$ 49.00</td>
                                    <td class="items">2</td>
                                    <td class="shipmentstatus unshipped">Unshipped 
                                        <!-- <i class="fa fa-caret-down" aria-hidden="true"></i> -->
                                    </td>
                                    <td class="details">
                                        <div class="action_detail">
                                            <button class="view_detail_btn" data-toggle="modal" data-target="#exampleModalLong">View Details</button>
                                            <!-- <button class="print_order_btn">Print Order</button> -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">#1477</td>
                                    <td class="billingname">John Doe</td>
                                    <td class="amount">$ 49.00</td>
                                    <td class="items">2</td>
                                    <td class="shipmentstatus shipped">Shipped 
                                    </td>
                                    <td class="details">
                                        <div class="action_detail">
                                            <button class="view_detail_btn" data-toggle="modal" data-target="#exampleModalLong">View Details</button>
                                            <!-- <button class="print_order_btn">Print Order</button> -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">#1477</td>
                                    <td class="billingname">John Doe</td>
                                    <td class="amount">$ 49.00</td>
                                    <td class="items">2</td>
                                    <td class="shipmentstatus unshipped">Unshipped 
                                    </td>
                                    <td class="details">
                                        <div class="action_detail">
                                            <button class="view_detail_btn" data-toggle="modal" data-target="#exampleModalLong" >View Details</button>
                                            <!-- <button class="print_order_btn">Print Order</button> -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">#1477</td>
                                    <td class="billingname">John Doe</td>
                                    <td class="amount">$ 49.00</td>
                                    <td class="items">2</td>
                                    <td class="shipmentstatus unshipped">Unshipped 
                                    </td>
                                    <td class="details">
                                        <div class="action_detail">
                                            <button onclick="location.href='seller-order-detail.php';"
                                                class="view_detail_btn">View Details</button>

                                        </div>
                                    </td>
                                </tr>
                                <!-- <tr>
                                <td class="orderid">#12345</td>
                                <td class="billingname">John Doe</td>
                                <td class="amount">$550</td>
                                <td class="items">2</td>
                                <td class="shipmentstatus">Unshipped <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </td>
                                <td class="details">
                                    <div class="action_detail">
                                        <button onclick="location.href='seller-order-detail.php';"
                                            class="view_detail_btn">View Details</button>
                                        
                                    </div>
                                </td>
                            </tr>  -->
                                <!-- <tr>
                                <td class="orderid">#12345</td>
                                <td class="billingname">John Doe</td>
                                <td class="amount">$550</td>
                                <td class="items">2</td>
                                <td class="shipmentstatus">Unshipped <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </td>
                                <td class="details">
                                    <div class="action_detail">
                                        <button onclick="location.href='seller-order-detail.php';"
                                            class="view_detail_btn">View Details</button>
                                      
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="orderid">#12345</td>
                                <td class="billingname">Lorem Ipsum</td>
                                <td class="amount">$550</td>
                                <td class="items">2</td>
                                <td class="shipmentstatus">Unshipped <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </td>
                                <td class="details">
                                    <div class="action_detail">
                                        <button onclick="location.href='seller-order-detail.php';"
                                            class="view_detail_btn">View Details</button>
                              
                                    </div>
                                </td>
                            </tr> -->
                            </table>
                        </div>
                        <hr>
                        <div class="paginations_results">
                            <div class="showing_results">
                                <p>Showing <b>7</b> of over 50 <b>results</b></p>
                            </div>
                            <ul class="paginations">
                                <li class="arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></li>
                                <li class="pagi">1</li>
                                <li class="pagi">2</li>
                                <li class="pagi">3</li>
                                <li class="pagi">..</li>
                                <li class="pagi">90</li>
                                <li class="arrow right-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- seller dashboard-wrapper end here -->
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
                                <img src="../img/wishlist1.png" class="img-fluid" alt="">
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
                                <img src="../img/wishlist1.png" class="img-fluid" alt="">
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
                                <img src="../img/wishlist1.png" class="img-fluid" alt="">
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
                            <button class="btn form-control" onclick="location.href='../shop.php'">Print Order Details</button>
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
    <?php include 'inc/footer.php';?>