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
                            <h3>Queen D. Estefânia</h3>
                            <p>Spacious bedroom with lounge area, balcony overlooking the Príncipe Real garden, with three large windows that fill the room with natural light, creating a bright but relaxing atmosphere.</p>
                            <a href="<?php //echo "$basePath"; ?>suites/" target="_self"><button>go previus</button></a>
                        </div>-->
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/historic/queen-maria/historic-queen-maria-01.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/historic/queen-maria/historic-queen-maria-02.jpg">
                    </div>
                    <!--<div class="featured-content">
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/historic/queen-maria/historic-queen-maria-03.jpg">
                    </div>-->
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
                <h3>Quarto Rainha D. Maria II</h3>
                <div class="description"><p>Quarto com tecto ornamentado com flores e tons de morango, acolchoado por um brilhante chão de madeira antiga.</p></div>
            </div>
        </article>

        <article class="show-room-description">
            <div class="left-block">
                <p>Personificação de charme e carácter, este quarto reflecte o espírito da Rainha D. Maria II, a mãe de D. Pedro V. O tecto ornamentado com flores e a vivacidade da palette de cores usada na decoração, fazem deste quarto uma verdadeira homenagem à Rainha, uma influência muito importante na vida do Príncipe Real.</p>
                <div class="image-frame show-frame">
                    <div class="frame-inside show-frame" data-transition="crossfade">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/fotos-personagens-quartos/rainha-maria-II-moldura.jpg">
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
                    <li>Televisão plasma de ecrã plano</li>
                    <li>Ar condicionado</li>
                    <li>Amenities de casa-de-banho premium</li>
                    <li>Serviços domésticos diários</li>
                    <li>Cofre no quarto</li>
                    <li>Secador de cabelo</li>
                </ul>
                <a class="big-size"><h4>Sobre a Rainha D. Maria II</h4> <div class="icon icon-inline icon-angle-right"></div></a>
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
        <div class="back-detail-room"><div class="icon icon-inline icon-angle-left"></div> VOLTAR PARA O QUARTO RAINHA D. MARIA II</div>
        <div class="group-text-img">
            <div class="img-content">
                <div>
                    <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/fotos-personagens-quartos/rainha-maria-II-big.jpg">
                </div>
            </div>
        </div><div class="text-content">
            <div>
            <div class="description-location">
                <h2>QUEM È A RAINHA D. MARIA II?</h2>
                <h3>A História recorda a Rainha D. Maria II de Portugal como “a Educadora” ou a “Boa Mãe”, deixando, por vezes, de fora a sua gentileza de coração que era pouco habitual na altura. Era uma mãe muito devota, e uma firme crente na importância de uma educação equilibrada para os seus filhos.</h3>
                <p>
                  Após dois casamentos falhados, casou com D. Fernando II, com quem partilhava a paixão pela educação, que passou também para os filhos de ambos. Reinou numa época de grande controvérsia política, logo após uma guerra civil devastante, encontrando grande conforto nas conversas que tinha com a sua prima, a Rainha Vitória de Inglaterra, com quem se correspondia com frequência.<br><br>
                  Muito amada pelos seus súbditos, morreu no parto do seu 11º filho, aos 35 anos, deixando atrás de si um rasto de dor, bem como um herdeiro de 16 anos para reinar o país. A sua bondade, compaixão e verdadeira preocupação pelas pessoas, tocaram profundamente o coração de D. Pedro V, que levou esses traços com ele, tornando-os pedra angular do seu futuro reinado.
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
