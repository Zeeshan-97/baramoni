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

                    <div class="col-md-12">
                        <div class="heading_wrapper">
                            <h4>Manage Customers</h4>
                        </div>

                    </div>
                </div>
                <div class="sellers_orders">
                    <div>
                        <h5 class="cus_detail_head">Customer Details</h5>
                    </div>
                    <div class="table-resposnive">
                        <table class="table">
                            <tr class="topbar">
                                <th class="orderid">#Customer ID</th>
                                <th class="billingname">Customer Name</th>
                                <th class="details">Contact Info</th>
                                <th class="amount">Amount</th>
                                <th class="items">Item</th>
                                <th class="shipmentstatus">Shipment Status</th>

                            </tr>
                            <tr>
                                <td class="orderid">#1477</td>
                                <td class="billingname">John Doe</td>
                                <td class="details">
                                    <div class="action_detail">
                                        <p>+1-234-567-8901</p>
                                        <p>Example6@gmail.com</p>
                                    </div>
                                </td>
                                <td class="amount">$ 49.00</td>
                                <td class="items">2</td>
                                <td class="shipmentstatus unshipped">Unshipped
                                </td>

                            </tr>
                            <tr>
                                <td class="orderid">#1477</td>
                                <td class="billingname">John Doe</td>
                                <td class="details">
                                    <div class="action_detail">
                                        <p>+1-234-567-8901</p>
                                        <p>Example6@gmail.com</p>
                                    </div>
                                </td>
                                <td class="amount">$ 49.00</td>
                                <td class="items">2</td>
                                <td class="shipmentstatus shipped">Shipped
                                </td>

                            </tr>
                            <tr>
                                <td class="orderid">#1477</td>
                                <td class="billingname">John Doe</td>
                                <td class="details">
                                    <div class="action_detail">
                                        <p>+1-234-567-8901</p>
                                        <p>Example6@gmail.com</p>
                                    </div>
                                </td>
                                <td class="amount">$ 49.00</td>
                                <td class="items">2</td>
                                <td class="shipmentstatus unshipped">Unshipped
                                </td>
                            </tr>
                            <tr>
                                <td class="orderid">#1477</td>
                                <td class="billingname">John Doe</td>
                                <td class="details">
                                    <div class="action_detail">
                                        <p>+1-234-567-8901</p>
                                        <p>Example6@gmail.com</p>
                                    </div>
                                </td>
                                <td class="amount">$ 49.00</td>
                                <td class="items">2</td>
                                <td class="shipmentstatus unshipped">Unshipped
                                </td>
                            </tr>
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

<?php include 'inc/footer.php';?>