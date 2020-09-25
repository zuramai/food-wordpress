<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <?= wp_head() ?>
    <title><?= wp_title() ?></title>
    <link rel="stylesheet" href="<?= get_bloginfo('stylesheet_directory') ?>/assets/css/base.css">
    <link rel="stylesheet" href="<?= get_bloginfo('stylesheet_directory') ?>/assets/css/style.css">
</head>
<body>
    <div id="app">
        <div id="main-sidebar">
            <div class="food-icon">
                <img src="<?= get_bloginfo('stylesheet_directory') ?>/assets/svg/food_icon.svg" alt="Main Menu">
            </div>
        </div>
        <div id="main">
            <div id="main-navbar">
                <div class="container">
                    <div class="menus">
                        <?= wp_nav_menu([
                            'menu' => 2
                        ]) ?>
                    </div>
                </div>
            </div>