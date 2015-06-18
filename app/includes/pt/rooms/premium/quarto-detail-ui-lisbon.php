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
                            <h3>Lisbon Room</h3>
                            <p>Spacious bedroom with lounge area, balcony overlooking the Príncipe Real garden, with three large windows that fill the room with natural light, creating a bright but relaxing atmosphere.</p>
                            <a href="<?php //echo "$basePath"; ?>suites/" target="_self"><button>go previus</button></a>
                        </div>-->
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/premium-suites/lisbon/premium-lisbon-01.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/suites-and-rooms/premium-suites/lisbon/premium-lisbon-02.jpg">
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
                <h3>Quarto da Cidade de Lisboa</h3>
                <div class="description"><p>Quarto com varanda para o Jardim Botânico e para a cidade, decorado com azulejos tradicionais portugueses. Embora esteja no centro de Lisboa, descontraia a ler o seu livro e a ouvir o vento nas copas das árvores.</p></div>
            </div>
        </article>

        <article class="show-room-description">
            <div class="left-block">
                <p>Este quarto é dedicado à cidade de Lisboa, resgatada inúmeras vezes por D. Pedro V. A sua cuidadosa decoração incorporou nichos de pedra e azulejos portugueses  que brilham com a luz natural da cidade e realçam o que Lisboa tem de melhor para oferecer.</p>
                <div class="image-frame show-frame">
                    <div class="frame-inside show-frame" data-transition="crossfade">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/fotos-personagens-quartos/lisboa-moldura.jpg">
                    </div>
                </div>
            </div><div class="right-block">
                <ul>
                    <li>20m²</li>
                    <li>Acesso a internet de alta velocidade</li>
                    <li>Cama de casal king size (180cmx200cm) ou duas camas individuais</li>
                    <li>Varanda com vista sobre as árvores do Jardim Botânico e sobre a cidade de Lisboa</li>
                    <li>Ocupação: 2 adultos</li>
                        <li>Um bebé até aos 3 anos pode usar a cama de grades (dependente da disponibilidade). *Custo adicional</li>
                    <li>Pequeno Almoço buffet ou servido no quarto – à sua escolha</li>
                    <li>Televisão plasma de ecrã plano</li>
                    <li>Ar condicionado</li>
                    <li>Amenities de casa-de-banho premium</li>
                    <li>Serviços domésticos diários</li>
                    <li>Cofre no quarto</li>
                    <li>Secador de cabelo</li>
                </ul>
                <a class="big-size"><h4>Lisboa e o Rei D. Pedro V</h4> <div class="icon icon-inline icon-angle-right"></div></a>
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
        <div class="back-detail-room"><div class="icon icon-inline icon-angle-left"></div> VOLTAR PARA O QUARTO DA CIDADE DE LISBOA</div>
        <div class="group-text-img">
            <div class="img-content">
                <div>
                    <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/fotos-personagens-quartos/lisboa-big.jpg">
                </div>
            </div>
        </div><div class="text-content">
            <div>
            <div class="description-location">
                <h2>A LIGAÇÃO DO PRÍNCIPE REAL À CIDADE DE LISBOA</h2>
                <h3>Lisboa, a capital de Portugal, encontra-se nas margens do Rio Tejo, tão antiga e sábia como uma cidade do velho mundo pode ser. Não é possível falar de Lisboa sem descrever os seus céus azuis brilhantes, tempo solarengo e ar fresco do Oceano Atlântico. Uma cidade que é antiga em anos, mas sempre nova.</h3>
                <p>
                  Foi em Lisboa que nasceu o Príncipe Real, no epicentro do tumulto político e cultural do país, bem como a capital mais ocidental da Europa. Em Lisboa vivia também a Família Real, uma cidade famosa pelos seus marcos culturais que reavivavam as memórias da Época dos Descobrimentos.<br><br>
                  O Príncipe Real, D. Pedro V, tinha uma afeição especial pela cidade e pela sua beleza etérea. Nunca abandonou a cidade, mesmo nas épocas mais perigosas, quando Lisboa foi acometida de surtos infecciosos de cólera, e mais tarde de febre-amarela. Em vez de se abrigar, como recomendado pelos médicos, D. Pedro V correu a visitar os Hospitais, para oferecer apoio e ajuda aos doentes.<br><br>
                  Por essa razão, uma parte de Lisboa foi nomeada em sua memória, e apesar de ter reinado por pouco tempo, a sua passagem cintilante não passou despercebida no coração dos portugueses, que são constantemente recordados da sua vida cada vez que se passeiam no Jardim do Príncipe Real, mesmo no centro de Lisboa, onde a Casa do Príncipe se localiza.
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
