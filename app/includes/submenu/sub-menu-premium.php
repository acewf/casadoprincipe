<?php
if (!isset($basePath)) {
    $folder = '/';
    if($_SERVER['SERVER_NAME']==='127.0.0.1'){
        $basePath = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$folder; 
    } else {
        $basePath = 'http://'.$_SERVER['SERVER_NAME'].$folder; 
    }
}
?>
<li><a href="<?php echo "$basePath"; ?>suites-rooms/premium/arts">Arts Room</a></li>
<li><a href="<?php echo "$basePath"; ?>suites-rooms/premium/lisbon">Lisbon City Room</a></li>
<li class="active"><span></span><a href="<?php echo "$basePath"; ?>suites-rooms">Premium Rooms</a></li>