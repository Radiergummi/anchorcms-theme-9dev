<?php theme_include('partials/header'); ?>
		<article class="post">
			<header class="hero">
				<h1><?php echo article_title(); ?></h1>
				<time><?php echo article_german_date(); ?></time>
			</header>
			<?php echo article_markdown(); ?>

			<footer class="meta"></footer>
			<?php if (comments_open()): ?>
			<section class="comments">
				<h2>Kommentare</h2>
				<?php if (has_comments()) { ?>
					<?php $i = 0; while (comments()): $i++; ?>
					<article class="comment" id="comment-<?php echo comment_id(); ?>">
						<header>
							<h2><?php echo comment_name(); ?>
								<time datetime="<?php echo date('Y-m-d\TH:i:sP', comment_time()); ?>">
									<?php echo date("d.m.Y", comment_time()); ?> <span><?php echo date("H:i", comment_time()); ?></span>
								</time>
							</h2>
							<a href="#comment-<?php echo comment_id(); ?>" class="counter">#<?php echo $i; ?></a>
						</header>
						<div class="content">
							<?php echo comment_text(); ?>
						</div>
					</article>
					<?php endwhile; ?>
				<?php } else { ?>
					<span class="no-comments">
						Es gibt noch keine Kommentare.
					</span>
				<?php }?>
				<?php endif; ?>
	
	
	
				<!-- Comment Form -->
				<?php if (comments_open()): ?>
					<form id="comment" method="post" action="<?php echo comment_form_url(); ?>#comment">
						<?php echo comment_form_notifications(); ?><!-- Error notifications -->
						<?php echo comment_form_input_name('placeholder="NAME" required'); ?>
						<?php echo comment_form_input_email('placeholder="EMAIL-ADRESSE" required', $extra = ''); ?>
						<?php echo comment_form_input_text('placeholder="KOMMENTAR" required'); ?>
						<?php echo comment_form_button($text = 'ABSENDEN', $extra = ''); ?>
					</form>
				<?php endif; ?>
			</section>
		</article>

<?php theme_include('partials/footer'); ?>