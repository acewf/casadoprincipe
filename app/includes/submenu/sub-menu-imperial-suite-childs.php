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
<li><a href="<?php echo "$basePath"; ?>suites-rooms/imperial/queen">SUITE REI D. PEDRO V</a></li><!--King D. Pedro V Suite-->
<li class="active"><span></span><a href="<?php echo "$basePath"; ?>suites-rooms">Suite Imperial</a></li>