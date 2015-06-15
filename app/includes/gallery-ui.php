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
                <div class="fotorama" data-allowfullscreen="native" data-allowfullscreen="true" 
                data-width="100%" data-ratio="1660/660" data-minwidth="80%" data-maxwidth="100%" data-fit="cover" data-minheight="90%" data-maxheight="93%" data-nav="thumbs" data-thumbheight="68">
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/01.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/01.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/02.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/02.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/03.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/03.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/04.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/04.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/05.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/05.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/06.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/06.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/07.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/07.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/08.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/08.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/09.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/09.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/10.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/10.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/11.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/11.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/12.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/12.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/13.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/13.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/14.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/14.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/15.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/15.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/16.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/16.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/17.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/17.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/18.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/18.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/19.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/19.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/20.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/20.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/21.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/21.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/22.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/22.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/23.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/23.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/24.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/24.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/25.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/25.jpg" width="144" height="68"></a>
                    <a href="<?php echo "$basePath"; ?>images/fotos-galeria/26.jpg"><img src="<?php echo "$basePath"; ?>images/fotos-galeria/thumbs/26.jpg" width="144" height="68"></a>
                </div>
            </div>
        </article>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        requirejs(['gallery','appmenu'],function(module,appmenu){
            try{
                appmenu.addModule(module);
                module.init();
            }catch(err) {
                console.log(err.message);
            }
        });
    }
    </script>
</div>