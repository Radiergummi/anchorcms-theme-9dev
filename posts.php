<?php theme_include('partials/header'); ?>

			<?php if(has_posts()) : while(posts()) : ?>
				<article class="blogpost">
					<a data-pjax href="<?php echo article_url(); ?>">
						<header>
							<h2><? echo article_title(); ?></h2>
							<time><? echo article_german_date(); ?></time>
						</header>
						<p><?php echo article_description(); ?></p>
						<span class="readmore" title="<? echo article_title(); ?>">Weiterlesen</span>
					</a>
				</article>
			<?php endwhile; endif; ?>
		
		<?php if(has_pagination()) : ?>
	    <nav class="pagination" aria-label="Pagination">
        <?php echo posts_prev('Ältere'); ?>
        <?php echo posts_next('Neuere'); ?>
	    </nav>
		<?php endif; ?>

<?php theme_include('partials/footer'); ?>