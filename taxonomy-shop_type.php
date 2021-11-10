<!-- header.phpをインクルードする -->
<?php get_header(); ?>



<h2 class="pageTitle">店舗一覧<span>麺の種類別</span></h2>
<?php get_template_part('template-parts/breadcrumb'); ?>

<main class="main">
	<?php
	//	開いているページの情報を取得
	$kind_slug = get_query_var('shop_type');
	$shop_type = get_term_by('slug', $kind_slug, 'shop_type');
	?>
	<section class="sec">
		<div class="container">
			<div class="sec_header">
				<h2 class="title title-jp"><?php echo $shop_type->name; ?></h2>
				<span class="title title-en"><?php echo strtoupper($shop_type->slug); ?></span>
			</div>
			<div class="row justify-content-center">

				<!-- メインループの開始 -->
				<?php if (have_posts()) : ?>
					<!-- 繰り返し処理の開始 -->
					<?php while (have_posts()) :  the_post(); ?>
						<div class="col-md-3">
							<?php get_template_part('template-parts/loop', 'menu'); ?>
						</div>
					<?php endwhile; ?>
					<!-- メインループの終了 -->
				<?php endif; ?>
			</div>
		</div>
	</section>
</main>

<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
