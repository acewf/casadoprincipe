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
                </div><div class="text-field-container"><input type="text" class="input-sm form-control" id="AVP_arrivalDate" name="arrivalDate" value="Check In"/></div><div data-icon="a" class="icon icon-caret-down-two"></div>
                </div><div class="box-date chech-out"><div data-icon="a" class="icon icon-calendar">
                </div><div class="text-field-container"><input type="text" class="input-sm form-control" id="AVP_exitDate" name="end" value="Check Out"/></div><div data-icon="a" class="icon icon-caret-down-two"></div>
                </div></div></div><div class="bookregister"><button id="bookit">BOOK NOW<div class="icon icon-arrow-right"></div></button></div></div></form>
        </article>
        <article class="show-room-info">
            <div class="center-title">
                <h3>queen d. estefânia suite</h3>
                <div class="description"><p>Spacious bedroom with seating and relaxing area, three large windows with balcony overlooking the Botanical Garden trees, create a fresh and relaxing ambience – you can listen to the birds even though in the center of Lisbon.</p></div>
            </div>
        </article>

        <article class="show-room-description">
            <div class="left-block">
                <p>Dream away in the comfort and finesse of this suite, styled in honour of Queen D. Estefânia, wife of the Royal Prince, D. Pedro V. Maintaining a 19th century original parquet floor, this suite is decorated in shades of pink and is a veritable gallery of the unique traits of her personality, such as her kind-heartedness and compassion. The angels portrayed in the beautiful stuccowork ceiling will give you a sensation of a heavenly sleep.</p>
                <div class="image-frame show-frame">
                    <div class="frame-inside show-frame" data-transition="crossfade">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/fotos-personagens-quartos/rainha-moldura.png">
                    </div>
                </div>
            </div><div class="right-block">
                <ul>
                    <li>Size:30m² / 322 sq.ft</li>
                    <li>Free WiFi high speed internet access</li>
                    <li>Extra large Queen bed (180cmx200cm/ 705⁄5´´ x 79½´´) or two twin beds - at your choice</li>
                    <li>Balcony overlooking the Botanical Garden trees</li>
                    <li>Seating and relaxing area</li>
                    <li>Sofa double bed in the lounge area</li>
                    <li>Occupancy: 2 adults</li>

                        <li>Up to 2 children under 16 years old may use the sofa bed. * Extra charge</li>
                        <li>Up to 1 baby under 3 years old may use a crib – subject to availability. * Extra charge</li>

                    <li>Breakfast buffet or room service breakfast on request</li>
                    <li>Premium bathroom amenities</li>
                    <li>LCD TV</li>
                    <li>Air conditioning</li>
                    <li>In-room safe</li>
                    <li>Hairdryer</li>
                    <li>Daily maid service</li>

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
                <a class="big-size"><h4>About Queen D. Estefânia</h4> <div class="icon icon-inline icon-angle-right"></div></a>
            </div>
        </article>
        <article class="show-rooms">
            <div class="center-title">
                <h3>more rooms & suites</h3>
            </div>
            <div class="rooms-types">
                <ul class="choose-rooms">
                    <li class="actived"><a data-pageid="page1" href="<?php echo $basePath.$lang; ?>suites-rooms/imperial">IMPERIAL SUITE</a></li>
                    <li><a data-pageid="page2" href="<?php echo "$basePath"; ?>suites-rooms/premium">PREMIUM ROOMS</a></li>
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
                        <h5>King D. Pedro V</h5>
                        </a>
                    </article>
                  <!--/imperial-->
                </section>
                <section class="rooms-view" id="page2">
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
        <div class="back-detail-room"><div class="icon icon-inline icon-angle-left"></div> BACK TO QUEEN D. ESTEFÂNIA SUITE</div>
        <div class="group-text-img">
            <div class="img-content">
                <div>
                    <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/fotos-personagens-quartos/rainha-big.png">
                </div>
            </div>
        </div><div class="text-content">
            <div>
            <div class="description-location">
                <h2>WHO WAS THE QUEEN D. ESTEFÂNIA?</h2>
                <h3>a heart to earth and a spirit to heaven. these were the words the royal prince, and king, d. pedro v, used to describe his wife.</h3>
                <p>When it was first suggested that it was time King D. Pedro V to chose a wife, he became doubtful and apprehensive, and although he knew he needed a Queen to share the burden of the Royal duties, his rigid temper made it hard to find a suitable candidate.</p>
                <p>It was his aunt, Queen Victoria of England, who thought of young Estefânia (Queen Stephanie), a member of the Prussian Royal Family, and daughter of Prince Karl Anton of Hohenzollern Sigmaringen, gifted with a purity and sweetness of character that immediately captured the heart of the King. </p>
                <p>Two truly pure and devoted souls as they were, legend has it that they were often seen strolling in the palace gardens while holding hands, a romance that could only end as tragically as it did. Just 14 months after their wedding, Queen Stephanie died of diphtheria, casting a lifelong shadow over the spirit of D. Pedro V.</p>
                <p>Stephanie was loved by all who knew her. The short year she spent in Portugal was enough to leave a strong and vivid mark in this country’s history. In Lisbon, there’s a neighborhood and a children’s hospital named after her, showing her true devotion and commitment to people and children in need.</p>
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