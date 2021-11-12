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
			<div class="article article-menu">
				<div class="row">
					<div class="col-12 col-md-6">
						<h2 class="article_title"><?php the_title(); ?></h2>
						<span><?php $pic = get_field('map'); ?></span>
						<div class="content">

							<?php the_content(); ?>
						</div>
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
