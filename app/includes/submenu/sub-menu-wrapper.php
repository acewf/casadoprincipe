<nav class="sub-menu">
	<ul class="suite menupos">
		<?php 
		if ($path!='home-ui') {
			include(dirname(__FILE__).'/sub-menu-rooms.php');
		}
		?>
	</ul>
	<ul class="room-choose">
	</ul>
</nav>