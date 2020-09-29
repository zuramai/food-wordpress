<?= get_header() ?>

<div id="bg"></div>
<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 z-5">
                <h1 class="hero-text"><?= _e("Let's Eat Indonesian Food") ?></h1>
                <p class='hero-description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the industry's standard dummy text ever since the 1500s.</p>
                <button class="btn btn-lg btn-primary">Make an Order</button>

                <div class="most-loved">
                    <div class="d-flex justify-content-between">
                        <h3>Most Loved</h3>
                        <small><a href="<?= get_home_url() ?>/foods">All Foods ></a></small>
                    </div>
                    <?php 
                    
                    $query = new WP_Query([
                        'post_type' => 'products',
                        'post_per_page' => 3,
                        'orderBy' => 'id',
                        'order' => 'asc'
                    ]);
                    ?>
                    <div class="row">
                    <?php
                    if($query->have_posts()) {
                        while($query->have_posts()) {
                            $query->the_post();

                            ?>
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-7">
                                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="Image For <?= the_title() ?>">
                                    </div>
                                    <div class="col-5 pl-0">
                                        <p class='product-name'><a href="<?= the_permalink() ?>"><?= the_title() ?></a></p>
                                        <p class="product-price">Rp <?= get_field('price')/1000 ?>K</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        
                    }
                    ?>
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