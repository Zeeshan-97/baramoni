<!-- Head Include Here -->
<?php include 'inc/app.php';?>
<!-- Head Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/trackorder.css">
<!-- Stylesheet -->

<section class="paralax_scroll">
    <section class="track_order_sec">
        <div class="container">
            <h2 class="track_order_heading">Track My Order</h2>
            <div class="track_order_content">
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup">Username</label>
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Write Your Tracking Number">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <button class='btn'>Check now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='track_order_checkbox'>
                    <div class="form-group">
                        <input type="checkbox" id="wfda">
                        <label class="cus_checkbox_label" for="wfda">Waiting for Driver Assignment</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="opufl">
                        <label class="cus_checkbox_label" for="opufl">Order Picked Up from location</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="oonw">
                        <label class="cus_checkbox_label" for="oonw">Order On Way</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="delivered">
                        <label class="cus_checkbox_label" for="delivered">Delivered</label>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>


<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
<!-- Footer Include Here -->