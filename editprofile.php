<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/profile.css">
<!-- Css Stylesheet -->
<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/editprofile.css">
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
                    Edit Information
                </h3>
                <div class="information">
                    <div class="row profile-h">
                        <div class="col-md-3">
                            <div class="avatar-preview active_img">
                                <div id="imagePreview" style="background-image: url(img/user2.png)">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-0">
                            <div class="jpg-png">
                                <p>
                                    Jpeg or Png maximum size (5mb)
                                </p>
                            </div>
                            <div class="avatar-edit">
                                <label for="imageUpload">Upload Photo</label>
                                <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg">
                            </div>
                        </div>
                        <div class="col-md-5 p-0">
                            <div class="loader-pro">
                                <p>
                                    Processing
                                </p>
                                <i><img src="img/icon_loader.png" alt=""></i>
                            </div>
                        </div>
                        <!-- <div class="col-md-3">
                            <a href="#"> Edit Profile</a>
                        </div> -->
                    </div>
                    <div class="form-start">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">

                                    <input type="text" class="form-control" id="inputName" name="first_name"
                                        placeholder="First Name" required="required">
                                </div>
                                <div class="col-md-6 col-xs-12">

                                    <input type="text" class="form-control" name="last_name" id="inputLname"
                                        placeholder="Last Name" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">

                                    <input type="tel" class="form-control" id="inputPhone" name="inputPhone"
                                        placeholder="Phone" required="Phone">
                                </div>
                                <div class="col-md-6 col-xs-12">

                                    <input type="text" class="form-control" name="Gender" id="inputGender"
                                        placeholder="Gender" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">

                                    <input type="email" class="form-control" name="email" id="inputemail"
                                        placeholder="Email" required="required">
                                </div>
                                <div class="col-md-6 col-xs-12 btn-right">
                                    <button type="submit" class="btn">Save</button>
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="row">


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