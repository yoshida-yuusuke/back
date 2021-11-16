<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>阿波うどん運動</title>
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/reset.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/common.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/header.css" rel="stylesheet">

    <!-- ここからページにあったCSSをあてる -->
    <?php
    if (is_front_page()) { ?>
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/front-page.css" rel="stylesheet">
    <?php
    } elseif (is_singular('post')) { ?>
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/single-blog.css" rel="stylesheet">
    <?php } elseif (is_page('noodle')) {  ?>
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/page-noodle.css" rel="stylesheet">
    <?php } elseif (is_page('privacy')) { ?>
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/page-privacy.css" rel="stylesheet">
    <?php } elseif (is_page('writer')) { ?>
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/page-writer.css" rel="stylesheet">
    <?php } elseif (is_post_type_archive('shop')) {  ?>
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/archive-shop.css" rel="stylesheet">
    <?php } elseif (is_post_type_archive('course')) { ?>
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/archive-course.css" rel="stylesheet">
    <?php } elseif (is_singular('course')) {  ?>
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/single-course.css" rel="stylesheet">
    <?php } elseif (is_singular('shop')) {  ?>
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/single-shop.css" rel="stylesheet">
    <?php } elseif (
        is_tax('shop_type')
    ) { ?>
        <link href="<?php echo get_template_directory_uri() ?>/assets/css/taxsonomy-shop_type.css" rel="stylesheet">
    <?php }
    ?>

    <script src="<?php echo get_template_directory_uri() ?>/assets/js/front-page.js"></script>

    <?php
    // wp_head()アクションを実行する
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>


    </header>
