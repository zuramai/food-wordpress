<?= get_header() ?>

<div id="bg"></div>
<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <h1 class="hero-text"><?= _e("Let's Eat Indonesian Food") ?></h1>
                <p class='hero-description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's standard dummy text ever since the 1500s.</p>
                <button class="btn btn-lg btn-primary">Make an Order</button>

                <div class="most-loved">
                    <h3>Most Loved</h3>
                    <div class="row">
                        <div class="col-4">
                            <div class="row">
                                <div class="col-7">
                                    <img src="<?= get_bloginfo('stylesheet_directory') ?>/assets/images/img2.png">
                                </div>
                                <div class="col-5 pl-0">
                                    <p class='product-name'>Beef Burger</p>
                                    <p class="product-price">45rb</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-7">
                                    <img src="<?= get_bloginfo('stylesheet_directory') ?>/assets/images/img1.png">
                                </div>
                                <div class="col-5 pl-0">
                                    <p class='product-name'>Kebab Sapi</p>
                                    <p class="product-price">20rb</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-7">
                                    <img src="<?= get_bloginfo('stylesheet_directory') ?>/assets/images/img3.png">
                                </div>
                                <div class="col-5 pl-0">
                                    <p class='product-name'>Cheese Burger</p>
                                    <p class="product-price">20rb</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="hero-right">
                    <img src="<?= get_bloginfo('stylesheet_directory') ?>/assets/images/hero_image.png">
                </div>
            </div>
        </div>
    </div>
</section>



<?= get_footer() ?>