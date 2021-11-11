<!-- header.phpをインクルードする -->
<?php get_header(); ?>

<h2 class="pageTitle">最新情報<span>NEWS</span></h2>
<?php get_template_part('template-parts/breadcrumb'); ?>

<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">

                <!-- メインループの開始 -->
                <?php if (have_posts()) : ?>
                    <!-- 繰り返し処理の開始 -->
                    <?php while (have_posts()) : ?>
                        <!-- 投稿を取得して$postグルーバル変数に設定する -->
                        <?php the_post(); ?>

                        <!-- <article class="article">  -->
                        <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
                            <header class="article_header">
                                <h2 class="article_title"><?php the_title(); ?></h2>
                                <div class="article_meta">
                                    <!-- <ul class="post-categories">
                                        <li><a href="#">お知らせ</a></li>
                                    </ul> -->
                                    <?php the_category(); ?>
                                    <!-- <time datetime="2019-1-1">2019年1月1日</time> -->
                                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日 H:i'); ?></time>
                                </div>
                            </header>

                            <div class="article_body">
                                <div class="content">
                                    <!-- <p>BISTRO CALME では、新しいメニューを開発中です。</p>
                                    <p>
                                        新しいメニューを提供するために、開店後に練習中です。スタッフから大好評のメニューもできてきました。<br>
                                        来月にはご提供できると思います。お楽しみに。
                                    </p> -->
                                    <?php the_content(); ?>
                                </div>
                                <?php comments_template(); ?>
                            </div>

                            <div class="postLinks">
                                <!-- <div class="postLink postLink-prev"><a href="#"><i class="fas fa-chevron-left"></i>前の記事のタイトル</a></div>
                                <div class="postLink postLink-next"><a href="#">次の記事のタイトル<i class="fas fa-chevron-right"></i></a></div> -->
                                <div class="postLink postLink-prev"><?php previous_post_link('<iclass="fas fa-chevron-left"></i>%link'); ?>
                                </div>
                                <div class="postLink postLink-next"><?php next_post_link('%link<iclass="fas fa-chevron-right"></i>'); ?>
                                </div>
                        </article>
                        <!-- 繰り返し処理の終了 -->
                    <?php endwhile; ?>
                    <!-- メインループの終了 -->
                <?php endif; ?>
            </div>


            <!-- ここからサイドバー -->
            <div class="col-12 col-md-3">
                <?php get_sidebar('latests'); ?>
                <?php get_sidebar('categories'); ?>
                <!-- <aside class="archive">
                <h2 class="archive_title">カテゴリ 一覧</h2>
                <ul class="archive_list">
                    <li><a href="#">お知らせ</a></li>
                    <li><a href="#">コラム</a></li>
                </ul>
            </aside> -->

                <?php get_sidebar('archives'); ?>
                <!-- <aside class="archive">
                <h2 class="archive_title">月別アーカイブ</h2>
                <ul class="archive_list">
                    <li><a href="#">2019年4月</a></li>
                    <li><a href="#">2019年5月</a></li>
                </ul>
            </aside> -->
            </div>
        </div>
    </div>
    </div>
</main>


<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
