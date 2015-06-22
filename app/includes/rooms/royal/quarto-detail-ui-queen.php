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
<div class="page-content spec-room">
    <section class="content inside-room room-detail">
        <article class="image-frame">
            <div class="frame-inside" data-transition="crossfade">
                <div class="fotorama fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--no-controls" data-nav="false" data-arrows="true" data-click="true" data-swipe="true" data-allowfullscreen="true" data-loop="true" data-autoplay="true" data-stopautoplayontouch="false"  data-width="100%" data-ratio="1432/577">
                    <div class="featured-content">
                        <!--<div class="info-room-featured">
                            <h3>Queen D. Estefânia</h3>
                            <p>Spacious bedroom with seating and relaxing area, three large windows with balcony overlooking the Botanical Garden trees, create a fresh and relaxing ambience – you can listen to the birds even though in the center of Lisbon.</p>
                            <a href="<?php echo "$basePath"; ?>suites/" target="_self"><button>go previus</button></a>
                        </div>-->
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/royal-suits/queen-d-estefania/royal-estefania-01.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/suites-and-rooms/royal-suits/queen-d-estefania/royal-estefania-02.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/suites-and-rooms/royal-suits/queen-d-estefania/royal-estefania-03.jpg">
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
                <h3>Suite Rainha D. Estefânia</h3>
                <div class="description"><p>Quarto amplo com área de estar, três grandes janelas e uma varanda com vista para as árvores do Jardim Botânico, que criam um ambiente refrescante e relaxante- apesar de estar no centro da cidade pode ouvir o cantar dos pássaros que por aqui voam.</p></div>
            </div>
        </article>

        <article class="show-room-description">
            <div class="left-block">
                <p>Relaxe no conforto e elegância desta suite decorada ao estilo da Rainha D. Estefânia, mulher do Príncipe Real. Em suaves tons de cor-de-rosa e com soalhos em parquet originais do século XIX, este espaço é um tributo vivo aos traços únicos da personalidade de Estefânia, reflectindo a sua bondade e compaixão. As figuras angelicais esculpidas nos trabalhos de estuque no tecto inspiram um sonho celestial.</p>
                <div class="image-frame show-frame">
                    <div class="frame-inside show-frame" data-transition="crossfade">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/fotos personagens quartos/rainha-moldura.png">
                    </div>
                </div>
            </div><div class="right-block">
                <ul>
                    <li>30m² </li>
                    <li>Acesso a internet de alta velocidade</li>
                    <li>Cama de casal king size (180cmx200cm) ou duas camas de individuais</li>
                    <li>Varanda com vista para as árvores do Jardim Botânico</li>
                    <li>Zona de estar confortável</li>
                    <li>Ocupação: 2 adultos</li>
                            <li>Um bebé até aos 3 anos pode usar a cama de grades (dependente da disponibilidade). *Custo adicional</li>
                    <li>Pequeno-Almoço buffet ou servido no quarto – à sua escolha</li>
                    <li>Televisão plasma de ecrã plano</li>
                    <li>Ar condicionado</li>
                    <li>Amenities de casa-de-banho premium</li>
                    <li>Serviços domésticos diários</li>
                    <li>Cofre no quarto</li>
                    <li>Secador de cabelo</li>


                    <!--<li>Extra large Queen bed or two twin beds</li>
                    <li>Balcony overlooking the Príncipe Real garden</li>
                    <li>Seating and relaxing area</li>
                    <li>Sofa double bed in the lounge area</li>
                    <li>Premium bathroom amenities</li>
                    <li>Size: 45m² /484 sq.ft</li>
                    <li>Extra large Queen bed or two twin beds</li>
                    <li>Balcony overlooking the Príncipe Real garden</li>
                    <li>Seating and relaxing area</li>
                    <li>Sofa double bed in the lounge area</li>
                    <li>Premium bathroom amenities</li>-->
                </ul>
                <a class="big-size"><h4>Sobre a Rainha D. Estefânia<div class="icon icon-arrow-right"></div></h4></a>
            </div>
        </article>
        <article class="show-rooms">
            <div class="center-title">
                <h3>mais quartos & suites</h3>
            </div>
            <div class="rooms-types">
                <ul class="choose-rooms">
                    <li class="actived"><a data-pageid="page1" href="<?php echo "$basePath"; ?>suites-rooms/imperial">SUITE IMPERIAL</a></li>
                    <li><a data-pageid="page2" href="<?php echo "$basePath"; ?>suites-rooms/premium">QUARTOS PREMIUM</a></li>
                    <li><a data-pageid="page3" href="<?php echo "$basePath"; ?>suites-rooms/historic">QUARTOS HISTÓRICOS</a></li>
                </ul>
            </div>
            <div class="rooms-group">
                <section class="rooms-view" id="page1">
                  <!--imperial-->
                    <article class="room" >
                        <a href="<?php echo "$basePath"; ?>suites-rooms/imperial">
                        <div class="small-frame">
                            <img alt="Quarto Imperial" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-imperial.jpg">
                        </div>
                        <h5>Suite Imperial</h5>
                        </a>
                    </article>
                  <!--/imperial-->
                </section>
                <section class="rooms-view" id="page2">
                  <!--premium-->
                    <article class="room" >
                    <a href="<?php echo "$basePath"; ?>suites-rooms/premium/arts">
                            <div class="small-frame">
                                <img alt="Quarto das Artes" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-premium-arts.jpg">
                            </div>
                            <h5>Quarto das Artes</h5>
                        </a>
                    </article>
                    <article class="room">
                    <a href="<?php echo "$basePath"; ?>suites-rooms/premium/lisbon">
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
                    <a href="<?php echo "$basePath"; ?>suites-rooms/historic/queen">
                            <div class="small-frame">
                                <img alt="Quarto Rainha D. Maria II" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-historic-maria.jpg">
                            </div>
                            <h5>Quarto Rainha D. Maria II</h5>
                        </a>
                    </article>
                    <article class="room">
                    <a href="<?php echo "$basePath"; ?>suites-rooms/historic/king">
                            <div class="small-frame">
                                <img alt="Quarto Rei D. Fernando II" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-historic-fernando.jpg">
                            </div>
                            <h5>Quarto Rei D. Fernando II</h5>
                        </a>
                    </article>
                    <article class="room">
                    <a href="<?php echo "$basePath"; ?>suites-rooms/historic/sintra">
                            <div class="small-frame">
                                <img alt="Quarto da Serra de Sintra" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-historic-sintra.jpg">
                            </div>
                            <h5>Quarto da Serra de Sintra</h5>
                        </a>
                    </article>
                    <article class="room">
                    <a href="<?php echo "$basePath"; ?>suites-rooms/historic/voyages">
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
        <div class="back-detail-room">VOLTAR PARA O SUITE RAINHA D. ESTEFÂNIA</div>
        <div class="group-text-img">
            <div class="img-content">
                <div>
                    <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/fotos personagens quartos/rainha-big.png">
                </div>
            </div>
        </div><div class="text-content">
            <div>
            <div class="description-location">
                <h2>QUEM ERA A RAINHA D. ESTEFÂNIA?</h2>
                <h3>Um coração para a Terra e um espírito para o Céu. Estas foram as palavras usadas pelo Príncipe Real, D. Pedro V, para descrever a sua mulher.</h3>
                <p>
                  Quando chegou a altura de escolher uma esposa, o D. Pedro V tornou-se apreensivo e duvidoso, e embora soubesse que precisava de uma Rainha para partilhar o pesado fardo dos deveres reais, o seu temperamento exigente tornava difícil a tarefa de encontrar uma candidata adequada.<br><br>
                  Foi a Rainha Vitória de Inglaterra que primeiro sugeriu a jovem Estefânia, membro da Família Real da Prússia e filha do Príncipe Carlos António de Hohenzollern Sigmaringen, dotada de uma enorme afeição e bondade que rapidamente capturaram o coração do Rei.<br><br>
                  Eram duas almas verdadeiramente puras e devotas, e reza a lenda que eram vistos a passear pelos jardins do palácio de mãos dadas, num romance que infelizmente acabou de forma trágica. Apenas 14 meses depois do seu casamento, a Rainha D. Estefânia morreu de difteria, entristecendo para sempre o espírito de D. Pedro V.<br><br>
                  A Rainha D. Estefânia era amada por todos quantos a conheciam. O curto ano que passou em Portugal foi suficiente para deixar uma marca indelével na sua História. Em Lisboa, tanto um hospital de crianças como o bairro circundante adoptaram o seu nome, reflectindo a sua entrega desmedida às pessoas e crianças com necessidades.
                </p>
            </div>
        </div>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        var myApp = require(['approomdetail'],function(module){
                module.init();
            });
    } 
    </script>
</div>