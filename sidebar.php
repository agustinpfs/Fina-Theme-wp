	<!-- <span class="close"><strong>X</strong></span> -->
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
	$( ".Sidebar" ).addClass('slide-menu')
	// $( ".close" ).addClass('x')
	// $( ".Single-post" ).addClass('respo-post')

	}
	// function hiddeSlider() {
	// $( ".Sidebar" ).removeClass('slide-menu')
	// $( ".close" ).removeClass('x')

	// // $( ".Single-post" ).removeClass('respo-post')

	// }
	// $( ".close" ).on("click", showSlider)
	// $( ".Sidebar" ).mouseenter( showSlider ).mouseleave( hiddeSlider );
	$( ".Sidebar" ).mouseenter( showSlider )
	// $( ".Sidebar-content" ).mouseenter( showSlider ).mouseleave( hiddeSlider );

	// $( ".Header-icon" ).click(function() {
	//   $( ".Header-nav" ).slideToggle( "slow" );
	// });

	$(document).click(function() {

	  if( this.id != 'sidebar') {
	    $("#sidebar").removeClass('slide-menu');
	  }

	});

</script>