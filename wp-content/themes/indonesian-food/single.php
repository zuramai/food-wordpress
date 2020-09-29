<?= get_header() ?>
<section class="single">
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="product-image">
                <?= the_post_thumbnail('original') ?>
            </div>
        </div>
        <div class="col-md-8">
            <div class="product-details">
                <div class="ratings">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class='review-count'>(53)</span>
                </div>
                <h1 class='product-name'><?= the_title() ?></h1>
                <p class="product-excerpt">Good taste beef burger served with high quality meat.</p>
                <div class="product-price">
                    <h1>Rp <?= number_format(get_field('price')) ?></h1><span>/pcs</span>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?= get_footer() ?>