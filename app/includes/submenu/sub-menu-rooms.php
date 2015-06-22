<?php
 header('Access-Control-Allow-Origin: *');  

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
<<<<<<< HEAD
<li><a data-rooms="imperial" href="<?php echo "$basePath"; ?>suites-rooms/imperial/queen">SUITE IMPERIAL</a></li>
<li><a data-rooms="royal" href="<?php echo "$basePath"; ?>suites-rooms/royal">SUITES REAIS</a></li>
<li><a data-rooms="premium" href="<?php echo "$basePath"; ?>suites-rooms/premium">PREMIUM ROOMS</a></li>
<li><a data-rooms="historic" href="<?php echo "$basePath"; ?>suites-rooms/historic">HISTORIC ROOMS</a></li>
=======
<li><a data-rooms="imperial" href="<?php echo $basePath.$lang; ?>suites-rooms/imperial/king">IMPERIAL SUITE</a></li>
<li><a data-rooms="royal" href="<?php echo $basePath.$lang; ?>suites-rooms/royal">ROYAL SUITES</a></li>
<li><a data-rooms="premium" href="<?php echo $basePath.$lang; ?>suites-rooms/premium">PREMIUM ROOMS</a></li>
<li><a data-rooms="historic" href="<?php echo $basePath.$lang; ?>suites-rooms/historic">HISTORIC ROOMS</a></li>
>>>>>>> a0c03b28ce75073e97a855b60ac297ae9fbcde3b
