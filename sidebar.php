<div class="Sidebar-slide">
	<div class=""></div>
</div>	
<section class="Sidebar-content">
	<?php include TEMPLATEPATH . '/slider-menu.php' ?>
	<?php include TEMPLATEPATH . '/recent-posts.php' ?>
	<?php dynamic_sidebar('unique-sidebar-idt'); ?>
</section>

<script>
	function showSlider() {
	$( ".Sidebar-content" ).addClass('width3')
	$( ".Single-post" ).addClass('respo-post')

	}
	function hiddeSlider() {
	$( ".Sidebar-content" ).removeClass('width3')
	$( ".Single-post" ).removeClass('respo-post')

	}
	// $( ".Sidebar-slide" ).hover(showSlider)
	$( ".Sidebar-slide" ).mouseenter( showSlider ).mouseleave( hiddeSlider );
	$( ".Sidebar-content" ).mouseenter( showSlider ).mouseleave( hiddeSlider );

	// $( ".Header-icon" ).click(function() {
	//   $( ".Header-nav" ).slideToggle( "slow" );
	// });

</script>