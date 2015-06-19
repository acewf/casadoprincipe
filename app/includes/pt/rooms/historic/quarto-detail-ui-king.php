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
<div class="page-content spec-room">
    <section class="content inside-room room-detail">
        <article class="image-frame">
            <div class="frame-inside" data-transition="crossfade">
                <div class="fotorama fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--no-controls" data-nav="false" data-arrows="true" data-click="true" data-swipe="true" data-allowfullscreen="true" data-loop="true" data-autoplay="true" data-stopautoplayontouch="false"  data-width="100%" data-ratio="1432/577">
                    <div class="featured-content">
                        <!--<div class="info-room-featured">
                            <h3>King suite</h3>
                            <p>Spacious bedroom with lounge area, balcony overlooking the Príncipe Real garden, with three large windows that fill the room with natural light, creating a bright but relaxing atmosphere.</p>
                            <a href="<?php echo "$basePath"; ?>suites/" target="_self"><button>go previus</button></a>
                        </div>-->
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/historic/king-fernando/historic-king-fernando-01.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/suites-and-rooms/historic/king-fernando/historic-king-fernando-02.jpg">
                    </div>
                </div>
            </div>
        </article>
        <article class="booking"><div class="booker">
            <form id="AVP" method="post" action="http://www.secure-hotel-booking.com/Casa-do-Principe/2E3B/search?hotelId=16384" target="_blank">
                <div class="input-daterange input-group" id="datepicker">
                <div class="group-dates-boxes">
                <div class="box-date chech-in"> <div data-icon="a" class="icon icon-calendar">
                </div><div class="text-field-container"><input type="text" class="input-sm form-control" id="AVP_arrivalDate" name="arrivalDate" value="Check-in"/></div><div data-icon="a" class="icon icon-caret-down-two"></div>
                </div><div class="box-date chech-out"><div data-icon="a" class="icon icon-calendar">
                </div><div class="text-field-container"><input type="text" class="input-sm form-control" id="AVP_exitDate" name="end" value="Check-out"/></div><div data-icon="a" class="icon icon-caret-down-two"></div>
                </div></div></div><div class="bookregister"><button id="bookit">RESERVE ONLINE<div class="icon icon-arrow-right"></div></button></div></div></form>
        </article>

        <article class="show-room-info">
            <div class="center-title">
                <h3>Quarto Rei D. Fernando II</h3>
                <div class="description"><p>Quarto com vista para o Jardim Botânico e com um imponente e original tecto detalhadamente estucado. </p></div>
            </div>
        </article>

        <article class="show-room-description">
            <div class="left-block">
                <p>Este quarto foi inspirado no pai do Príncipe Real, D. Fernando. Os tons mornos de caramelo e dourado na decoração e a beleza dos trabalhos do tecto recolhem a sobriedade e firmeza deste Rei.</p>
                <div class="image-frame show-frame">
                    <div class="frame-inside show-frame" data-transition="crossfade">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/fotos-personagens-quartos/fernando-II-moldura.jpg">
                    </div>
                </div>
            </div><div class="right-block">
                <ul>
                    <li>15m²</li>
                    <li>Acesso a internet de alta velocidade</li>
                    <li>Cama de casal (160cmx200cm)</li>
                    <li>Janela com vista sobre as árvores do Jardim Botânico</li>
                    <li>Ocupação: 2 adultos</li>
                    <li>Pequeno-Almoço buffet</li>
                    <li>Televisão plasma de ecrã plano
                    <li>Ar condicionado</li>
                    <li>Amenities de casa-de-banho premium</li>
                    <li>Serviços domésticos diários</li>
                    <li>Cofre no quarto</li>
                    <li>Secador de cabelo</li>
                </ul>
                <a class="big-size"><h4>Sobre o Rei D. Fernando II</h4> <div class="icon icon-inline icon-angle-right"></div></a>
            </div>
        </article>
        <article class="show-rooms">
            <div class="center-title">
                <h3>mais quartos &amp; suites</h3>
            </div>
            <div class="rooms-types">
                <ul class="choose-rooms">
                    <li class="actived"><a data-pageid="page1" href="<?php echo $basePath.$lang; ?>suites-rooms/imperial/king">SUITE IMPERIAL</a></li>
                    <li><a data-pageid="page2" href="<?php echo $basePath.$lang; ?>suites-rooms/royal">SUITES REAIS</a></li>
                    <li><a data-pageid="page3" href="<?php echo $basePath.$lang; ?>suites-rooms/premium">QUARTOS PREMIUM</a></li>
                </ul>
            </div>
            <div class="rooms-group">
                <section class="rooms-view" id="page1">
                  <!--imperial-->
                    <article class="room" >
                         <a href="<?php echo $basePath.$lang; ?>suites-rooms/imperial/king">
                        <div class="small-frame">
                            <img alt="Quarto Imperial" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-imperial.jpg">
                        </div>
                        <h5>King D. Pedro V Suite</h5>
                        </a>
                    </article>
                  <!--/imperial-->
                </section>
                <section class="rooms-view" id="page2">
                  <!--royal-->
                    <article class="room" >
                        <a href="<?php echo $basePath.$lang; ?>suites-rooms/royal/queen">
                            <div class="small-frame">
                                <img alt="Suite Rainha D. Estefânia" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-royal-estefania.jpg">
                            </div>
                            <h5>Suite Rainha D. Estefânia</h5>
                        </a>
                    </article>
                    <article class="room">
                        <a href="<?php echo $basePath.$lang; ?>suites-rooms/royal/palace">
                            <div class="small-frame">
                                <img alt="Suite Palácio" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-royal-palace.jpg">
                            </div>
                            <h5>Suite Palácio</h5>
                        </a>
                    </article>
                  <!--/royal-->
                </section>
                <section class="rooms-view" id="page3">
                  <!--premium-->
                    <article class="room" >
                    <a href="<?php echo $basePath.$lang; ?>suites-rooms/premium/arts">
                            <div class="small-frame">
                                <img alt="Quarto das Artes" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-premium-arts.jpg">
                            </div>
                            <h5>Quarto das Artes</h5>
                        </a>
                    </article>
                    <article class="room">
                    <a href="<?php echo $basePath.$lang; ?>suites-rooms/premium/lisbon">
                            <div class="small-frame">
                                <img alt="Quarto da Cidade de Lisboa" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-premium-lisboa.jpg">
                            </div>
                            <h5>Quarto da Cidade de Lisboa</h5>
                        </a>
                    <!--/premium-->
                </section>
            </div>
        </article>
    </section>
    <section class="app-history inside-room inside-detail">
        <div class="back-detail-room"><div class="icon icon-inline icon-angle-left"></div> VOLTAR PARA O QUARTO REI D. FERNANDO II</div>
        <div class="group-text-img">
            <div class="img-content">
                <div>
                    <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/fotos-personagens-quartos/fernando-II-big.jpg">
                </div>
            </div>
        </div><div class="text-content">
            <div>
            <div class="description-location">
                <h2>QUEM ERA O REI D. FERNANDO II?</h2>
                <h3>A austeridade e sobriedade que caracterizavam D. Fernando II estão reflectidas neste quarto. Nascido em Viena, D. Fernando II veio para Portugal para casar com a sua rainha, D. Maria II, e desta união nasceu D. Pedro V.</h3>
                <p>
                  Apesar de muito reservado e discreto, D. Fernando II era um amante das artes e um apaixonado pela natureza, pelo que ordenou a construção do Palácio da Pena, no cimo da Serra de Sintra, que permanece até hoje o derradeiro tributo à sua dedicação a Portugal.<br><br>
                  D. Fernando II transmitiu ao Príncipe Real, seu filho, algumas das características que melhor o definiam, como a sua solenidade e temperança, mas também uma sensibilidade especial para as artes e uma visão romântica, ainda que reservada, do mundo como deveria ser e não como ele realmente era. <br><br>
                  D. Fernando sempre procurou perceber uma cultura que não era a sua, questionando os hábitos e mentalidade do povo português, que nunca o aceitou plenamente. A morte inesperada da Rainha obrigou-o a superar a dor da sua perda mais rápido que o coração permite, para se tornar Regente de Portugal até à maioridade do seu filho, D. Pedro V (o Príncipe Real), altura em que lhe passou as rédeas de um país que nunca fora o seu.
                </p>
            </div>
        </div>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        var myApp = require(['approomdetail','appmenu'],function(module,appmenu){
                try{
                    appmenu.addModule(module,'approomdetail');
                    module.init();
                }catch(err) {
                    console.log(err.message);
                }  
            });
    }
    </script>
</div>
