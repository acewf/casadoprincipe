<?php
if (!isset($basePath)) {
    $folder = '/';
    $basePath = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$folder; 
}
?>
<li><a href="<?php echo "$basePath"; ?>historic/queen">Queen D. Maria II Room</a></li>
<li><a href="<?php echo "$basePath"; ?>historic/king">King D. Fernando II Room</a></li>
<li><a href="<?php echo "$basePath"; ?>historic/sintra">Sintra Mountains Room</a></li>
<li><a href="<?php echo "$basePath"; ?>historic/voyages">Voyages Room</a></li>
<li class="active"><span></span><a href="../">GO BACK</a></li>