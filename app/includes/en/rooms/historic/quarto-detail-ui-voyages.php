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
                            <h3>Voyages Room</h3>
                            <p>Bedroom with wooden floor and stuccowork ceiling enhanced with shades of blue.</p>
                            <a href="<?php //echo "$basePath"; ?>suites/" target="_self"><button>go previus</button></a>
                        </div>-->
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/historic/voyages/historic-voyages-01.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/suites-and-rooms/historic/voyages/historic-voyages-02.jpg">
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
                <h3>Voyages Room</h3>
                <div class="description"><p>Bedroom with wooden floor and stuccowork ceiling enhanced with shades of blue.</p></div>
            </div>
        </article>

        <article class="show-room-description">
            <div class="left-block">
                <p>This room is inspired by the early voyages and travelling endured by the Royal Prince to bring new knowledge to Portugal.  This room´s decoration with its blue stuccowork ceiling calls us to wander between sea and sky while capturing the influences of a 19th century Europe, as seen by the keen eyes of a young Prince, soon to be King.</p>
                <div class="image-frame show-frame">
                    <div class="frame-inside show-frame" data-transition="crossfade">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/principe-moldura.png">
                    </div>
                </div>
            </div><div class="right-block">
                <ul>
                    <li>Size: 14m² / 150 sq.ft</li>
                    <li>Welcome drink on arrival</li>
                    <li>Free WiFi high speed internet access</li>
                    <li>Queen bed (160cmx200cm/ 626⁄6´´ x 79½´´)</li>
                    <li>Window overlooking the Botanical garden trees</li>
                    <li>Breakfast buffet</li>
                    <li>Occupancy: 2</li>
                    <li>Premium bathroom amenities</li>
                    <li>LCD TV</li>
                    <li>Air conditioning</li>
                    <li>In-room safe</li>
                    <li>Hairdryer</li>
                    <li>Daily maid service</li>
                </ul>
                <a class="big-size"><h4>The Royal Prince voyages</h4> <div class="icon icon-inline icon-angle-right"></div></a>
            </div>
        </article>
        <article class="show-rooms">
            <div class="center-title">
                <h3>more rooms &amp; suites</h3>
            </div>
            <div class="rooms-types">
                <ul class="choose-rooms">
                    <li class="actived"><a data-pageid="page1" href="<?php echo $basePath.$lang; ?>suites-rooms/imperial/king">IMPERIAL SUITE</a></li>
                    <li><a data-pageid="page2" href="<?php echo $basePath.$lang; ?>suites-rooms/royal">ROYAL ROOMS</a></li>
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
        <div class="back-detail-room"><div class="icon icon-inline icon-angle-left"></div> BACK TO VOYAGES ROOM</div>
        <div class="group-text-img">
            <div class="img-content">
                <div>
                    <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/principe-big.png">
                </div>
            </div>
        </div><div class="text-content">
            <div>
            <div class="description-location">
                <h2>THE INFLUENCE THE VOYAGES HAD ON THE LIFE OF THE ROYAL PRINCE</h2>
                <h3>It was customary for young princes and members of the aristocracy to travel through Europe in order to gain new perspectives, broaden their views and knowledge of the world. It was somewhat of a rite of passage between adolescence and adulthood.</h3>
                <p>The Royal Prince was no exception. At the age of 16, and right after his mother’s passing, his father, King D. Fernando II, sent him on his first European travel aboard the Mindelo ship, with England as his first destination.</p>
                <p>The things he saw filled him with hope and wonder, as his mind started to race with endless possibilities. He kept a detailed record of everything he saw and heard, never ceasing to compare it with Portugal.</p>
                <p>This room captures the influences of an 18th century Europe, as seen by the keen eyes of a young Prince, soon to be King.</p>
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
