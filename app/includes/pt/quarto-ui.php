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

<div class="page-content generic-room">
    <section class="content inside-room home-rooms">
        <article class="image-frame">
            <div class="frame-inside"data-transition="crossfade">
                <div class="fotorama fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--no-controls" data-nav="false" data-autoplay="true" data-arrows="true" data-click="true" data-swipe="true" data-allowfullscreen="true" data-loop="true" data-stopautoplayontouch="true"  data-width="100%" data-ratio="1432/577">

                  <div class="featured-content">

                        <div class="info-room-featured">
                            <h3>Suite Rei D. Pedro V</h3>
                            <p>Quarto espaçoso com área de estar, varanda com vista sobre o Jardim do Príncipe Real, com três amplas janelas que enchem o quarto de luz natural, criando um ambiente luminoso e relaxante.</p>
                            <a href="<?php echo "$basePath"; ?>suites-rooms/imperial/king" target="_self"><button>VER DETALHES</button></a>
                        </div>
                        <div class="transparent-shadow" style="background-color: rgba(0, 0, 0, .3)"></div>
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/slider-geral/imperial-01.jpg">

                  </div>

                  <div class="featured-content">

                        <div class="info-room-featured">
                            <h3>Suite Rainha D. Estefânia</h3>
                            <p>Quarto amplo com área de estar, três grandes janelas e uma varanda com vista para as árvores do Jardim Botânico, que criam um ambiente refrescante e relaxante- apesar de estar no centro da cidade pode ouvir o cantar dos pássaros que por aqui voam.</p>
                            <a href="<?php echo "$basePath"; ?>suites-rooms/royal/queen" target="_self"><button>VER DETALHES</button></a>
                        </div>
                        <div class="transparent-shadow" style="background-color: rgba(0, 0, 0, .3)"></div>
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/slider-geral/royal-estefania-01.jpg">

                  </div>

                  <div class="featured-content">

                        <div class="info-room-featured">
                            <h3>Suite Palácio</h3>
                            <p>Quarto espaçoso equipado com área de lounge, duas grandes janelas com vista sobre o Jardim do Príncipe Real e uma relaxante atmosfera palaciana.</p>
                            <a href="<?php echo "$basePath"; ?>suites-rooms/royal/palace" target="_self"><button>VER DETALHES</button></a>
                        </div>
                        <div class="transparent-shadow" style="background-color: rgba(0, 0, 0, .3)"></div>
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/slider-geral/royal-palace-01.jpg">

                  </div>

                  <div class="featured-content">

                        <div class="info-room-featured">
                            <h3>Quarto das Artes</h3>
                            <p>Quarto com vista panorâmica para o Jardim do Príncipe Real.</p>
                            <a href="<?php echo "$basePath"; ?>suites-rooms/premium/arts" target="_self"><button>VER DETALHES</button></a>
                        </div>
                        <div class="transparent-shadow" style="background-color: rgba(0, 0, 0, .3)"></div>
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/slider-geral/premium-arts-01.jpg">

                  </div>

                  <div class="featured-content">

                        <div class="info-room-featured">
                            <h3>Quarto da Cidade de Lisboa</h3>
                            <p>Quarto com varanda para o Jardim Botânico e para a cidade, decorado com azulejos tradicionais portugueses. Embora esteja no centro de Lisboa, descontraia a ler o seu livro e a ouvir o vento nas copas das árvores.</p>
                            <a href="<?php echo "$basePath"; ?>suites-rooms/premium/lisbon" target="_self"><button>VER DETALHES</button></a>
                        </div>
                        <div class="transparent-shadow" style="background-color: rgba(0, 0, 0, .3)"></div>
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/slider-geral/premium-lisbon-01.jpg">

                  </div>

                  <div class="featured-content">

                        <div class="info-room-featured">
                            <h3>Quarto Rainha D. Maria II</h3>
                            <p>Quarto com tecto ornamentado com flores e tons de morango, acolchoado por um brilhante chão de madeira antiga.</p>
                            <a href="<?php echo "$basePath"; ?>suites-rooms/historic/queen" target="_self"><button>VER DETALHES</button></a>
                        </div>
                        <div class="transparent-shadow" style="background-color: rgba(0, 0, 0, .3)"></div>
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/slider-geral/historic-queen-maria-01.jpg">

                  </div>

                  <div class="featured-content">

                        <div class="info-room-featured">
                            <h3>Quarto Rei D. Fernando II</h3>
                            <p>Quarto com vista para o Jardim Botânico e com um imponente e original tecto detalhadamente estucado. </p>
                            <a href="<?php echo "$basePath"; ?>suites-rooms/historic/king" target="_self"><button>VER DETALHES</button></a>
                        </div>
                        <div class="transparent-shadow" style="background-color: rgba(0, 0, 0, .3)"></div>
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/slider-geral/historic-king-fernando-01.jpg">

                  </div>

                  <div class="featured-content">

                        <div class="info-room-featured">
                            <h3>Quarto da Serra de Sintra</h3>
                            <p>Quarto com vista para o Jardim do Príncipe Real e com uma decoração simultaneamente muito distinta e fresca.</p>
                            <a href="<?php echo "$basePath"; ?>suites-rooms/historic/sintra" target="_self"><button>VER DETALHES</button></a>
                        </div>
                        <div class="transparent-shadow" style="background-color: rgba(0, 0, 0, .3)"></div>
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/slider-geral/historic-sintra-01.jpg">

                  </div>

                  <div class="featured-content">

                        <div class="info-room-featured">
                            <h3>Quarto das Viagens</h3>
                            <p>Quarto com tecto ornamentado realçado com tons de azul e com vista sobre as árvores do Jardim Botânico.</p>
                            <a href="<?php echo "$basePath"; ?>suites-rooms/historic/voyages" target="_self"><button>VER DETALHES</button></a>
                        </div>
                        <div class="transparent-shadow" style="background-color: rgba(0, 0, 0, .3)"></div>
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/slider-geral/historic-voyages-01.jpg">

                  </div>

                </div>
            </div>
        </article>
    </section>
    <section class="app-history inside-room home-rooms">
        <div class="description offset">
            <p class="small-text">Quartos e suites de charme com o conforto moderno de um hotel, numa localização premium no centro histórico de Lisboa</p>
        </div><div class="text-content">
            <div class="description-location positionsys"><p>O nome da Casa do Príncipe é inspirado no Príncipe Real, o rei D. pedro V, cuja historia dá o tom para a sua estadia inesquecível em Lisboa. Cada um dos 9 quartos e suites, em estilo palaciano, recordam uma parte da vida deste Príncipe.</p></div>
        </div>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        require(['approom'],function(module){
            try{
                module.init();
            }catch(err) {
                console.log(err.message);
            }               
        });
    }
    </script>
</div>