<?php theme_include('partials/header'); ?>

		<h1>Suchergebnisse für &ldquo;<?php echo search_term(); ?>&rdquo;:</h1>

		<?php if(has_search_results()): ?>
			<ul class="results">
				<?php $i = 0; while(search_results()): $i++; ?>
				<li>
					<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
						<article>
							<h2>
								<?php echo article_title(); ?>
							</h2>
							<?php echo article_description(); ?>
						</article>
					</a>
				</li>
				<?php endwhile; ?>
			</ul>
	
			<?php if(has_pagination()): ?>
			<nav class="pagination" role="pagination">
					<?php echo search_prev('Zurück'); ?>
					<?php echo search_next('Weiter'); ?>
			</nav>
			<?php endif; ?>
		
		<?php else: ?>
			<span class="noresults">Nichts gefunden.</span>
		<?php endif; ?>

<?php theme_include('partials/footer'); ?>