<footer class="Footer">
	<div class="Footer-top">
		<aside class="Footer-social">
			<ul>
				<li class="Footer-facebook"><a href=""><img src="" alt=""></a></li>
				<li class="Footer-twitter"><a href=""><img src="" alt=""></a></li>
				<li class="Footer-instagram"><a href=""><img src="" alt=""></a></li>
				<li class="Footer-youtube"><a href=""><img src="" alt=""></a></li>
			</ul>
		</aside>
		<aside class="Footer-suscribe">
			<small></small>
			<input type="text">
		</aside>
		<aside class="Footer-menu">
				<?php
			    wp_nav_menu(
			        array(
			            'theme_location' => 'menu-footer',
			            'container'       => 'nav',
			            'container_class' => 'Footer-nav',
			            'menu_class'      => 'Footer-list'
			            )
			        );
			 ?>
		</aside>
	</div>
	<div class="Footer-bottom"></div>
</footer>