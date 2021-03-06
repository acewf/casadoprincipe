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
                            <h3>Suite Rainha D. Estefânia</h3>
                            <p>Quarto amplo com área de estar, três grandes janelas e uma varanda com vista para as árvores do Jardim Botânico, que criam um ambiente refrescante e relaxante- apesar de estar no centro da cidade pode ouvir o cantar dos pássaros que por aqui voam.</p>
                            <a href="<?php echo $basePath.$lang; ?>suites-rooms/royal/queen" target="_self"><button>VER DETALHES</button></a>
                        </div>
                        <div class="transparent-shadow"></div>
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/royal-suits/queen-d-estefania/royal-estefania-01.jpg">
                    </div>
                    <div class="featured-content">
                        <div class="info-room-featured">
                            <h3>Suite Palácio</h3>
                            <p>Quarto espaçoso equipado com área de lounge, duas grandes janelas com vista sobre o Jardim do Príncipe Real e uma relaxante atmosfera palaciana.</p>
                            <a href="<?php echo $basePath.$lang; ?>suites-rooms/royal/palace" target="_self"><button>VER DETALHES</button></a>
                        </div>
                        <div class="transparent-shadow"></div>
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/suites-and-rooms/royal-suits/palace-suite/royal-palace-01.jpg">
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
                appmenu.addModule(module,'approominfo');
                module.init();
            }catch(err) {
                console.log(err.message);
            }               
        });
    } 
    </script>
</div>