<?php

add_theme_support('custom-logo');
add_theme_support('menus');
add_theme_support('post-thumbnail');
register_post_type('products',[
    'public' => true,
    'label' => 'Products',
    'description' => 'You can add foods, beverages, and other product.',
    'supports' => ['title']
])

?>