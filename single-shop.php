<!-- header.phpをインクルードする -->
<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>




<main class="main">
	<section class="sec">
		<div class="container">
			<!--タグ検索機能-->
			<?php
			$tags = get_terms(array('hide_empty' => false));
			foreach ($tags as $tag) :
				$checked = "";
			?>
				<label>
					<input type="checkbox" name="shop_tag[]" value="<?php echo esc_attr($tag->term_id); ?>" <?php echo $checked; ?>>
					<?php echo esc_html($tag->name); ?>
				</label>
			<?php endforeach; ?>

			<button type='submit' name='action' value='send'>検索</button>

			<!--ボスからのタグ絞り込み機能-->
			<?php
			$posttags = get_the_tags();
			$tags = get_tags();
			if ($posttags) {
				foreach ($posttags as $tag) {
					echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
					echo "\t";
				}
			}
			?>

			<div class="article article-menu">
				<div class="row">
					<div class="col-12 col-md-6">
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
								<h2 class="article_title"><?php the_title(); ?></h2>
								<!--キャッチコピー-->
								<span><?php the_field('catchcopy'); ?></span>

								<!--画像-->
								<?php
								$image = get_field('pic1');
								$url = $image['sizes']['medium'];
								$width = $image['sizes']['medium-width'];
								$height = $image['sizes']['medium-height'];
								?>
								<img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" /><br />

								<?php
								$image = get_field('pic2');
								$url = $image['sizes']['medium'];
								$width = $image['sizes']['medium-width'];
								$height = $image['sizes']['medium-height'];
								?>
								<img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" /><br />

								<?php
								$image = get_field('pic3');
								$url = $image['sizes']['medium'];
								$width = $image['sizes']['medium-width'];
								$height = $image['sizes']['medium-height'];
								?>
								<img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" /><br />

								<?php
								$image = get_field('pic4');
								$url = $image['sizes']['medium'];
								$width = $image['sizes']['medium-width'];
								$height = $image['sizes']['medium-height'];
								?>
								<img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" /><br />

								<?php
								$image = get_field('pic5');
								$url = $image['sizes']['medium'];
								$width = $image['sizes']['medium-width'];
								$height = $image['sizes']['medium-height'];
								?>
								<img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" /><br />

								<?php
								$image = get_field('pic6');
								$url = $image['sizes']['medium'];
								$width = $image['sizes']['medium-width'];
								$height = $image['sizes']['medium-height'];
								?>
								<img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" /><br />

								<?php
								$image = get_field('pic7');
								$url = $image['sizes']['medium'];
								$width = $image['sizes']['medium-width'];
								$height = $image['sizes']['medium-height'];
								?>
								<img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" /><br />

								<?php
								$image = get_field('pic8');
								$url = $image['sizes']['medium'];
								$width = $image['sizes']['medium-width'];
								$height = $image['sizes']['medium-height'];
								?>
								<img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" /><br />

								<!--コンテンツ-->
								<div class="content">

									<?php the_content(); ?>
								</div>

								<!--メーター-->

								<!--基本情報-->
								<span><?php the_field('name') ?></span><br />
								<span><?php the_field('address') ?></span><br />
								<a href="tel:"><?php the_field('TEL') ?></a><br />
								<span><?php if (get_field('yoyaku')) : ?>
										予約出来ます
									<?php else : ?>
										予約できません
									<?php endif; ?></span><br />
								<span><?php the_field('access') ?></span><br />
								<span><?php the_field('time') ?></span><br />
								<span><?php the_field('pay') ?></span><br />
								<span><?php the_field('seat') ?></span><br />
								<span><?php the_field('smoke') ?></span><br />
								<span><?php the_field('space') ?></span><br />
								<a href="<?php the_field('HP_SNS') ?>"><?php the_field('HP_SNS') ?></a><br />

								<!--食べレポ-->
								<?php the_field('taberepo'); ?>

								<!--カテゴリー一覧に戻るボタン-->
								<a href="<?php  ?>" <?php endwhile; ?> <?php endif; ?> <?php
																						//メニューの投稿タイプ
																						//taxonomyの取得
																						$taxonomy_name  = get_query_var('taxonomy');
																						//termの取得
																						$term_var = get_query_var('term');

																						//ランダム表示・付近のおすすめ未実装
																						$args = array(
																							'post_type' => 'shop',
																							'orderby' => 'rand',
																							'posts_per_page' => 4,
																							'taxonomy' => $taxonomy_name,
																							'term' => $term_var,
																						);

																						$the_query = new WP_Query($args);
																						if ($the_query->have_posts()) :
																						?> <?php while ($the_query->have_posts()) : $the_query->the_post(); ?> <div class="col-md-3">
									<?php get_template_part('template-parts/loop', 'menu'); ?>

					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : '検索結果がありませんでした'; ?>

			<?php endif; ?>
				</div>

				<div class="col-12 col-md-6">
					<div class="article_pic">

					</div>
				</div>
			</div>
		</div>
		</article>
		</div>
	</section>
</main>

<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
