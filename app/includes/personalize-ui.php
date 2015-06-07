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
<style>
  #map-canvas {
    width: 100%;
    height: 600px;
  }
</style>
<div class="page-content location">
    <section class="content">
        <div id="map-canvas"></div>
    </section>         
</div>
<script>
if (typeof requirejs == 'function') {
    requirejs(['personalize'],function(module){
        try{
            module.init();
        }catch(err) {
            console.log(err.message);
        }  
    });
}
</script>