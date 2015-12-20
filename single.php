<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('description'); ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url ); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<main class="Single">
<!-- <div class="Single-header">
</div> -->
	<section class="Single-post">
 		<?php rewind_posts(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="Single-article">
				<div class="Single-logo">
					<figure>
						<h1 class="Single-h1">F</h1>
					</figure>
					<h2><?php bloginfo('description' ); ?></h2>
				</div>	
			<?php include TEMPLATEPATH . '/contact.php' ?>
				<header class="Single-header">
					<h1 class="Single-title">						
							<?php the_title(); ?>						
					</h1>
					<!-- <div class="Post-data">
						<small><?php the_date(); ?></small>
						<i>por <strong><?php the_author(); ?></strong></i>
					</div> -->
				</header>
				
				<div class="Single-content">
					<figure>
						<?php the_post_thumbnail(large); ?>
					</figure>
				     <?php the_content(); ?>
				</div>
			
				<div class="Post-data Post-data--footer  ">
					<div class="Post-cat">
	 					<span>Categoría</span>
	 					<small><?php the_category(); ?></small>
 					</div> 					
 					<small><em><?php comments_number() ?></em></small>
				</div>			
			</article>

			
			
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
			<h3>No se encontraron entradas</h3>
		<!-- no posts found -->
		<?php endif; ?>
		<div class="Single-comments">
			<?php comments_template(); ?>
		</div>


	</section>
	<div class="Post-sidebar">
		<?php include TEMPLATEPATH . '/sidebar.php' ?>
	</div>


</main>
<?php get_footer(); ?>



