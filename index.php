<!-- header.phpをインクルードする -->
<?php get_header(); ?>

<h2 class="pageTitle">特集<span>SPECIAL</span></h2>
<?php get_template_part('template-parts/breadcrumb'); ?>

<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
                <?php if (is_month()) : ?>
                    <h2 class="main_title"><?php the_time('Y年m月'); ?></h2>
                <?php else : ?>
                    <h2 class="main_title"><?php wp_title(''); ?></h2>
                <?php endif; ?>

                <div class="row">

                    <!-- メインループの開始 -->
                    <?php if (have_posts()) : ?>
                        <!-- 繰り返し処理の開始 -->
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-md-4">
                                <?php get_template_part('template-parts/loop', 'special'); ?>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php if (function_exists('wp_pagenavi')) {
                    wp_pagenavi();
                } ?>
            </div>

            <!-- <div class="col-12 col-md-3">
                <?php get_sidebar('categories'); ?>
                <?php get_sidebar('archives'); ?>
            </div> -->
        </div>
    </div>
</main>

<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
