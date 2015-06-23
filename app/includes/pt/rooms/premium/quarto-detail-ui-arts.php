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
                            <h3>Arts Room</h3>
                            <p>Spacious bedroom with lounge area, balcony overlooking the Príncipe Real garden, with three large windows that fill the room with natural light, creating a bright but relaxing atmosphere.</p>
                            <a href="<?php //echo "$basePath"; ?>suites/" target="_self"><button>go previus</button></a>
                        </div>-->
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/premium-suites/arts/premium-arts-01.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/suites-and-rooms/premium-suites/arts/premium-arts-02.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/suites-and-rooms/premium-suites/arts/premium-arts-03.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 4" src="<?php echo "$basePath"; ?>images/suites-and-rooms/premium-suites/arts/premium-arts-04.jpg">
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
                <h3>Quarto das Artes</h3>
                <div class="description"><p>Quarto com vista panorâmica para o Jardim do Príncipe Real.</p></div>
            </div>
        </article>

        <article class="show-room-description">
            <div class="left-block">
                <p>O Quarto das Artes, com o seu estilo elegante e pequena biblioteca no corredor, evoca os serões que a Família Real passava na sala de estar, a ler ou a ouvir música, imersa numa paixão assoberbante pelo inesgotável mundo das Artes.</p>
                <div class="image-frame show-frame">
                    <div class="frame-inside show-frame" data-transition="crossfade">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/principe-moldura.png">
                    </div>
                </div>
            </div><div class="right-block">
                <ul>
                    <li>20m²</li>
                    <li>Acesso a internet de alta velocidade</li>
                    <li>Cama de casal king size (180cmx200cm) ou duas camas individuais</li>
                    <li>Janelas com vista para o Jardim do Príncipe Real</li>
                    <li>Ocupação: 2 adultos</li>
                        <li>Um bebé até aos 3 anos pode usar a cama de grades (dependente da disponibilidade). * Custo adicional</li>
                    <li>Pequeno-Almoço buffet ou servido no quarto – à sua escolha</li>
                    <li>Televisão plasma de ecrã plano</li>
                    <li>Ar condicionado</li>
                    <li>Amenities de casa-de-banho premium</li>
                    <li>Serviços domésticos diários</li>
                    <li>Cofre no quarto</li>
                    <li>Secador de cabelo</li>
                </ul>
                <a class="big-size"><h4>O Princípe Real e as Artes</h4> <div class="icon icon-inline icon-angle-right"></div></a>
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
                    <li><a data-pageid="page3" href="<?php echo $basePath.$lang; ?>suites-rooms/historic">QUARTOS HISTÓRICOS</a></li>
                </ul>
            </div>
            <div class="rooms-group">
                <section class="rooms-view" id="page1">
                  <!--imperial-->
                    <article class="room" >
                        <a href="<?php echo $basePath.$lang; ?>suites-rooms/imperial">
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
        <div class="back-detail-room"><div class="icon icon-inline icon-angle-left"></div> VOLTAR PARA O QUARTO DAS ARTES</div>
        <div class="group-text-img">
            <div class="img-content">
                <div>
                    <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/principe-big.png">
                </div>
            </div>
        </div><div class="text-content">
            <div>
            <div class="description-location">
                <h2>A ligação do Príncipe Real e sua família ao mundo das Artes</h2>
                <h3>As Artes eram uma presença constante na vida diária da Família Real. Esta paixão pela literatura, música, pintura e arte em todas as suas formas, era abraçada pelos Reis, e encorajada desde cedo.</h3>
                <p>
                  Os serões eram muitas vezes passados na salas a ler e a ouvir música – por vezes tocada por artistas reconhecidos, por vezes por um jovem príncipe, a debater-se com as teclas do piano.<br><br>
                  D. Fernando tinha uma ternura especial pelas artes. Equipado com uma voz de barítono invejável, dedicava também algum tempo à pintura, encorajando os seus filhos a fazer o mesmo. <br><br>
                  O Príncipe Real, D. Pedro V, tinha uma ligação especial com o mundo das artes, uma fome insaciável por conhecimento, bem patente naquilo que escrevia, desde muito cedo. A literatura movia-o especialmente, apesar de ter boas técnicas de desenho e uma rara sensibilidade pela música. Esta paixão levou-o a fundar o Curso Superior de Letras, escolhendo pessoalmente os seus professores e assistindo a algumas aulas, sempre que possível.<br><br>
                  Por estas razões, este quarto é dedicado às Artes, os observadores silenciosos da vida palaciana, os sussurros convidativos da biblioteca, os acordes de fundo dos grandes e pequenos acontecimentos, enchendo os corredores e as salas do Palácio com cores e sons.
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
