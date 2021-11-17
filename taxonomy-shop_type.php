<!-- header.phpをインクルードする -->
<?php get_header(); ?>


<?php get_template_part('template-parts/breadcrumb'); ?>

<main class="main">
	<section class="sec">
		<div class="container">
			<div class="sec_header">

			</div>
			<h2 class="pageTitle">
				<!--カテゴリの取得-->
				<?php
				//termの取得
				$term_var = get_query_var('term');
				//配列を定義する
				$category = array('なるちゅる', 'たらい', '本格派');
				//termに対応したインデックス配列を表示
				if ($term_var == 'naruchuru') {
					echo $category[0];
				} elseif ($term_var == 'tarai') {
					echo $category[1];
				} else {
					echo $category[2];
				}
				?>
			</h2>

			<!--タグ検索機能-->
			<?php
			$terms = get_the_terms(get_the_ID(), 'shop_tag');
			foreach ($terms as $term) :
				echo $term->name . ' ';
			endforeach;
			?>


			<!--5番目を大きく表示する-->
			<?php $count = 0;
			?>
			<?php while (have_posts()) : $count++;
				the_post(); ?>
				<div class="col-md-4">
					<?php if ($count == 5) {
						get_template_part('template-parts/loop', 'menu5');
					} ?>
				</div>
			<?php endwhile; ?>

			<div class="row justify-content-center">
				<?php
				//メニューの投稿タイプ
				//taxonomyの取得
				$taxonomy_name  = get_query_var('taxonomy');


				//ランダム表示
				$args = array(
					'post_type' => 'shop',
					'paged' => $paged,
					'orderby' => 'rand',
					'posts_per_page' => 8,
					'taxonomy' => $taxonomy_name,
					'term' => $term_var,
				);

				$the_query = new WP_Query($args);
				if ($the_query->have_posts()) :
				?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<div class="col-md-3">
							<?php get_template_part('template-parts/loop', 'menu'); ?>

						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else : '検索結果がありませんでした'; ?>

				<?php endif; ?>
			</div>
			<?php if (function_exists('wp_pagenavi')) {
				wp_pagenavi(array('query' => $the_query));
			} ?>
		</div>
	</section>
</main>

<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
