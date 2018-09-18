<?php get_header('blog'); ?>
		<main class="container-fluid" role="main">
			<section>
				<?php
					while (have_posts()):
						the_post();
						the_content();
					endwhile;
				?>
			</section>
			<sidebar>
				
			</sidebar>
		</main>
<?php get_footer(); ?>
