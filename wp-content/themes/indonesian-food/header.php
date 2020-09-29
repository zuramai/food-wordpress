<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <?= wp_head() ?>
    <title><?= wp_title() ?></title>
    <link rel="stylesheet" href="<?= get_bloginfo('stylesheet_directory') ?>/assets/css/base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="<?= get_bloginfo('stylesheet_directory') ?>/assets/css/style.css">
</head>
<body>
    <div id="app">
        <div id="main-sidebar">
            <div class="food-icon">
                <a href="<?= get_home_url() ?>">
                    <img src="<?= get_bloginfo('stylesheet_directory') ?>/assets/svg/food_icon.svg" alt="Main Menu">
                </a>
            </div>
            <div class="languages">
                <ul>
                    <li><a href="#">ID</a></li>
                    <li  class='active'><a href="#">EN</a></li>
                </ul>
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