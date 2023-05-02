<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->
<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/signin.css">
<!-- Css Stylesheet -->

<!-- section profile head start -->
<section class="section-head">
    <div class="head-page">
        <h3 class="heading-page">Forgot Password</h3>
    </div>
</section>
<!-- section profile head End -->

<!-- section body start here -->

<section class="paralax_scroll">
    <!-- singin page start here -->
    <section class="sigin_section">
        <div class="container">
            <div class="signin_heading_sec">
                <h3>Enter Your Email</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy aliquyam erat, sed diam
                    voluptua..
                </p>
            </div>
            <div class="signin_form_sec">
                <div class="row mt-5">
                    <div class="col-md-4"></div>
                    <div class="col-lg-4">
                        <div class="">
                            <form action="profile.php">
                                <div class="form-start">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12 col-xs-12">
                                                <label for="inputemail">Email</label>
                                                <input type="email" class="form-control" name="email" id="inputemail"
                                                    placeholder="John Doe@gmail.com" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-4">
                                        <div class="row">
                                            <div class="col-md-12 col-xs-12 btn-right ">
                                                <a href="otp.php" type="submit" class="btn w-100">Send</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <!-- <div class="col-lg-12">
                        <div class="dhaa_sec text-center">
                            <a href="signup.php" class="btn">Send</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- singin page end here -->

</section>

<!-- section body end here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
<!-- Footer Include Here -->