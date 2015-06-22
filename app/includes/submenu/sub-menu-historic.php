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
<li><a href="<?php echo "$basePath"; ?>suites-rooms/historic/queen">Quarto Rainha D. Maria II</a></li>
<li><a href="<?php echo "$basePath"; ?>suites-rooms/historic/king">Quarto Rei D. Fernando II</a></li>
<li><a href="<?php echo "$basePath"; ?>suites-rooms/historic/sintra">Quarto da Serra de Sintra</a></li>
<li><a href="<?php echo "$basePath"; ?>suites-rooms/historic/voyages">Quarto das Viagens</a></li>
<li class="active"><span></span><a href="<?php echo "$basePath"; ?>suites-rooms">Historic Rooms</a></li>
=======
<li><a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/queen">Queen D. Maria II Room</a></li>
<li><a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/king">King D. Fernando II Room</a></li>
<li><a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/sintra">Sintra Mountains Room</a></li>
<li><a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/voyages">Voyages Room</a></li>
<li class="active"><span></span><a href="<?php echo $basePath.$lang; ?>suites-rooms"><p>Historic Rooms</p><p>suites and rooms</p></a></li>
>>>>>>> a0c03b28ce75073e97a855b60ac297ae9fbcde3b
