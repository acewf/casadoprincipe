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
<<<<<<< HEAD
<li><a href="<?php echo "$basePath"; ?>suites-rooms/premium">King D. Pedro V</a></li>
<li class="active"><span></span><a href="<?php echo "$basePath"; ?>suites-rooms">Suite Imperial</a></li>
=======
<li><a href="<?php echo $basePath.$lang; ?>suites-rooms/premium">King D. Pedro V</a></li>
<li class="active"><span></span><a href="<?php echo $basePath.$lang; ?>suites-rooms"><p>Imperial Suite</p><p>suites and rooms</p></a></li>
>>>>>>> a0c03b28ce75073e97a855b60ac297ae9fbcde3b
