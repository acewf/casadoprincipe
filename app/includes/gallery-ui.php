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
<div class="page-content gallery">
    <section class="content">
        <article class="image-frame">
            <div class="frame-inside" data-transition="crossfade">
                <div class="fotorama" data-allowfullscreen="native" data-allowfullscreen="true" data-width="100%" data-fit="contain" data-ratio="42/23" data-nav="thumbs" data-fit="contain" data-thumbheight="96">
                    <a href="<?php echo "$basePath"; ?>images/destaque-room.png"><img src="<?php echo "$basePath"; ?>images/thumbs/destaque-room.png" width="144" height="96"></a>
                    <a href="<?php echo "$basePath"; ?>images/foto-varanda.jpg"><img src="<?php echo "$basePath"; ?>images/thumbs/foto-varanda.jpg" width="144" height="96"></a>
                    <a href="<?php echo "$basePath"; ?>images/streetview.jpg"><img src="<?php echo "$basePath"; ?>images/thumbs/streetview.jpg" width="144" height="96"></a>
                    <a href="<?php echo "$basePath"; ?>images/destaque-room.png"><img src="<?php echo "$basePath"; ?>images/thumbs/destaque-room.png" width="144" height="96"></a>
                </div>
            </div>
        </article>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        requirejs(['gallery'],function(module){
            try{
                module.init();
            }catch(err) {
                console.log(err.message);
            }  
        });
    }
    </script>
</div>