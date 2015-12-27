<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('description'); ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url ); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	
	<div class="Single">
		<?php include TEMPLATEPATH . '/logo.php' ?>
		<hr class="Single-hr">						

 		<?php rewind_posts(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>				
		<article class="Single-article">
								
<!-- 			// <?php include TEMPLATEPATH . '/contact.php' ?>
 -->			
			
			<div class="Single-content">
			<h1 class="Single-title">
				<?php the_title(); ?>						
			</h1>				
			<figure>
				<?php the_post_thumbnail(large); ?>
			</figure>
				<div class="Single-data">
					<div><?php the_date(); ?></div>
					<i><small>por</small> <strong><?php the_author(); ?></strong></i>
				</div> 
			     <?php the_content(); ?>
			     <div class="Single-data Single-data--footer">
 					<span>Categoría</span>
 					<a href="#"><?php the_category(); ?></a>
				</div>
				<div class="Single-comments">
					<?php comments_template(); ?>
				</div>
			</div>			
				
					
		</article>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
				<h3>No se encontraron entradas</h3>
			<!-- no posts found -->
			<?php endif; ?>
		
	
	</div>
	<div id="sidebar" class="Sidebar">
		<?php include TEMPLATEPATH . '/sidebar.php' ?>
	</div>

	
<?php get_footer(); ?>

</body>




