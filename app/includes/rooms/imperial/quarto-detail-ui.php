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
                            <h3>Imperial Suite</h3>
                            <p>Spacious bedroom with lounge area, balcony overlooking the Príncipe Real garden, with three large windows that fill the room with natural light, creating a bright but relaxing atmosphere.</p>
                            <a href="<?php //echo "$basePath"; ?>suites/" target="_self"><button>go previus</button></a>
                        </div>-->
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/imperial-suite/imperial-01.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/imperial-suite/imperial-02.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/imperial-suite/imperial-03.jpg">
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
                <h3>Suite Rei D. Pedro V</h3>
                <div class="description"><p>Quarto espaçoso com área de estar, varanda com vista sobre o Jardim do Príncipe Real, com três amplas janelas que enchem o quarto de luz natural, criando um ambiente luminoso e relaxante.</p></div>
            </div>
        </article>

        <article class="show-room-description">
            <div class="left-block">
                <p>Deixe-se embalar pelo glamour desta suite imperial, decorada em honra do Príncipe Real, que deu o nome ao nosso B&B. A decoração deste quarto capta a elegância e distinção que o caracterizavam. Maravilhe-se com os trabalhos de estuque que polvilham o tecto desta suite ao estilo que caracterizou o século XIX.</p>
                <div class="image-frame show-frame">
                    <div class="frame-inside show-frame" data-transition="crossfade">
                        <!--<img alt="destaque 3" src="<?php echo "$basePath"; ?>images/principe-moldura.png">-->
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/fotos personagens quartos/principe-moldura.png">
                    </div>
                </div>
            </div><div class="right-block">
                <ul>
                    <li>45m²</li>
                    <li>Acesso a internet de alta velocidade</li>
                    <li>Cama de casal king size (180cmx200cm) ou duas camas individuais</li>
                    <li>Varanda com vista para o Jardim do Príncipe Real</li>
                    <li>Zona de estar confortável e requintada</li>
                    <li>Sofá cama na zona de estar</li>
                    <li>Ocupação: 2 adultos</li>
                        <li>Uma ou duas crianças com menos de 16 anos podem usar o sofá cama. *Custo adicional</li>
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
                <a class="big-size"><h4>Sobre O Rei D. Pedro V<div class="icon icon-arrow-right"></div></h4></a>
            </div>
        </article>
        <article class="show-rooms">
            <div class="center-title">
                <h3>mais quartos & suites</h3>
            </div>
            <div class="rooms-types">
                <ul class="choose-rooms">
                    <li class="actived"><a data-pageid="page1" href="<?php echo "$basePath"; ?>suites-rooms/royal">SUITES REAIS</a></li>
                    <li><a data-pageid="page2" href="<?php echo "$basePath"; ?>suites-rooms/premium">QUARTOS PREMIUM</a></li>
                    <li><a data-pageid="page3" href="<?php echo "$basePath"; ?>suites-rooms/historic">QUARTOS HISTÓRICOS</a></li>
                </ul>
            </div>
            <div class="rooms-group">
                <section class="rooms-view" id="page1">
                  <!--royal-->
                    <article class="room" >
                        <a href="<?php echo "$basePath"; ?>suites-rooms/royal/queen">
                            <div class="small-frame">
                                <img alt="Suite Rainha D. Estefânia" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-royal-estefania.jpg">
                            </div>
                            <h5>Suite Rainha D. Estefânia</h5>
                        </a>
                    </article>
                    <article class="room">
                        <a href="<?php echo "$basePath"; ?>suites-rooms/royal/palace">
                            <div class="small-frame">
                                <img alt="Suite Palácio" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-royal-palace.jpg">
                            </div>
                            <h5>Suite Palácio</h5>
                        </a>
                    </article>
                  <!--/royal-->
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
        <div class="back-detail-room">VOLTAR PARA O SUITE REI D. PEDRO V</div>
        <div class="group-text-img">
            <div class="img-content">
                <div>
                    <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/fotos personagens quartos/principe-big.png">
                </div>
            </div>
        </div><div class="text-content">
            <div>
            <div class="description-location">
                <h2>QUEM FOI ESTE PRÍNCIPE REAL?</h2>
                <h3>Quem foi este Príncipe Real, cujos rastos se encontram espalhados por Lisboa, e que desvendam a lenda de uma das personagens mais icónicas da História de Portugal?</h3>
                <p>
                  O Príncipe Real nasceu no ano de 1837, no século da mudança, onde o progresso e a tradição se combatiam numa batalha que mudou a sociedade. A sua mãe era a Rainha de Portugal, D. Maria II e o seu pai D. Fernando II. Os valores e elevados padrões morais em que nasceu nunca o deixariam e mantê-lo-iam ancorado ao longo da sua vida, tornando-o na bússula moral do país.<br><br>
                  Nasceu na cidade de Lisboa, no Palácio das Necessidades, com o nome D. Pedro V, o primeiro príncipe a nascer nesta cidade depois do longo exílio da Família Real no Brasil. Foi neste Palácio lisboeta com vista para o rio Tejo, que viveu toda a sua vida: onde nasceu, cresceu, casou e morreu.<br><br>
                  É impossível falar do Príncipe Real sem recordar o seu carinho especial pelo Palácio da Pena, no meio da Serra de Sintra e a apenas 30 km de Lisboa. Este Palácio encantado, construído por D. Fernando II, era um recanto de frescura. Escondido entre as árvores da Serra e abundante em fauna e flora tão variadas, era o sítio ideal para passar os verões. Os jardins do palácio são ainda guardiões das memórias felizes ali deixadas pelo Príncipe Real, testemunhas fiéis dos passeios demorados que dava com o amor da sua vida, a Rainha D. Estefânia, de mãos dadas e a partilhar segredos e preocupações acerca do futuro de Portugal.<br><br>
                  A Rainha D. Estefânia apareceu na sua vida como uma lufada de ar fresco, doce e primaveril, enchendo de luz os cantos escuros da sua mente. Era um anjo com um coração de ouro, como não raras vezes a descreviam, e partilhava com D. Pedro um amor vivo, daqueles eternos e incondicionais. Como todas as pedras raras e cometas brilhantes que vagueiam a Terra, a vida de Estefânia foi efémera. Morreu de difteria apenas 14 meses depois do seu casamento sem deixar herdeiros, entristecendo para sempre o coração de D. Pedro. Inspirado pela bondade de Estefânia e pela sua dedicação às crianças, D. Pedro fundou em Lisboa um hospital em seu nome.<br><br>
                  D. Pedro V continuou a sua vida, dedicando-se incansavelmente ao desenvolvimento do país. Fundou também o Curso Superior de Letras (que depois se chamou Faculdade de Letras da Universidade de Lisboa), em reflexo da importância que atribuía à educação e do seu amor pela literatura, escolhendo pessoalmente alguns professores e assistindo a aulas sempre que possível.<br><br>
                  Manteve-se sempre fiel aos seus princípios, mesmo nos tempos mais difíceis. Quando se abateu sobre Lisboa um surto de cólera e de febre amarela, a cidade foi evacuada. A Família Real e os membros da aristocracia tiveram que fugir, ficando apenas o Príncipe Real. D. Pedro recusou-se a abandonar os seus súbditos e em vez de se abrigar, acorreu aos doentes e moribundos nos hospitais e nos cemitérios, onde confortou as famílias.
                  “O Santo”, o “Esperançoso”, o “Bem-amado” foram os cognomes com que a História o baptizou. Tal como a sua querida mulher, não viveu muito tempo, sucumbindo aos 24 anos e deixando o peso da coroa ao seu irmão D. Luís. Mas o seu espírito perdurou. Lisboa ainda se agita com as memórias do Príncipe Real, as suas conquistas e dedicação, a sua mente tão avançada para o seu tempo. A sua bondade e compaixão ainda vivem na suave brisa de verão que sacode as copas das árvores do Jardim do Príncipe Real.
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