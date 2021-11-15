kjb
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/styles.min.css" rel="stylesheet">
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>
    <?php
    // wp_head()アクションを実行する
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
        <div class="header_inner">
            <div class="header_logo">
                <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo@2x.png" alt="AWA UDON UNDO"></a></h1>
            </div>
        </div>

        <ul>
            <li><a href="<?php echo home_url('/noodle/'); ?>">
                    徳島の麺類事情</a></li>
            <li><a href=" <?php echo home_url('/archives/shop_type/naruchuru'); ?>">鳴ちゅるうどん</a></li>
            <li><a href=" <?php echo home_url('/archives/shop_type/tarai'); ?>">たらいうどん</a></li>
            <li><a href=" <?php echo home_url('/archives/shop_type/honkakuha'); ?>">本格派うどん</a></li>
            <li><a href="<?php echo home_url('/archives/course'); ?>">モデルコース</a></li>
            <li><a href="<?php echo home_url('/archives/category/special'); ?>">特集</a></li>
        </ul>

        </div>






    </header>
