<?php
if (!isset($basePath)) {
    $folder = '/';
    if($_SERVER['SERVER_NAME']==='127.0.0.1'){
        $basePath = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$folder; 
    } else {
        $basePath = 'http://'.$_SERVER['SERVER_NAME'].$folder; 
    }
    $findme = '/';
    $mystring = $_SERVER['HTTP_REFERER'];
    $mystring = substr($mystring, strlen($basePath));
    $pos = strpos($mystring, $findme);
    $lang = substr($mystring, 0,$pos+1);
}
?>
<li><a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/queen">Queen D. Maria II Room</a></li>
<li><a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/king">King D. Fernando II Room</a></li>
<li><a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/sintra">Sintra Mountains Room</a></li>
<li><a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/voyages">Voyages Room</a></li>
<li class="active"><span></span><a href="<?php echo $basePath.$lang; ?>suites-rooms">Historic Rooms</a></li>