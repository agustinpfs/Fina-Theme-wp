<div class="RecentPosts">
	<h3 class="RecentPosts-h3">Recientes</h3>
	<?php rewind_posts(); ?>
	<?php query_posts('posts_per_page=5'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="RecentPosts-content">
		<a href="<?php the_permalink(); ?>">
			<figure>
				<?php the_post_thumbnail('custom'); ?>
			</figure>
			<div class="RecentPosts-title">
				
					<?php the_title(); ?>
				<small><?php echo get_the_date(); ?></small>			
			</div>
		</a>
	</div>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
	<h3>No se encontraron entradas</h3>
<!-- no posts found -->
<?php endif; ?>
</div>