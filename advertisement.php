<!-- Head Include Here -->
<?php include 'inc/app.php';?>
<!-- Head Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/shop.css">
<!-- Stylesheet -->
<!-- Stylesheet -->
<link rel="stylesheet" href="css/advertisement.css">
<!-- Stylesheet -->


<section class="paralax_scroll">
    <!-- Shop Sec Start Here -->
    <section class="shop_sec advertisement_sec">
        <section class="section-head">
            <div class="head-page">
                <h3 class="heading-page">Advertisment</h3>
            </div>
        </section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-3">
                    <div class="shop-sidebar">

                        <div class="categoryDv variation-attr">
                            <div class="fhead">
                                <h5>Filter Add By categories</h5>
                            </div>
                            <ul class="categories">
                                <div class="alltxt">
                                    <span class="dot"></span>
                                    <p class="green_para">All</p>
                                </div>
                                <li><a href="#"><span class="property">Lorem ipsum</span> <span class="value"></span></a>
                                </li>
                                <li><a href="#"><span class="property">Lorem ipsum </span> <span
                                            class="value"></span></a>
                                </li>
                                <li><a href="#"><span class="property">Lorem ipsum </span> <span class="value"></span></a>
                                </li>
                                <li><a href="#"><span class="property">Lorem ipsum </span> <span class="value"></span></a>
                                </li>
                                <li><a href="#"><span class="property">Lorem ipsum </span> <span
                                            class="value"></span></a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter_Dv variation-attr">
                            <div class="fhead">
                                <h5 class="green_para">Price Range</h5>
                            </div>
                            <div class="filter_all">
                                <div class="mintxt">
                                    <p>MIN</p>
                                    <p>MAX</p>
                                </div>
                                <div class="range_slider">
                                    <div class="range">
                                        <!-- Range Slider HTML -->
                                        <div slider="" id="slider-distance">
                                            <div>
                                                <div inverse-left="" style="width: 37%;"></div>
                                                <div inverse-right="" style="width: 17%;"></div>
                                                <div range="" style="left: 37%; right: 17%;"></div>

                                                <span thumb="" style="left: 37%;"></span>
                                                <span thumb="" style="left: 83%;"></span>

                                                <div sign="" style="left: 37%;">
                                                    <span id="value">37</span>
                                                </div>

                                                <div sign="" style="left: 83%;">
                                                    <span id="value">83</span>
                                                </div>
                                            </div>

                                            <input type="range" tabindex="0" value="30" max="100" min="0" step="1"
                                                oninput="
                                this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                                var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                                var children = this.parentNode.childNodes[1].childNodes;
                                children[1].style.width=value+'%';
                                children[5].style.left=value+'%';
                                children[7].style.left=value+'%';children[11].style.left=value+'%';
                                children[11].childNodes[1].innerHTML=this.value;">

                                            <input type="range" tabindex="0" value="60" max="100" min="0" step="1"
                                                oninput="
                                this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
                                var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                                var children = this.parentNode.childNodes[1].childNodes;
                                children[3].style.width=(100-value)+'%';
                                children[5].style.right=(100-value)+'%';
                                children[9].style.left=value+'%';children[13].style.left=value+'%';
                                children[13].childNodes[1].innerHTML=this.value;">
                                        </div>
                                        <!-- End Range Slider HTML -->
                                    </div>
                                </div>
                                <div class="range-pricing">
                                    <p class="green_para">Price: € 200</p>
                                </div>
                            </div>
                        </div>
                        <div class="rateDv variation-attr">
                            <div class="fhead">
                                <h5>Rated</h5>
                            </div>
                            <ul class="categories">
                                <div class="alltxt">
                                    <span class="dot"></span>
                                    <div class="product_stars_icon">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="product_stars_icon1">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div class="product_stars_icon1">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div class="product_stars_icon1">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div class="product_stars_icon1">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="week_slider advertisement_week week_slider_img">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <a href="advertisement-detail.php">
                                        <img class="img-fluid" src="img/product5.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 week_img_content">
                                <div class="">
                                    <div>
                                        <small>
                                            <p class="add_green">Electronic</p>
                                        </small>
                                        <a href="advertisement-detail.php">
                                            <p class="product_name">Lorem Ipsum is simply dummy
                                                text</p>
                                        </a>
                                    </div>
                                    <div class="product_stars_icon">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="reviews">( 119 reviews )</span>
                                    </div>
                                    <div class="products-par add_prod_para">
                                        <p class="green_para2">
                                            $44.00
                                        </p>
                                        <del>
                                            $55.00
                                        </del>
                                    </div>
                                    <div class="addtocartbtn ">
                                        <a class="btn custom_wish" tabindex="0"><i class="fa fa-heart mr-3"
                                                aria-hidden="true"></i>Add To Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="week_slider advertisement_week week_slider_img2 mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <img class="img-fluid" src="img/product6.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 week_img_content">
                                <div class="">
                                    <div>
                                        <small>
                                            <p class="add_green">Clothes</p>
                                        </small>
                                        <p class="product_name">Lorem Ipsum is simply dummy
                                            text</p>
                                    </div>
                                    <div class="product_stars_icon">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="reviews">( 119 reviews )</span>
                                    </div>
                                    <div class="products-par add_prod_para">
                                        <p class="green_para2">
                                            $44.00
                                        </p>
                                        <del>
                                            $55.00
                                        </del>
                                    </div>
                                    <div class="addtocartbtn ">
                                        <a class="btn custom_wish" tabindex="0"><i class="fa fa-heart mr-3"
                                                aria-hidden="true"></i>Add To Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="week_slider advertisement_week week_slider_img3 mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <img class="img-fluid" src="img/product7.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 week_img_content">
                                <div class="">
                                    <div>
                                        <small>
                                            <p class=" add_green">Pharmacy</p>
                                        </small>
                                        <p class="product_name">Lorem Ipsum is simply dummy
                                            text</p>
                                    </div>
                                    <div class="product_stars_icon">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="reviews">( 119 reviews )</span>
                                    </div>
                                    <div class="products-par add_prod_para">
                                        <p class="green_para2">
                                            $44.00
                                        </p>
                                        <del>
                                            $55.00
                                        </del>
                                    </div>
                                    <div class="addtocartbtn ">
                                        <a class="btn custom_wish" tabindex="-1"><i class="fa fa-heart mr-3"
                                                aria-hidden="true"></i>Add To Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="right_bar_addtocart">
            <div class="cancel">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x"
                    viewBox="0 0 16 16">
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                    </path>
                </svg>
            </div>
            <div class="addtocart_right">
                <div>
                    <p>Your Cart</p>
                    <hr>
                    <div class="add_to_cart_content">
                        <div class="addto_cart_img">
                            <img src="img/sharab1.png" alt="">
                        </div>
                        <div>
                            <p>Borges Unfiltered Organic</p>
                            <p>S / Yellow / Low Sodium</p>
                            <p>$539</p>
                            <div>
                                <span>-</span>
                                <span>2</span>
                                <span>+</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="add_to_cart_content">
                        <div class="addto_cart_img">
                            <img src="img/sharab2.png" alt="">
                        </div>
                        <div>
                            <p>Bavaria Alco</p>
                            <p>L / Green / Low Sodium</p>
                            <p>$1218</p>
                            <div>
                                <span>-</span>
                                <span>2</span>
                                <span>+</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <hr>
                <div class="total-addtocart">
                    <p>Total</p>
                    <p>$1820</p>
                </div>
                <hr>
                <p>Shipping, Taxes and discounts will be calculated at checkout</p>
            </div>
            <div class="btn-group">
                <a class="custombtn ptc" href="checkout.php">Proceed To Checkout</a>
            </div>
            <div class="btn-group">
                <a class="custombtn ptc mt-5" href="cart.php">View Cart</a>
            </div>
        </section>
    </section>
    <!-- Shop Sec End Here -->
</section>


<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
<!-- Footer Include Here -->