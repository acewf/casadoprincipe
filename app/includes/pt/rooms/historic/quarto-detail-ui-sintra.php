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
                            <h3>Sintra</h3>
                            <p>Spacious bedroom with lounge area, balcony overlooking the Príncipe Real garden, with three large windows that fill the room with natural light, creating a bright but relaxing atmosphere.</p>
                            <a href="<?php //echo "$basePath"; ?>suites/" target="_self"><button>go previus</button></a>
                        </div>-->
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/historic/sintra/historic-sintra-01.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/suites-and-rooms/historic/sintra/historic-sintra-02.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/suites-and-rooms/historic/sintra/historic-sintra-03.jpg">
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
                <h3>Quarto da Serra de Sintra</h3>
                <div class="description"><p>Quarto com vista para o Jardim do Príncipe Real e com uma decoração simultaneamente muito distinta e fresca.</p></div>
            </div>
        </article>

        <article class="show-room-description">
            <div class="left-block">
                <p>Este quarto foi decorado ao estilo de Sintra, uma encantadora vila tradicional não muito longe de Lisboa, onde D. Pedro passou parte da sua infância e onde a Corte Portuguesa passava temporadas no Verão. Em tons de verde, que lembram a paisagem verdejante da serra, este quarto solarengo inspira uma atmosfera de paz e frescura.</p>
                <div class="image-frame show-frame">
                    <div class="frame-inside show-frame" data-transition="crossfade">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/fotos-personagens-quartos/sintra-moldura.jpg">
                    </div>
                </div>
            </div><div class="right-block">
                <ul>
                    <li>17m²</li>
                    <li>Acesso a internet de alta velocidade</li>
                    <li>Cama de casal (160cmx200cm)</li>
                    <li>Janela com vista sobre o Jardim do Príncipe Real</li>
                    <li>Ocupação: 2 adultos</li>
                    <li>Pequeno-Almoço buffet</li>
                    <li>Televisão plasma de ecrã plano</li>
                    <li>Ar condicionado</li>
                    <li>Amenities de casa-de-banho premium</li>
                    <li>Serviços domésticos diários</li>
                    <li>Cofre no quarto</li>
                    <li>Secador de cabelo</li>
                </ul>
                <a class="big-size"><h4>Sintra e o Rei D. Pedro V</h4> <div class="icon icon-inline icon-angle-right"></div></a>
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
                        <h5>Suite Imperial</h5>
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
        <div class="back-detail-room"><div class="icon icon-inline icon-angle-left"></div> VOLTAR PARA O QUARTO DA SERRA DE SINTRA</div>
        <div class="group-text-img">
            <div class="img-content">
                <div>
                    <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/fotos-personagens-quartos/sintra-big.jpg">
                </div>
            </div>
        </div><div class="text-content">
            <div>
            <div class="description-location">
                <h2>A LIGAÇÃO DO REI D. PEDRO V À VILA DE SINTRA</h2>
                <h3>Este quarto evoca a atmosfera da Serra de Sintra, localizada a escassos 30 km de Lisboa, para ocidente.</h3>
                <p>
                  A Serra de Sintra está encoberta em mistérios, mitos e lendas, oriundos da sua história antiga. A sua localização refundida tornou-a um local idílico, ideal para palácios e castelos escondidos de olhares curiosos, como é o caso do Palácio da Pena, o Palácio da Vila, o Palácio de Monserrate e o Castelo dos Mouros.<br><br>
                  A Família Real passava os seus Verões na frescura da Serra, quando as temperaturas subiam e o calor de Lisboa se tornava intolerável.<br><br>
                  Foi só após o nascimento de D. Pedro V que o seu pai, D. Fernando II, começou a planear a construção do Palácio da Pena a partir das ruínas de um antigo convento beneditino que se encontrava no topo da Serra, a avistar o mar. Na sua visão, D. Fernando capturou a essência das suas origens bávaras, projectando-as na arquitectura do palácio, que se assemelha espantosamente ao Castelo de Neuschwanstein na Baviera, construído pelo seu primo Ludwig II, Rei da Baviera.<br><br>
                  D. Pedro V tinha uma relação especial com o palácio, tendo lá passado, se não os melhores, certamente os dias mais felizes da sua vida. Tanto ele como a Rainha D. Estefânia, sua mulher, eram vistos de mãos dadas a passear nos jardins, um gesto pouco habitual para a realeza, a epítome de um romance breve, mas arrebatador, que acabaria cedo de mais mas que, de alguma forma, viveria para sempre.
                </p>
            </div>
        </div>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        var myApp = require(['approomdetail','appmenu'],function(module,appmenu){
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
