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
<li><a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/queen">Quarto Rainha D. Maria II</a></li>
<li><a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/king">Quarto Rei D. Fernando II</a></li>
<li><a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/sintra">Quarto da Serra de Sintra</a></li>
<li><a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/voyages">Quarto das Viagens</a></li>
<li class="active"><span></span><a href="<?php echo $basePath.$lang; ?>suites-rooms"><p>QUARTOS HISTÓRICOS</p><p>Quartos e suites</p></a></li>