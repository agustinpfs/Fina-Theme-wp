
<?php get_header(); ?>


<main class="Index">
		<?php rewind_posts(); ?>
		<?php query_posts('cat=2'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="Index-article">
			<figure>
				<?php the_post_thumbnail(medium); ?>
			</figure>
				<div class="Index-title">
					<a href="<?php the_permalink(); ?>"> 
						<?php the_title(); ?>
					</a>
				</div>		
		</article>

		
		
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
		<h3>No se encontraron entradas</h3>
	<!-- no posts found -->
	<?php endif; ?>

</main>

