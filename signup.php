<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->
<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/signup.css">
<!-- Css Stylesheet -->

<!-- section profile head start -->
<section class="section-head">
    <div class="head-page">
        <h3 class="heading-page">Register</h3>
    </div>
</section>
<!-- section profile head End -->

<!-- section body start here -->

<section class="paralax_scroll">
    <!-- singin page start here -->
    <section class="signup_section">
        <div class="container">
            <div class="signup_heading_sec wow animate__animated animate__fadeInDown">
                <h3>Register Your Account</h3>
                <p class="grey_txt">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy aliquyam erat, sed diam
                    voluptua.
                </p>
            </div>
            <div class="signup_form_sec">
                <div class="row mt-5">
                    <div class="col-lg-5">
                        <div class="wow animate__animated animate__fadeInLeft">
                            <form action="profile.php">
                                <div class="form-start">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Sign Up As A :</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Customer</option>
                                            <option>Customer</option>
                                            <option>Customer</option>
                                            <option>Customer</option>
                                            <option>Customer</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6 col-xs-12">
                                                <label for="inputName">First Name</label>
                                                <input type="text" class="form-control" id="inputName" name="first_name"
                                                    placeholder="Lorem" required="required">
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <label for="inputLname">Last Name</label>
                                                <input type="text" class="form-control" name="last_name" id="inputLname"
                                                    placeholder="Ipsum" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12 col-xs-12">
                                                <label for="inputemail">Email</label>
                                                <input type="email" class="form-control" name="email" id="inputemail"
                                                    placeholder="John Doe@gmail.com" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12 col-xs-12">
                                                <label for="pnumber">Phone Number</label>
                                                <input type="tel" class="form-control" id="pnumber" name="pnumber"
                                                    placeholder="123456789" required="required">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group mt-4">
                                        <div class="row">
                                            <div class="col-md-6 col-xs-12">
                                                <label for="inputPass">Password</label>
                                                <input type="password" class="form-control" id="inputPass"
                                                    name="inputPass" placeholder="********" required="password">
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <label for="inputcPass">Confirm Password</label>
                                                <input type="password" class="form-control" id="inputcPass"
                                                    name="inputcPass" placeholder="********" required="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12 col-xs-12 btn-right ">
                                                <button type="submit" class="btn w-100">Sign Up</button>
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
                    <div class="col-lg-6 signinnn">
                        <div class="dhaa_sec text-center wow animate__animated animate__fadeInRight">
                            <div class="sigw">
                                <a href="" class="signupwf">
                                    <i class="fa fa-facebook mr-5"></i>
                                    Sign Up With Facebook
                                </a>
                            </div>
                            <div class="sigw">
                                <a href="" class="signupwg">
                                    <i class="fa fa-google-plus mr-5" aria-hidden="true"></i>
                                    Sign Up With Google
                                </a>
                            </div>
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