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
<li><a href="<?php echo "$basePath"; ?>suites-rooms/premium/arts">Quarto das Artes</a></li>
<li><a href="<?php echo "$basePath"; ?>suites-rooms/premium/lisbon">Quarto da Cidade de Lisboa</a></li>
<li class="active"><span></span><a href="<?php echo "$basePath"; ?>suites-rooms">Quartos Premium</a></li>