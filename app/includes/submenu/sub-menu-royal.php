<?php
if (!isset($basePath)) {
    $folder = '/';
    $basePath = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$folder; 
}
?>
<li><a href="<?php echo "$basePath"; ?>suites-rooms/royal/queen">Queen D.Estefânia Suite</a></li>
<li><a href="<?php echo "$basePath"; ?>suites-rooms/royal/palace">Palace Suite</a></li>
<li class="active"><span></span><a href="<?php echo "$basePath"; ?>suites-rooms">GO BACK</a></li>