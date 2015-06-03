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
<li><a data-rooms="imperial" href="<?php echo "$basePath"; ?>suites-rooms/imperial">IMPERIAL SUITE</a></li>
<li><a data-rooms="royal" href="<?php echo "$basePath"; ?>suites-rooms/royal">ROYAL SUITES</a></li>
<li><a data-rooms="premium" href="<?php echo "$basePath"; ?>suites-rooms/premium">PREMIUM ROOMS</a></li>
<li><a data-rooms="historic" href="<?php echo "$basePath"; ?>suites-rooms/historic">HISTORIC ROOMS</a></li>