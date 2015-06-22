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
<li><a href="<?php echo "$basePath"; ?>suites-rooms/historic/queen">Quarto Rainha D. Maria II</a></li>
<li><a href="<?php echo "$basePath"; ?>suites-rooms/historic/king">Quarto Rei D. Fernando II</a></li>
<li><a href="<?php echo "$basePath"; ?>suites-rooms/historic/sintra">Quarto da Serra de Sintra</a></li>
<li><a href="<?php echo "$basePath"; ?>suites-rooms/historic/voyages">Quarto das Viagens</a></li>
<li class="active"><span></span><a href="<?php echo "$basePath"; ?>suites-rooms">Historic Rooms</a></li>