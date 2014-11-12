<?php get_header(); ?>

<div class="row" id="fullpage">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="column-12 section">
		
		<h2><?php the_title(); ?></h2>
		
		<?php the_content(); ?>
		
	</div>
<?php
	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order', 'sort_order' => 'asc' ) );

	foreach( $mypages as $page ) {		
		$content = $page->post_content;
		if ( ! $content )
			continue;
		$content = apply_filters( 'the_content', $content );
	?>
	<div class="column-12 section">
		<h2><?php echo $page->post_title; ?></h2>
		<?php echo $content; ?>
	</div>
	<?php
	}	
?>
<?php endwhile; ?>

<?php endif; ?>

</div>

<?php get_footer(); ?>