<nav class="sub-menu">
	<ul class="suite menupos">
		<?php 
		require_once dirname(__FILE__).'/../../includes/address-filter.php';
		$Adress = new AdressChecker();
		$items = $Adress->getPaths();
		for ($i=0; $i <count($items) ; $i++) {
			if (($items[$i]->level!=null) && ($path==$items[$i]->path)) {
				include(dirname(__FILE__).'/sub-menu-rooms.php');
			}			
		}
		?>
	</ul>
	<ul class="room-choose">
	</ul>
</nav>