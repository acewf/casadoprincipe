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
                            <h3>Palace Room</h3>
                            <p>Spacious bedroom with lounge area, two large windows facing the Príncipe Real garden, creating a fresh and relaxing palatial ambience.</p>
                            <a href="<?php echo "$basePath"; ?>suites/" target="_self"><button>go previus</button></a>
                        </div>-->
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/royal-suits/palace-suite/royal-palace-01.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/suites-and-rooms/royal-suits/palace-suite/royal-palace-02.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/suites-and-rooms/royal-suits/palace-suite/royal-palace-03.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 4" src="<?php echo "$basePath"; ?>images/suites-and-rooms/royal-suits/palace-suite/royal-palace-04.jpg">
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
                <h3>Suite Palácio</h3>
                <div class="description"><p>Quarto espaçoso equipado com área de lounge, duas grandes janelas com vista sobre o Jardim do Príncipe Real e uma relaxante atmosfera palaciana.</p></div>
            </div>
        </article>

        <article class="show-room-description">
            <div class="left-block">
                <p>A suite do Palácio é inspirada no Palácio das Necessidades, onde o Príncipe Real, D. Pedro V, nasceu e viveu. Os elegantes tons de verde, os tectos trabalhados e a mobília cuidadosamente escolhida, transportam-no para os infindáveis corredores do Palácio. </p>
                <div class="image-frame show-frame">
                    <div class="frame-inside show-frame" data-transition="crossfade">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/principe-moldura.png">
                    </div>
                </div>
            </div><div class="right-block">
                <ul>
                    <li>35m²</li>
                    <li>Acesso a internet de alta velocidade</li>
                    <li>Cama de casal king size (180cmx200cm) ou duas individuais</li>
                    <li>Janelas com vista para o Jardim do Príncipe Real</li>
                    <li>Zona de estar confortável</li>
                    <li>Sofá cama na zona de estar</li>
                    <li>Ocupação: 2 adultos</li>
                        <li>Uma ou duas crianças com menos de 16 anos podem usar o sofa cama. *Custo adicional</li>
                        <li>Um bebé até aos 3 anos pode usar a cama de grades (dependente da disponibilidade). *Custo adicional</li>
                    <li>Pequeno-Almoço buffet ou servido no quarto – à sua escolha</li>
                    <li>Televisão plasma de ecrã plano</li>
                    <li>Ar condicionado</li>
                    <li>Amenities de casa-de-banho premium</li>
                    <li>Serviços domésticos diários</li>
                    <li>Cofre no quarto</li>
                    <li>Secador de cabelo</li>
                </ul>
                <a class="big-size"><h4>Sobre o Palácio das Necessidades</h4> <div class="icon icon-inline icon-angle-right"></div></a>
            </div>
        </article>
        <article class="show-rooms">
            <div class="center-title">
                <h3>mais quartos & suites</h3>
            </div>
            <div class="rooms-types">
                <ul class="choose-rooms">
                    <li class="actived"><a data-pageid="page1" href="<?php echo $basePath.$lang; ?>suites-rooms/imperial/king">SUITE IMPERIAL</a></li>
                    <li><a data-pageid="page2" href="<?php echo $basePath.$lang; ?>suites-rooms/premium">QUARTOS PREMIUM</a></li>
                    <li><a data-pageid="page3" href="<?php echo $basePath.$lang; ?>suites-rooms/historic">QUARTOS HISTÓRICOS</a></li>
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
                <section class="rooms-view" id="page3">
                  <!--historic-->
                    <article class="room" >
                    <a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/queen">
                            <div class="small-frame">
                                <img alt="Quarto Rainha D. Maria II" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-historic-maria.jpg">
                            </div>
                            <h5>Quarto Rainha D. Maria II</h5>
                        </a>
                    </article>
                    <article class="room">
                    <a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/king">
                            <div class="small-frame">
                                <img alt="Quarto Rei D. Fernando II" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-historic-fernando.jpg">
                            </div>
                            <h5>Quarto Rei D. Fernando II</h5>
                        </a>
                    </article>
                    <article class="room">
                    <a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/sintra">
                            <div class="small-frame">
                                <img alt="Quarto da Serra de Sintra" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-historic-sintra.jpg">
                            </div>
                            <h5>Quarto da Serra de Sintra</h5>
                        </a>
                    </article>
                    <article class="room">
                    <a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/voyages">
                            <div class="small-frame">
                                <img alt="Quarto das Viagens" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-historic-voyages.jpg">
                            </div>
                            <h5>Quarto das Viagens</h5>
                        </a>
                    </article>
                  <!--/historic-->
                </section>
            </div>
        </article>
    </section>
    <section class="app-history inside-room inside-detail">
        <div class="back-detail-room"><div class="icon icon-inline icon-angle-left"></div> VOLTAR PARA O SUITE PALÁCIO</div>
        <div class="group-text-img">
            <div class="img-content">
                <div>
                    <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/principe-big.png">
                </div>
            </div>
        </div><div class="text-content">
            <div>
            <div class="description-location">
                <h2>O Palácio das Necessidades e a sua ligação ao Príncipe Real</h2>
                <h3>A atmosfera real do Palácio das Necessidades, em Lisboa, é projectada neste quarto.</h3>
                <p>
                  O Palácio das Necessidades foi a primeira testemunha do nascimento do Príncipe Real, uma ocasião de grande solenidade, uma vez que foi o primeiro príncipe a nascer e a ser baptizado no palácio desde o regresso da Família Real do seu longo exílio no Brasil.<br><br>
                  O Palácio não era só a casa da Família Real, era também um núcleo de negociações e decisões políticas, um nicho que combinava a vida pessoal e política.<br><br>
                  Este encantador Palácio do século XIX, com os seus corredores intermináveis e escadarias de mármore rosado, rodeado pela Tapada das Necessidades - uma mata de 10 hectares - fora antes um Convento, um destino de peregrinações e local de devoção à Nossa Senhora das Necessidades.<br><br>
                  O Palácio foi o cenário de todos os grandes acontecimentos da vida do Príncipe Real: o seu nascimento, o seu baptismo – em grande pompa e circunstância - e o seu casamento. Foi também dentro das arcadas do palácio que professou o seu amor por D. Estefânia, sua mulher, onde trocaram votos e sonharam na sua noite de núpcias, e onde passaram os seus dias de felicidade.<br><br>
                  O Palácio das Necessidades, onde hoje é o Ministério dos Negócios Estrangeiros, está cheio destas memórias vivas do Príncipe Real, o eco dos seus passos nos corredores, as suas pistas por descobrir nos jardins e a sua vida relembrada por todos os que visitam o Palácio.
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