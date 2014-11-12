<?php get_header(); ?>

<div class="row" id="fullpage">
	
	<div class="column-12 section">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div class="row">
				<div class="column-12 slide">
					
					<h2><?php the_title(); ?>
					<?php the_content(); ?>
				</div>
			</div>
		
		<?php endwhile; ?>
		
		<?php endif; ?>

	</div>

</div>

<?php get_footer(); ?>