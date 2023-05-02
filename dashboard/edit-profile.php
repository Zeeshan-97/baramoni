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
                                <div class="profile-form-heading-wrapper wow animate__animated animate__fadeInDown">
                                    <h3>Edit Profile</h3>
                                </div>
                                <form action="" class="mb-5">
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <div class="profile-img-wrapper d-flex">
                                                <div class="img-wrapper">
                                                    <img src="img/profile.png" alt="">
                                                </div>
                                                <div class="porfile-img-upload-wrapper">
                                                    <h6>Jpeg or Png maximum size (5mb)</h6>
                                                    <button class="btns">Upload Photo</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 text-end">
                                            <div class="processing-wrapper">
                                                <h6>Processing</h6>
                                                <img src="img/ajax-loader.gif" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="">First Name*</label>
                                            <input type="text" value="John" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">Last Name*</label>
                                            <input type="text" value="Doe" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="">Email*</label>
                                            <input type="email" value="Johndoe@gmail.com" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">Phone*</label>
                                            <input type="text" value="+1-234-567-8901" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="">Country*</label>
                                            <select name="" class="form-control" id="">
                                                <option value="Paris France" selected>Paris France</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">City*</label>
                                            <input type="text" value="Type here" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <div class="custom-control custom_checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Save my name, email, and website in this browser for the next time I comment.</label>
                                            </div>
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