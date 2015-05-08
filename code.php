<?php theme_include('partials/header'); ?>
	<!-- Custom Template -->
		<section class="content page">
			<figure class="post-image">
				<img src="/content/img_0005.JPG"/>
				<figcaption>
					<h1><?php echo page_title(); ?></h1>
				</figcaption>
			</figure>
			<article class="page-body">
			    <h1><?php echo page_title(); ?></h1>
			    <?php echo page_content(); ?>
			</article>
		</section>

<?php theme_include('partials/footer'); ?>