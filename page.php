<?php get_header('pages'); ?>
		<main class="container-fluid mt-4">
			<?php
				while (have_posts()): 
					the_post();
					the_content();
				endwhile; 
			?>
		</main>
<?php get_footer(); ?>