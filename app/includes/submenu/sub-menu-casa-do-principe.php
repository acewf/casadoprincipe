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
<li><a href="<?php echo "$basePath"; ?>casa-do-principe/queen">QUEEN D. ESTEFÂNIA</a></li>
<li class="active"><span></span><a href="<?php echo "$basePath"; ?>casa-do-principe/palace">PALACE</a></li>  