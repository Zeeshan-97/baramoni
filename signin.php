<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->
<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/signin.css">
<!-- Css Stylesheet -->

<!-- section profile head start -->
<section class="section-head">
    <div class="head-page">
        <h3 class="heading-page">Login</h3>
    </div>
</section>
<!-- section profile head End -->

<!-- section body start here -->

<section class="paralax_scroll">
    <!-- singin page start here -->
    <section class="sigin_section">
        <div class="container">
            <div class="signin_heading_sec wow animate__animated animate__fadeInDown">
                <h3>Sign In</h3>
                <p class="grey_txt">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy aliquyam erat, sed diam
                    voluptua.
                </p>
            </div>
            <div class="signin_form_sec">
                <div class="row mt-5">
                    <div class="col-lg-5">
                        <div class=" wow animate__animated animate__fadeInLeft">
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
                                        <div class="form-group mt-4">
                                            <div class="row">
                                                <div class="col-md-12 col-xs-12">
                                                    <label for="inputPass">Password</label>
                                                    <input type="password" class="form-control" id="inputPass"
                                                        name="inputPass" placeholder="********" required="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class=" col-md-6 col-xs-6">
                                                <label class="custom-check">
                                                    Remember Me
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="contactus-form-btn col-md-6 col-xs-6 text-right">
                                                <a href="forgetpassword.php">Forget Password</a>
                                            </div>
                                        </div>
                                        <div class="form-group mt-4">
                                            <div class="row">
                                                <div class="col-md-12 col-xs-12 btn-right ">
                                                    <a href="profile.php" type="submit" class="btn w-100">Sign In</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="border_col">

                        </div>
                    </div>
                    <div class="col-lg-6 dhaa_section">
                        <div class="dhaa_sec text-center wow animate__animated animate__fadeInRight">
                            <h3>DON'T HAVE AN ACCOUNT?</h3>
                            <p class="grey_txt">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna
                            </p>
                            <a href="signup.php" class="btn reg_btn">Register Your Account</a>
                        </div>
                    </div>
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