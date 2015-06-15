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

<div class="page-content generic-room">
    <section class="content inside-room home-rooms">
        <article class="image-frame">
            <div class="frame-inside"data-transition="crossfade">
                <div class="fotorama fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--no-controls" data-nav="false" data-autoplay="true" data-arrows="true" data-click="true" data-swipe="true" data-allowfullscreen="true" data-loop="true" data-stopautoplayontouch="true"  data-width="100%" data-ratio="1432/577">
                    <div class="featured-content">
                        <div class="info-room-featured">
                            <h3>Quarto Rainha D. Maria II</h3>
                            <p>Bedroom with wooden floors and stuccowork ceiling with flowers enhanced with shades of strawberry.</p>
                            <a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/queen" target="_self"><button>VER DETALHES</button></a>
                        </div>
                        <div class="transparent-shadow" style="background-color: rgba(0, 0, 0, .5)"></div>
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/historic/queen-maria/historic-queen-maria-01.jpg">
                    </div>
                    <div class="featured-content">
                        <div class="info-room-featured">
                            <h3>Quarto Rei D. Fernando II</h3>
                            <p>Bedroom with wooden floors and stuccowork ceiling.</p>
                            <a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/king" target="_self"><button>VER DETALHES</button></a>
                        </div>
                        <div class="transparent-shadow" style="background-color: rgba(0, 0, 0, .5)"></div>
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/suites-and-rooms/historic/king-fernando/historic-king-fernando-01.jpg">
                    </div>
                    <div class="featured-content">
                        <div class="info-room-featured">
                            <h3>Quarto da Serra de Sintra</h3>
                            <p>Bedroom with wooden floors and views to the Príncipe Real garden.</p>
                            <a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/sintra" target="_self"><button>VER DETALHES</button></a>
                        </div>
                        <div class="transparent-shadow" style="background-color: rgba(0, 0, 0, .5)"></div>
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/suites-and-rooms/historic/sintra/historic-sintra-01.jpg">
                    </div>
                    <div class="featured-content">
                        <div class="info-room-featured">
                            <h3>Quarto das Viagens</h3>
                            <p>Bedroom with wooden floor and stuccowork ceiling enhanced with shades of blue.</p>
                            <a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/voyages" target="_self"><button>VER DETALHES</button></a>
                        </div>
                        <div class="transparent-shadow" style="background-color: rgba(0, 0, 0, .5)"></div>
                        <img alt="destaque 4" src="<?php echo "$basePath"; ?>images/suites-and-rooms/historic/voyages/historic-voyages-01.jpg">
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="app-history inside-room home-rooms">
        <div class="description offset">
            <p class="small-text">Quartos e suites de charme com o conforto moderno de um hotel, numa localização premium no centro histórico de Lisboa</p>
        </div><div class="text-content">
            <div class="description-location positionsys"><p>A Casa do Príncipe leva o seu nome após o Prince Real , o Rei D. Pedro V , cuja história dá o tom para a sua estadia inesquecível em Lisboa. Cada um dos 9 quartos e suites, em estilo palaciano, recordam uma parte da vida deste Príncipe.</p></div>
        </div>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        require(['approominfo','appmenu'],function(module,appmenu){
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