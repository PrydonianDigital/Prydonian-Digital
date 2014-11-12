<?php get_header(); ?>

<div class="row">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="mobile-12 medium-12 large-12 columns">
		
		<h2><?php the_title(); ?>
		
	</div>

<?php endwhile; ?>

<?php endif; ?>

</div>

<?php get_footer(); ?>