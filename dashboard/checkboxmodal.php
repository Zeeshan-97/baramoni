<?php include 'inc/app.php'; ?>
<!-- css file starts here -->
<link rel="stylesheet" href="css/checkbox.css">
<!-- css file starts here -->
<style>
    main.content {
    background: #eee;
}
</style>
<div class="wrapper">
    <?php include 'inc/sidebar.php' ?>
    <div class="main">
        <?php include 'inc/navbar.php' ?>

        <main class="content">
            <div class="container-fluid p-0">
                <section class="for_add_sell">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <div class="form-group custom_check_for">
                                    <input type="checkbox" id="for_advertisement">
                                    <label for="for_advertisement">
                                        <div>
                                            <h3>For Advertisment</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been Lorem Ipsum is simply dummy text of the
                                                printing and typesetting industry. sum has been Lorem Ipsum is simply
                                                dummy text of the printing </p>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <div class="form-group custom_check_for">
                                    <input type="checkbox" id="for_sell">
                                    <label for="for_sell">
                                        <div>
                                            <h3>For  Selling products</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been Lorem Ipsum is simply dummy text of the
                                                printing and typesetting industry. sum has been Lorem Ipsum is simply
                                                dummy text of the printing </p>
                                        </div>
                                    </label>
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