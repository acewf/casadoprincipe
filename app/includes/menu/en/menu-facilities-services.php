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
<li><a data-rooms="imperial" href="<?php echo $basePath.$lang; ?>casa-do-principe">CASA DO PRINCIPE</a></li>
<li><a data-rooms="royal" href="<?php echo $basePath.$lang; ?>facilities-services">FACILITIES &amp; SERVICES</a></li>
<li><a data-rooms="premium" href="<?php echo $basePath.$lang; ?>history">HISTORY - WHO WAS THE ROYAL PRINCE</a></li>