<?php include 'inc/app.php'; ?>
<!-- css file starts here -->
<link rel="stylesheet" href="css/edit-profile.css">
<!-- css file starts here -->
<div class="wrapper">
    <?php include 'inc/sidebar.php' ?>
    <div class="main">
        <?php include 'inc/navbar.php' ?>

        <main class="content">
            <div class="container-fluid p-0">
                <section class="profile-form-sec">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="profile-form-wrapper">
                                <div class="profile-form-heading-wrapper">
                                    <h3>Change Password</h3>
                                </div>
                                <form action="" class="mb-5">

                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="">Current Password*</label>
                                            <input type="password" value="John" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">New Password*</label>
                                            <input type="password" value="John" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-end">
                                        <div class="col-lg-6">
                                            <label for="">Confirm Password*</label>
                                            <input type="password" value="Johndoe@gmail.com" class="form-control">
                                        </div>
                                        <div class="col-lg-6 text-right">
                                            <button class="btns sub-btn">Save Changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>


        <?php include 'inc/footer.php'; ?>
    </div>
</div>