<?php

add_theme_support('custom-logo');
add_theme_support('menus');
add_theme_support('post-thumbnails');
register_post_type('products',[
    'public' => true,
    'label' => 'Products',
    'description' => 'You can add foods, beverages, and other product.',
    'supports' => ['title', 'editor', 'thumbnail'],
    'taxonomies' => ['category']
]);
add_action('init','add_categories_to_cpt');
function add_categories_to_cpt(){
    register_taxonomy_for_object_type('category', 'products');
}
?>