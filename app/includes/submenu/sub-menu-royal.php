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
<li><a href="<?php echo "$basePath"; ?>suites-rooms/royal/queen">Suite Rainha D. Estefânia</a></li>
<li><a href="<?php echo "$basePath"; ?>suites-rooms/royal/palace">Suite Palácio</a></li>
<li class="active"><span></span><a href="<?php echo "$basePath"; ?>suites-rooms">Suites Reais</a></li>
=======
<li><a href="<?php echo $basePath.$lang; ?>suites-rooms/royal/queen">Queen D.Estefânia Suite</a></li>
<li><a href="<?php echo $basePath.$lang; ?>suites-rooms/royal/palace">Palace Suite</a></li>
<li class="active"><span></span><a href="<?php echo $basePath.$lang; ?>suites-rooms"><p>Royal Suites</p><p>suites and rooms</p></a></li>
>>>>>>> a0c03b28ce75073e97a855b60ac297ae9fbcde3b
