<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->
<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/profile.css">
<!-- Css Stylesheet -->

<!-- section profile head start -->
<section class="section-head">
    <div class="">
        <h3 class="heading-page">My Account</h3>
    </div>
</section>
<!-- section profile head End -->


<!-- Profile Info section start-->
<section class="ProfileInfo-section agentprofile">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
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
            <div class="col-md-9">
                <h3 class="basic_head">
                    Change Password
                </h3>
                <div class="information">

                    <div class="form-start">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <input type="password" class="form-control" name="cPassword" id="cPassword"
                                        placeholder="Current Password" required="required">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <input type="password" class="form-control" name="nPassword" id="nPassword"
                                        placeholder="New Password" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <input type="password" class="form-control" name="ConfirmPassword"
                                        id="ConfirmPassword" placeholder="Confirm Password" required="required">
                                </div>
                                <div class="col-md-6 col-xs-12 btn-right">
                                    <button type="submit" class="btn">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>
<!-- Profile Info section End-->
<!-- Profile Info form section Start-->
<section class="Profile-Info-form-section">

</section>
<!-- Profile Info form section End-->

<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
<!-- Footer Include Here -->