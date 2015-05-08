<?php theme_include('partials/header'); ?>
	<article class="post-body page">
		<header class="hero">
			<h1><?php echo page_title(); ?></h1>
		</header>
    <?php echo page_content(); ?>
	</article>
<?php theme_include('partials/footer'); ?>