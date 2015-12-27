<?php get_header(); ?>
<!-- // <?php include TEMPLATEPATH . '/logo.php' ?>
 --> 	

	<div class="Cat">
		<h1 class="Cat-h1"> <?php single_cat_title( '', true ); ?>
		</h1>
		<article class="Cat-article">
		<?php rewind_posts(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="Cat-headerPost">
				<h2 class="Cat-title">
					<a href="<?php the_permalink(); ?>"> 
						<?php the_title(); ?>
					</a>
				</h2>
				<div class="Cat-data">
					<div><?php the_date(); ?></div>
					<i>por <strong><?php the_author(); ?></strong></i>
				</div>
			</div>
			<div class="Cat-content">
				<figure>
					<?php the_post_thumbnail('cat'); ?>
				</figure>
				<div class="p">
					<?php echo get_the_other_excerpt(); ?>
			    </div>
			</div>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
				<h3>No se encontraron entradas</h3>
			<!-- no posts found -->
			<?php endif; ?>
		</article>
	<div class="Cat-navigation">
		<span><?php next_posts_link('&laquo; Older Entries') ?></span>
		<span><?php previous_posts_link('Newer Entries &raquo;') ?></span>
	</div>
	


		
			
	</div>