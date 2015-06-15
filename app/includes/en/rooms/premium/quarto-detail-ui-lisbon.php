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
                </div><div class="text-field-container"><input type="text" class="input-sm form-control" id="AVP_arrivalDate" name="arrivalDate" value="Check In"/></div><div data-icon="a" class="icon icon-caret-down-two"></div>
                </div><div class="box-date chech-out"><div data-icon="a" class="icon icon-calendar">
                </div><div class="text-field-container"><input type="text" class="input-sm form-control" id="AVP_exitDate" name="end" value="Check Out"/></div><div data-icon="a" class="icon icon-caret-down-two"></div>
                </div></div></div><div class="bookregister"><button id="bookit">BOOK NOW<div class="icon icon-arrow-right"></div></button></div></div></form>
        </article>

        <article class="show-room-info">
            <div class="center-title">
                <h3>Lisbon City Room</h3>
                <div class="description"><p>Bedroom with balcony overviewing the Botanical Garden and the city, decorated with antique and traditional Portuguese tiles - although located in the center of Lisbon, you can read your book, looking at the trees and listening to the birds</p></div>
            </div>
        </article>

        <article class="show-room-description">
            <div class="left-block">
                <p>This room is dedicated to the city of Lisbon, which was, as history tells, protected several times by D. Pedro V. Its detail-oriented decoration with antique Portuguese stone niches and tiles glazing with the city’s natural sunlight highlights the best of what our timeless city has to offer.</p>
                <div class="image-frame show-frame">
                    <div class="frame-inside show-frame" data-transition="crossfade">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/fotos-personagens-quartos/lisboa-moldura.jpg">
                    </div>
                </div>
            </div><div class="right-block">
                <ul>
                    <li>Size: 20m² / 215 sq.ft</li>
                    <li>Free WiFi high speed internet access</li>
                    <li>Extra large Queen bed (180cmx200cm/ 705⁄5´´ x 79½´´) or two twin beds - at your choice</li>
                    <li>Balcony overlooking the Botanical Garden trees and the Lisbon hills</li>
                    <li>Occupancy: 2 adults</li>
                        <li>Up to 1 baby under 3 years old may use a crib – subject to availability. * Extra charge</li>
                    <li>Breakfast buffet or room service breakfast on request</li>
                    <li>Premium bathroom amenities</li>
                    <li>LCD TV</li>
                    <li>Air conditioning</li>
                    <li>In-room safe</li>
                    <li>Hairdryer</li>
                    <li>Daily maid service</li>
                </ul>
                <a class="big-size"><h4>About Lisbon and the Royal Prince</h4> <div class="icon icon-inline icon-angle-right"></div></a>
            </div>
        </article>
        <article class="show-rooms">
            <div class="center-title">
                <h3>more rooms &amp; suites</h3>
            </div>
            <div class="rooms-types">
                <ul class="choose-rooms">
                    <li class="actived"><a data-pageid="page1" href="<?php echo $basePath.$lang;; ?>suites-rooms/imperial/king">IMPERIAL SUITE</a></li>
                    <li><a data-pageid="page2" href="<?php echo "$basePath"; ?>suites-rooms/royal">ROYAL ROOMS</a></li>
                    <li><a data-pageid="page3" href="<?php echo "$basePath"; ?>suites-rooms/historic">HISTORIC ROOMS</a></li>
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
                  <!--historic-->
                    <article class="room" >
                    <a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/queen">
                            <div class="small-frame">
                                <img alt="Queen D. Maria II Room" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-historic-maria.jpg">
                            </div>
                            <h5>Queen D. Maria II Room</h5>
                        </a>
                    </article>
                    <article class="room">
                    <a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/king">
                            <div class="small-frame">
                                <img alt="King D. Fernando II Room" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-historic-fernando.jpg">
                            </div>
                            <h5>King D. Fernando II Room</h5>
                        </a>
                    </article>
                    <article class="room">
                    <a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/sintra">
                            <div class="small-frame">
                                <img alt="Sintra Mountains Room" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-historic-sintra.jpg">
                            </div>
                            <h5>Sintra Mountains Room</h5>
                        </a>
                    </article>
                    <article class="room">
                    <a href="<?php echo $basePath.$lang; ?>suites-rooms/historic/voyages">
                            <div class="small-frame">
                                <img alt="Voyages Room" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-historic-voyages.jpg">
                            </div>
                            <h5>Voyages Room</h5>
                        </a>
                    </article>
                  <!--/historic-->
                </section>
            </div>
        </article>
    </section>
    <section class="app-history inside-room inside-detail">
        <div class="back-detail-room"><div class="icon icon-inline icon-angle-left"></div> BACK TO LISBON CITY ROOM</div>
        <div class="group-text-img">
            <div class="img-content">
                <div>
                    <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/fotos-personagens-quartos/lisboa-big.jpg">
                </div>
            </div>
        </div><div class="text-content">
            <div>
            <div class="description-location">
                <h2>THE LIAISON OF THE ROYAL PRINCE TO THE CITY OF LISBON</h2>
                <h3>lisbon, the capital city of portugal, lies on the banks of the tagus river, as old and wise as a city of the old world can be. one can’t speak of lisbon without mentioning its bright blue skies, sunny weather and fresh ocean air. a city that is old in years but ever-new, at the same time.</h3>
                <p>It was the birthplace of the Royal Prince, the epicenter of political and cultural turmoil and the most western capital city of Europe. It was also home to the Royal Family and made famous by its cultural landmarks, which still stir memories of the Age of the Discoveries.</p>
                <p>The Royal Prince, D. Pedro V, was very fond of Lisbon and its ethereal beauty. Even in the most dangerous of times, when Lisbon was committed with an infectious (and lethal) wave of cholera and later of yellow fever, D. Pedro V didn’t seek shelter as advised by his physicians, instead he ran to the Hospitals to offer aid and support to the ill.</p>
                <p>For that reason, a part of Lisbon was named in his memory, and despite having reigned for a short period of time, his shimmering passage didn’t go unnoticed in the hearts of the Portuguese people that are constantly reminded of him every time they take a stroll down the Royal Prince Garden (Jardim do Príncipe Real), right in the center of Lisbon, where “Casa do Príncipe, The Lisbon Bed & Breakfast” is located.</p>
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
