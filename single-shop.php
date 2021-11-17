<!-- header.phpをインクルードする -->
<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>




<main class="main">
	<section class="sec">
		<div class="container">

			<!--タグ表示機能-->
			<?php
			$terms = get_the_terms(get_the_ID(), 'shop_tag');
			foreach ($terms as $term) :
				echo $term->name . ' ';
			endforeach;
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
								<!--雰囲気-->
								<?php if (get_field('mood') == 'mood1') : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/雰囲気メーター/hunniki_meter_1.jpg" alt="">
								<?php elseif (get_field('mood') == 'mood2') : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/雰囲気メーター/hunniki_meter_2.jpg" alt="">
								<?php elseif (get_field('mood') == 'mood3') : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/雰囲気メーター/hunniki_meter_3.jpg" alt="">
								<?php elseif (get_field('mood') == 'mood4') : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/雰囲気メーター/hunniki_meter_4.jpg" alt="">
								<?php else : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/雰囲気メーター/hunniki_meter_5.jpg" alt="">
								<?php endif; ?>


								<!--麺-->
								<?php if (get_field('men') == 'men1') : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/麺メーター/menn_meter_1.jpg" alt="">
								<?php elseif (get_field('men') == 'men2') : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/麺メーター/menn_meter_2.jpg" alt="">
								<?php elseif (get_field('men') == 'men3') : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/麺メーター/menn_meter_3.jpg" alt="">
								<?php elseif (get_field('men') == 'men4') : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/麺メーター/menn_meter_4.jpg" alt="">
								<?php else : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/麺メーター/menn_meter_5.jpg" alt="">
								<?php endif; ?>

								<!--つゆ・出汁-->
								<?php if (get_field('tuyu') == 'tuyu1') : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/つゆメーター/tuyu_meter_1.jpg" alt="">
								<?php elseif (get_field('tuyu') == 'tuyu2') : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/つゆメーター/tuyu_meter_2.jpg" alt="">
								<?php elseif (get_field('tuyu') == 'tuyu3') : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/つゆメーター/tuyu_meter_3.jpg" alt="">
								<?php elseif (get_field('tuyu') == 'tuyu4') : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/つゆメーター/tuyu_meter_4.jpg" alt="">
								<?php else : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/つゆメーター/tuyu_meter_5.jpg" alt="">
								<?php endif; ?>

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

								<!--地図-->
								<?php the_field('map') ?></br>

								<!--食べレポ-->
								<?php the_field('taberepo'); ?>

								<!--カテゴリー一覧に戻るボタン-->
								<?php $udontype = ""; ?>
								<?php foreach ($terms as $term) {
									$udontype = $term->slug;
								} ?>
								<a href="<?php echo esc_url(home_url('/archives/shop_type/' . $udontype)); ?>">店舗一覧にもどる</a>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php
						//メニューの投稿タイプ
						//taxonomyの取得
						$taxonomy_name  = get_query_var('taxonomy');

						//カテゴリ(地域)の取得
						$areas = get_the_terms(get_the_ID(), 'shop_area');
						$taxonomy_name = '';
						foreach ($areas as $area) :
							echo $area->slug;
							$taxonomy_name = $area->slug;
						endforeach;


						//同じ地域ランダム表示
						$args = array(
							'post_type' => 'shop',
							'orderby' => 'rand',
							'posts_per_page' => 4,
							'tax_query' => array(
								array(
									'taxonomy' => 'shop_area',
									'field' => 'slug',
									'terms' => $taxonomy_name
								)
							)
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
