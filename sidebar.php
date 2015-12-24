
	<div class="Sidebar-slide">
		<div class=""></div>
	</div>
	<section class="Sidebar-content">
		<?php include TEMPLATEPATH . '/slider-menu.php' ?>
		<?php include TEMPLATEPATH . '/recent-posts.php' ?>
		<?php include TEMPLATEPATH . '/recent-posts.php' ?>
		<?php include TEMPLATEPATH . '/recent-posts.php' ?>
		<?php include TEMPLATEPATH . '/recent-posts.php' ?>
		<?php include TEMPLATEPATH . '/recent-posts.php' ?>
		<?php include TEMPLATEPATH . '/recent-posts.php' ?>
		<?php include TEMPLATEPATH . '/recent-posts.php' ?>
		<?php include TEMPLATEPATH . '/recent-posts.php' ?>
		<?php include TEMPLATEPATH . '/recent-posts.php' ?>
		<?php dynamic_sidebar('unique-sidebar-idt'); ?>
	</section>

<script>
	function showSlider() {
	$( ".Sidebar" ).toggleClass('slide-menu')
	// $( ".Single-post" ).addClass('respo-post')

	}
	// function hiddeSlider() {
	// $( ".Sidebar" ).removeClass('width3')
	// $( ".Single-post" ).removeClass('respo-post')

	// }
	// $( ".Sidebar" ).on("click", showSlider)
	// $( ".Sidebar" ).mouseenter( showSlider ).mouseleave( hiddeSlider );
	$( ".Sidebar" ).mouseenter( showSlider ).mouseleave( showSlider );
	// $( ".Sidebar-content" ).mouseenter( showSlider ).mouseleave( hiddeSlider );

	// $( ".Header-icon" ).click(function() {
	//   $( ".Header-nav" ).slideToggle( "slow" );
	// });

</script>