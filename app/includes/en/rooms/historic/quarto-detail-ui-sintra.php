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
                </div><div class="text-field-container"><input type="text" class="input-sm form-control" id="AVP_arrivalDate" name="arrivalDate" value="Check In"/></div><div data-icon="a" class="icon icon-caret-down-two"></div>
                </div><div class="box-date chech-out"><div data-icon="a" class="icon icon-calendar">
                </div><div class="text-field-container"><input type="text" class="input-sm form-control" id="AVP_exitDate" name="end" value="Check Out"/></div><div data-icon="a" class="icon icon-caret-down-two"></div>
                </div></div></div><div class="bookregister"><button id="bookit">BOOK NOW<div class="icon icon-arrow-right"></div></button></div></div></form>
        </article>

        <article class="show-room-info">
            <div class="center-title">
                <h3>Sintra Mountains Room</h3>
                <div class="description"><p>Bedroom with wooden floors and views to the Príncipe Real garden.</p></div>
            </div>
        </article>

        <article class="show-room-description">
            <div class="left-block">
                <p>This room is styled in homage to Sintra, a charming traditional village not far from Lisbon where D. Pedro V lived part of his childhood and where the Portuguese court spent most of the summer. With its palettes of greens and depictions of Sintra trees, this sunny room makes us travel to an atmosphere of peace and freshness.</p>
                <div class="image-frame show-frame">
                    <div class="frame-inside show-frame" data-transition="crossfade">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/fotos-personagens-quartos/sintra-moldura.jpg">
                    </div>
                </div>
            </div><div class="right-block">
                <ul>
                    <li>Size: 17m² / 183 sq.ft</li>
                    <li>Free WiFi high speed internet access</li>
                    <li>Queen bed (160cmx200cm/ 62 <sup>6/6''</sup> x 79 <sup>1/2''</sup>)</li>
                    <li>Breakfast buffet</li>
                    <li>Window overlooking the Príncipe Real garden</li>
                    <li>Occupancy: 2</li>
                    <li>Premium bathroom amenities</li>
                    <li>LCD TV</li>
                    <li>Air conditioning</li>
                    <li>In-room safe</li>
                    <li>Hairdryer</li>
                    <li>Daily maid service</li>
                </ul>
                <a class="big-size"><h4>Sintra and King D. Pedro V</h4> <div class="icon icon-inline icon-angle-right"></div></a>
            </div>
        </article>
        <article class="show-rooms">
            <div class="center-title">
                <h3>more rooms &amp; suites</h3>
            </div>
            <div class="rooms-types">
                <ul class="choose-rooms">
                    <li class="actived"><a data-pageid="page1" href="<?php echo $basePath.$lang; ?>suites-rooms/imperial/king">IMPERIAL SUITE</a></li>
                    <li><a data-pageid="page2" href="<?php echo $basePath.$lang; ?>suites-rooms/royal">ROYAL SUITE</a></li>
                    <li><a data-pageid="page3" href="<?php echo $basePath.$lang; ?>suites-rooms/premium">PREMIUM ROOMS</a></li>
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
                                <img alt="Queen D.Estefânia Suite" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-royal-estefania.jpg">
                            </div>
                            <h5>Queen D.Estefânia Suite</h5>
                        </a>
                    </article>
                    <article class="room">
                        <a href="<?php echo $basePath.$lang; ?>suites-rooms/royal/palace">
                            <div class="small-frame">
                                <img alt="Palace Suite" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-royal-palace.jpg">
                            </div>
                            <h5>Palace Suite</h5>
                        </a>
                    </article>
                  <!--/royal-->
                </section>
                <section class="rooms-view" id="page3">
                  <!--premium-->
                    <article class="room" >
                    <a href="<?php echo $basePath.$lang; ?>suites-rooms/premium/arts">
                            <div class="small-frame">
                                <img alt="Arts Room" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-premium-arts.jpg">
                            </div>
                            <h5>Arts Room</h5>
                        </a>
                    </article>
                    <article class="room">
                    <a href="<?php echo $basePath.$lang; ?>suites-rooms/premium/lisbon">
                            <div class="small-frame">
                                <img alt="Lisbon City Room" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-premium-lisboa.jpg">
                            </div>
                            <h5>Lisbon City Room</h5>
                        </a>
                    <!--/premium-->
                </section>
            </div>
        </article>
    </section>
    <section class="app-history inside-room inside-detail">
        <div class="back-detail-room"><div class="icon icon-inline icon-angle-left"></div> BACK TO SINTRA MOUNTAINS ROOM</div>
        <div class="group-text-img">
            <div class="img-content">
                <div>
                    <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/fotos-personagens-quartos/sintra-big.jpg">
                </div>
            </div>
        </div><div class="text-content">
            <div>
            <div class="description-location">
                <h2>THE CONNECTION BETWEEN SINTRA AND KING D. PEDRO</h2>
                <h3>This room evokes the atmosphere of the Sintra Mountains, located in western Portugal, just a short 30 km from Lisbon.</h3>
                <p>The Sintra Mountains are enshrined in myths and legends, which arose from its ancient history.  Its secluded location made it a perfect setting for palaces and castles, such as the Pena Palace, the Sintra National Palace, the Palace of Monserrate and the Moorish Castle, far from curious eyes.</p>
                <p>Often did the Royal Family spend their summers there due to its temperate climate, when the temperatures of busy Lisbon were too hot to bare.</p>
                <p>It was only after the birth of D. Pedro V that his father, D. Fernando II, started planning the construction of the Pena Palace from the ruins of an ancient convent that sat on the top of the mountains, overlooking the sea. In his vision, D. Fernando captured the essence of his Bavarian upbringing, projecting it into the architecture of the palace, which resembles the Neuschwanstein Castle, built by D. Fernando’s cousin and King of Bavaria, Ludwig II.</p>
                <p>D. Pedro V had a special connection to the palace, having spent, if not the best, certainly the happiest moments of his life there. Both he and Queen D. Estefânia, his wife, were often caught holding hands in the gardens in an unusual gesture for royalty, the epitome of a short but breathtaking romance that ended too soon, but would somehow last forever.</p>
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
