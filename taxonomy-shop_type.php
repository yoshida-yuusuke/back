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
				<?php if (is_category()) :
					$taxonomy_name  = get_query_var('taxonomy')();
				?>
			</h2>
			<!--タグの表示-->
			<ul>
				<?php
					$term_list = get_terms('post_tag');
					$result_list = [];
					foreach ($term_list as $term) {
						$u = (get_term_link($term, 'post_tag'));
						echo "<li><a href='" . $u . "'>" . $term->name . "</a></li>";
					}
				?>
			</ul>
		<?php else : ?>
			<h2 class="pageTitle">カテゴリー<br><span>テキスト</span></h2>
		<?php endif; ?>
		<div class="row justify-content-center">
			<?php
			//メニューの投稿タイプ
			//taxonomyの取得
			$taxonomy_name  = get_query_var('taxonomy');
			//termの取得
			$term_var = get_query_var('term');
			//欲しいtermが取得できているかの確認
			echo $term_var;
			$args = array(
				'post_type' => 'shop',
				'orderby' => 'rand',
				'posts_per_page' => 4,
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
			wp_pagenavi();
		} ?>
		</div>
	</section>
</main>

<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
