
<?php get_header(); ?>


<main class="Index">
		<?php rewind_posts(); ?>
		<?php query_posts('cat=2'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="Index-article">
			<figure>
				<?php the_post_thumbnail(large); ?>
			</figure>
			<div class="Index-title">				
				<?php the_title(); ?>				
			</div>
			<div class="Index-excerpt">
				<?php the_excerpt(); ?>
			</div>
		</article>

		
		
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
		<h3>No se encontraron entradas</h3>
	<!-- no posts found -->
	<?php endif; ?>

</main>

<script>

	$( ".Index-article" ).hover(
	  function() {
	    $( this ).find( ".Index-excerpt" ).slideToggle(400)
	  }
	);
	// function showExcerpt() {
	// $( ".Index-excerpt" ).slideToggle(500)



	// }
	// $( ".Index-article" ).hover( showExcerpt )

	// $( ".Header-icon" ).click(function() {
	//   $( ".Header-nav" ).slideToggle( "slow" );
	// });

</script>