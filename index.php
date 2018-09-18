<?php get_header('main'); ?>
		<main class="container-fluid">
			<div class="row justify-content-center mt-4">
				<?php
					while (have_posts()): 
						the_post();
						the_content();
					endwhile; 
				?>
			</div>
		</main>
<?php get_footer(); ?>
