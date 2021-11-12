<!-- <div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div> -->

<footer>
    <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo@2x.png" alt="AWA UDON UNDO" width=100 height=100></a></h1>
    <div class="container">
        <div class="footer_inner">
            <!-- <nav> -->
            <ul>
                <li><a href="<?php echo home_url('/noodle/'); ?>">
                        徳島の麺類事情</a></li>
                <li>お店紹介</li>
                <ul>
                    <li><a href=" <?php echo home_url('/archives/shop_type/naruchuru'); ?>">鳴ちゅるうどん</a></li>
                    <li><a href=" <?php echo home_url('/archives/shop_type/tarai'); ?>">たらいうどん</a></li>
                    <li><a href=" <?php echo home_url('/archives/shop_type/honkakuha'); ?>">本格派うどん</a></li>
                </ul>
                <li><a href="<?php echo home_url('/archives/course'); ?>">モデルコース</a></li>
                <li><a href="<?php echo home_url('/archives/category/special'); ?>">特集</a></li>
                <li><a href="<?php echo home_url('/writer'); ?>"> わたしたちについて</a></li>
                <li><a href="<?php echo home_url('/privacy'); ?>">プライバシーポリシー</a></li>
                <?php echo do_shortcode('[addtoany]'); ?>
            </ul>
            <!-- </nav> -->
        </div>
    </div>
</footer>
<?php if (is_home()) : ?>
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/home.js"></script><?php endif; ?><?php wp_footer(); ?></body>

    <div><small>copy right</div>

    </html>
