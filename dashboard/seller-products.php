<?php include 'inc/app.php';?>
<!-- css file -->
<link rel="stylesheet" href="css/seller-products.css">
<!-- css file -->
<style>
.navbar-bg {
    padding: 1rem 0.7rem 1rem 0.7rem;
}

ul.navbar-nav li.nav-item.dropdown .btn {
    padding: 0px 40px;
}
</style>
<!-- seller dashboard-wrapper starts here -->
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

                    <div class="pro-duct-heading">
                        <div class="heading_wrapper mb-3">
                            <h4>Product Inventory</h4>

                        </div>
                        <div class="add-upload-wrapper mb-4">
                            <button class="add-products " onclick="location.href='seller-add-product.php'">Add</button>
                            <!-- <button class="upload-products"> <img src="img/upload-products.svg" alt=""> Upload</button> -->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!-- <div class="shipmethods">
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
                        </div> -->
                    </div>
                    <div class="col-md-6">
                        <div class="filters">
                            <div class="title">
                                <!-- <h6>Date Range</h6> -->

                            </div>
                            <!-- <div class="input-group">
                                <div class="form-group">
                                    <label for="Fromdate"></label>
                                    <input type="text" id="Fromdate" class="form-control" placeholder="From date">
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
                            </div> -->
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
                            <input type="date" class="form-control calender_prod" name="" id="calender_date">
                        </div>
                    </div>

                    <div class="table-resposnive">
                        <table class="table">
                            <thead>
                                <tr class="topbar">
                                    <th scope="col" class="Status">Status</th>
                                    <th scope="col" class="billingname">Product Name</th>
                                    <!-- <th scope="col" class="amount">SKU number</th> -->
                                    <th scope="col" class="Image">Image</th>
                                    <th scope="col" class="shipmentstatus">Date</th>
                                    <th scope="col" class="Price">Amount</th>
                                    <th scope="col" class="Stock">Stock Available</th>
                                    <th scope="col" class="Featured">Featured</th>
                                    <th scope="col" class="Details">Mark</th>
                                    <th scope="col" class="Action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Lorem ipsum dolor </td>
                                    <!-- <td class="amount">CA12345</td> -->
                                    <td class="items">
                                        <img src="img/pro-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <td class="Boost"> <button class="btn boost-btn" type="button" data-toggle="modal"
                                            data-target="#exampleModalCenter">Boost</button> </td>
                                    <td class="Detailsu"><button class="btn details-btn">Sold</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid inactive">In Active</td>
                                    <td class="billingname">Lorem ipsum dolor </td>
                                    <!-- <td class="amount">CA12345</td> -->
                                    <td class="items">
                                        <img src="img/pro-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <td class="Boost"> <button class="btn boost-btn">Boost</button> </td>
                                    <td class="Detailsu"><button class="btn details-btn">Hold</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Lorem ipsum dolor </td>
                                    <!-- <td class="amount">CA12345</td> -->
                                    <td class="items">
                                        <img src="img/pro-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <td class="Boost"> <button class="btn boost-btn">Boost</button> </td>
                                    <td class="Detailsu"><button class="btn details-btn">Remove</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Lorem ipsum dolor </td>
                                    <!-- <td class="amount">CA12345</td> -->
                                    <td class="items">
                                        <img src="img/pro-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <td class="Boost"> <button class="btn boost-btn">Boost</button> </td>
                                    <td class="Detailsu"><button class="btn details-btn">Hold</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Koizuma Massage Gun </td>
                                    <td class="amount">CA12345</td>
                                    <td class="items">
                                        <img src="img/pro-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <td class="Boost"> <button class="btn boost-btn">Boost</button> </td>
                                    <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr> -->
                                <!-- <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Koizuma Massage Gun </td>
                                    <td class="amount">CA12345</td>
                                    <td class="items">
                                        <img src="img/pro-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <td class="Boost"> <button class="btn boost-btn">Boost</button> </td>
                                    <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr> -->
                                <!-- <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Koizuma Massage Gun </td>
                                    <td class="amount">CA12345</td>
                                    <td class="items">
                                        <img src="img/pro-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <td class="Boost"> <button class="btn boost-btn">Boost</button> </td>
                                    <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr> -->
                            </tbody>

                        </table>
                    </div>
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
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <h4 class="">Boost Product</h4>
                <form action="seller-payment.php">
                    <div class="form-check mb-3 mt-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Boost Product for 3 days for £1.99
                        </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Boost Product for 1 month for £9.99
                        </label>
                    </div>
                    <div class="form-group d-flex">
                        <a class="btn pay-now " onclick="location.href='paynow_modal.php'" data-toggle="modal" data-target="#exampleModalCenter">Pay Now</a>
                        <button class="btn cancel">Cancel</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- seller dashboard-wrapper end here -->
<?php include 'inc/footer.php';?>