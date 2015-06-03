<nav class="sub-menu">
	<ul class="suite menupos">
		<?php 
		if (($path=='quarto-ui') || ($path=='quarto-detail-ui-royal') || ($path=='quarto-detail-ui') || ($path=='quarto-ui-info') ) {
			include(dirname(__FILE__).'/sub-menu-rooms.php');
		} else if (($path=='casa-do-principe-ui') || ($path=='facilities-services-ui')) {
			# code...
		} 
		?>
	</ul>
	<ul class="room-choose">
	</ul>
</nav>