<?php
if (!isset($basePath)) {
    $folder = '/';
    $basePath = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$folder; 
}
?>
<li><a href="<?php echo "$basePath"; ?>premium/arts">Arts Room</a></li>
<li><a href="<?php echo "$basePath"; ?>premium/lisbon">Lisbon City Room</a></li>
<li class="active"><span></span><a href="../">GO BACK</a></li>