<!-- css file -->
<link rel="stylesheet" href="css/profile.css">
<!-- css file -->
<?php include 'inc/app.php'; ?>
<div class="wrapper">
    <?php include 'inc/sidebar.php' ?>
    <div class="main">
        <?php include 'inc/navbar.php' ?>

        <main class="content">
            <div class="container-fluid p-0">
                <section class="dashboard ProfileInfo-section">
                    <h3 class="text-center myaccount pb-5">My Account</h3>
                    <div class="information">
                        <h4 class="top_heading">Personal Information</h4>
                        <div class="row profile-h">
                            <div class="col-md-2">
                                <div class="useriamge">
                                    <img src="../img/profile2.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="useriamgetext">
                                    <div class="photo">
                                        <p>Photo</p>
                                    </div>
                                    <div>
                                        <p>Upload / Change Photo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-right">
                                <a href="edit-profile.php"> Edit Profile</a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <div class="profilen">
                                    <p>First Name</p>
                                    <p>Lorem</p>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="profilen">
                                    <p>Last Name</p>
                                    <p>Ipsum</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="profilen">
                                    <p>Country</p>
                                    <div class="profileanc">
                                        <p class="parisfrance">Paris France</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 mb-5">
                            <div class="col-md-4">
                                <div class="profilen">
                                    <p>Phone</p>
                                    <div class="profileanc">
                                        <p class="profileno">+1-234-567-890</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="profilen">
                                    <p>Email</p>
                                    <p>Example@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="profilen">
                                    <p>Password</p>
                                    <div class="profileanc">
                                        <p>**********</p>
                                        <a href="change-password.php"> Change Password</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="information_content">
                        <div class='business_cont'>
                            <h4 class="top_heading">Business Information</h4>
                            <a href="manage_customer.php"> Edit</a>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="business_label">
                                    Business name
                                </div>
                                <div class="business_label">
                                    Trade LIcence Number
                                </div>
                                <div class="business_label">
                                    Business Contact Number
                                </div>
                                <div class="business_label">
                                    Email
                                </div>
                                <div class="business_label">
                                    Owner Name
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="business_ans">
                                    Baramoni
                                </div>
                                <div class="business_ans">
                                    J1S234-987
                                </div>
                                <div class="business_ans">
                                    +971-324-4856879
                                </div>
                                <div class="business_ans">
                                    info@baramoni.com
                                </div>
                                <div class="business_ans">
                                    John Anderson
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="business_label">
                                Business Contact Number
                                </div>
                                <div class="business_label">
                                Business Type
                                </div>
                                <div class="business_label">
                                Head Office Address
                                </div>
                                <div class="business_label mt-4">
                                Main Products Catagories
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="business_ans">
                                +123-456-789
                                </div>
                                <div class="business_ans">
                                Advertisment OR Selling Product 
                                </div>
                                <div class="business_ans">
                                Suit# 200A lorem Tower
ipsum road. DX12345
                                </div>
                                <div class="business_ans">
                                Lorem ipsum dolor
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <?php include 'inc/footer.php'; ?>
    </div>
</div>