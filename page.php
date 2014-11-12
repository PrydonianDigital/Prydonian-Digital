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

	<div class="column-12 section">
		<?php
		// WP_Query arguments
		$args = array (
			'post_type' => 'post',
		);
		// The Query
		$endorsements = new WP_Query( $args );
		// The Loop
		if ( $endorsements->have_posts() ) {
			while ( $endorsements->have_posts() ) {
				$endorsements->the_post();
		?>
		
		<div class="row">
			<div class="column-12 slide">
				
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
		</div>
	
		<?php
			}
		} else {
				// no posts found
		}
		// Restore original Post Data
		wp_reset_postdata();
		?>

	</div>

</div>

<?php get_footer(); ?>