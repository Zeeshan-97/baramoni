<?php include 'inc/app.php';?>

<!-- css file -->
<link rel="stylesheet" href="css/additional-marketing.css">
<!-- css file -->

<style>
.navbar-bg {
    padding: 1rem 0.7rem 1rem 0.7rem;
}
.main{
    background: #eaeaea;
}
</style>
<div class="wrapper">
    <?php include 'inc/sidebar.php' ?>
    <div class="main">
        <?php include 'inc/navbar.php' ?>
        <section class="additional_marketing">
            <div class="payment_methods_box">
                <div class="heading">
                    <h3 class="paydetail">Enter Your Payment Details</h3>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Card Number                                                                     Expiry date    /   CVV" class="form-control">
                </div>
                <div class="payments_method">
                    <ul class="payments_cards">
                        <li>
                            <label class="container">
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark">
                                    <figure><img src="img/pcard1.png" alt=""></figure>
                                </span>
                            </label>
                        </li>
                        <li>
                            <label class="container">
                                <input type="radio" name="radio">
                                <span class="checkmark">
                                    <figure><img src="img/pcard2.png" alt=""></figure>
                                </span>
                            </label>
                        </li>
                        <li>
                            <label class="container">
                                <input type="radio" name="radio">
                                <span class="checkmark">
                                    <figure><img src="img/pcard3.png" alt=""></figure>
                                </span>
                            </label>
                        </li>
                        <li>
                            <label class="container">
                                <input type="radio" name="radio">
                                <span class="checkmark">
                                    <figure><img src="img/pcard4.png" alt=""></figure>
                                </span>
                            </label>
                        </li>
                        <li>
                            <label class="container">
                                <input type="radio" name="radio">
                                <span class="checkmark">
                                    <figure><img src="img/pcard5.png" alt=""></figure>
                                </span>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="button-group">
                    <button class="done">Done</button>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- seller dashboard-wrapper starts here -->

<!-- seller dashboard-wrapper end here -->

<?php include 'inc/footer.php';?>