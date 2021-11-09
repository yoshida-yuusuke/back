<!-- header.phpをインクルードする -->
<?php get_header(); ?>

<!-- トップページかどうか -->
<?php if (is_home()) : ?>
    <div class="jumbotron">
        <div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/jumbotron-1@2x.jpg')"></div>
        <div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/jumbotron-2@2x.jpg')"></div>
        <div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/jumbotron-3@2x.jpg')"></div>
    </div>
<?php endif; ?>

<section class="sec">
    <div class="container">
        <header class="sec_header">
            <h1 class="title">徳島で見つける、<br>
                あなた好みのうどん。<span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</＜span>
            </h1><br>
            <h2 <span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</span> </h2><br>
            <a href="<?php echo home_url('/noodle/'); ?>">
                <span>徳島の麺類事情 固定ページへ</span>
            </a>
        </header>

        <h2 <span>徳島に在るうどんの種類</span> </h2><br>
        <!-- 各種うどんのアイキャッチ画像＆種類タイトル＆詳細テキスト -->
        <a href=" <?php echo home_url('/archives/shop_type/tarai'); ?>">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/news_img-1.jpg" alt=""></a>
        <br>
        <p>たらいうどんタイトル</p>
        <p>たらいうどんの説明。たらいうどんの説明。たらいうどんの説明。たらいうどんの説明。たらいうどんの説明。たらいうどんの説明。たらいうどんの説明。たらいうどんの説明。たらいうどんの説明。たらいうどんの説明。たらいうどんの説明。たらいうどんの説明。たらいうどんの説明。</p>

        <!-- <a href="<?php echo home_url('/県外からのアクセス/'); ?>"> <span>県外からのアクセス アコーディオン表示</span> </a> -->
        <span onclick="obj=document.getElementById('open').style; obj.display=
        (obj.display=='none')?'block':'none';">
            <a style="cursor:pointer;">県外からのアクセス</a>
        </span>
        <ul>
            <!-- 折り畳まれる部分 -->
            <span id="open" style="display: none; clear: both;">
                <p>ここに展開後に表示される地図、テキストを入力！</p>
            </span>
        </ul>
        <br>

        <h2 <span>モデルコース</span> </h2><br>
        <!--   写真＆テキスト モデルコース一覧へ -->
        <a href=" <?php echo home_url('/archives/course'); ?>">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/news_img-1.jpg" alt=""><span>ここから見る</span></a>
        <p>モデルコースの説明。モデルコースの説明。モデルコースの説明。モデルコースの説明。モデルコースの説明。モデルコースの説明。モデルコースの説明。モデルコースの説明。モデルコースの説明。モデルコースの説明。モデルコースの説明。</p>
        <br>

        <h2 <span>特集</span> </h2><br>
        <!-- メインループの開始 -->
        <?php $args = array(
            'post_type' => 'post',
            'category_name' => 'special',
            'posts_per_page' => 4
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
            <!-- 繰り返し処理の開始 -->
            <?php while ($the_query->have_posts()) : ?>
                <!-- 投稿を取得して$postグルーバル変数に設定する -->
                <?php $the_query->the_post(); ?>
                <div class="col-md-4">
                    <?php get_template_part('template-parts/loop', 'special'); ?></div>
                <!-- 繰り返し処理の終了 -->
            <?php endwhile; ?>
            <!-- メインループの終了 -->
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
</section>

<section class="sec bg-gray">
    <div class="container">
        <header class="sec_header">
            <h2 class="title">店舗情報<span>INFORMATION</span></h2>
        </header>

        <div class="row">
            <div class="col-md-6">
                <a href="<?php echo get_permalink(16); ?>" class="bnr" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/bnr_about@2x.jpg')">
                    <div class="bnr_inner">
                        わたしたちについて<span>ABOUT</span>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="<?php echo get_permalink(23); ?>" class="bnr" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/home/bnr_access@2x.jpg')">
                    <div class="bnr_inner">
                        アクセス<span>ACCESS</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- <section class="sec sec-bg">
    <div class="sec_inner">
        <header class="sec_header">
            <h2 class="title">お問い合わせ<span>CONTACT</span></h2>
        </header>

        <div class="sec_body contact">
            <div class="contact_icon">
                <i class="fas fa-phone"></i>
            </div>
            <div class="contact_body">
                <p>
                    お気軽にお問い合わせください
                    <span>03-1234-5678</span>
                </p>
            </div>
        </div>
        <div class="sec_btn">
            <a href="" class="btn btn-default">メールフォーム<i class="fas fa-angle-right"></i></a>
        </div>
    </div>
</section> -->

<?php dynamic_sidebar('sidebar-widget'); ?> （

<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
