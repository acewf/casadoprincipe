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
                </div><div class="text-field-container"><input type="text" class="input-sm form-control" id="AVP_arrivalDate" name="arrivalDate" value="Check In"/></div><div data-icon="a" class="icon icon-caret-down-two"></div>
                </div><div class="box-date chech-out"><div data-icon="a" class="icon icon-calendar">
                </div><div class="text-field-container"><input type="text" class="input-sm form-control" id="AVP_exitDate" name="end" value="Check Out"/></div><div data-icon="a" class="icon icon-caret-down-two"></div>
                </div></div></div><div class="bookregister"><button id="bookit">BOOK NOW<div class="icon icon-arrow-right"></div></button></div></div></form>
        </article>
        <article class="show-room-info">
            <div class="center-title">
                <h3>Palace Suite</h3>
                <div class="description"><p>Spacious bedroom with lounge area, two large windows facing the Príncipe Real garden, creating a fresh and relaxing palatial ambience.</p></div>
            </div>
        </article>

        <article class="show-room-description">
            <div class="left-block">
                <p>The Palace Suite is an ode to the Palace of Necessidades, where the Royal Prince, D. Pedro V, was born and lived. The palette of elegant greens, the stunning stuccowork ceiling and the carefully chosen furniture makes us feel we too can dream away as if we were in a room of the Palace, waltzing our way through the hallways.</p>
                <div class="image-frame show-frame">
                    <div class="frame-inside show-frame" data-transition="crossfade">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/fotos-personagens-quartos/necessidades-moldura.jpg">
                    </div>
                </div>
            </div><div class="right-block">
                <ul>
                    <li>Size: 35m² / 376 sq.ft</li>
                    <li>Free WiFi high speed internet access</li>
                    <li>Extra large Queen bed (180cmx200cm/ 70 <sup>5/5''</sup> x 79 <sup>1/2''</sup>) or two twin beds - at your choice</li>
                    <li>Windows overlooking the Príncipe Real garden</li>
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
                </ul>
                <a class="big-size"><h4>About Palácio of Necessidades</h4> <div class="icon icon-inline icon-angle-right"></div></a>
            </div>
        </article>
        <article class="show-rooms">
            <div class="center-title">
                <h3>more rooms & suites</h3>
            </div>
            <div class="rooms-types">
                <ul class="choose-rooms">
                    <li class="actived"><a data-pageid="page1" href="<?php echo $basePath.$lang; ?>suites-rooms/imperial/king">IMPERIAL SUITE</a></li>
                    <li><a data-pageid="page2" href="<?php echo $basePath.$lang; ?>suites-rooms/premium">PREMIUM ROOMS</a></li>
                    <li><a data-pageid="page3" href="<?php echo $basePath.$lang; ?>suites-rooms/historic">HISTORIC ROOMS</a></li>
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
        <div class="back-detail-room"><div class="icon icon-inline icon-angle-left"></div> BACK TO PALACE SUITE</div>
        <div class="group-text-img">
            <div class="img-content">
                <div>
                    <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/fotos-personagens-quartos/necessidades-big.jpg">
                </div>
            </div>
        </div><div class="text-content">
            <div>
            <div class="description-location">
                <h2>THE PALÁCIO OF NECESSIDADES AND ITS LIAISON TO THE ROYAL PRINCE</h2>
                <h3>the regal atmosphere of the palace of necessidades, in lisbon, is captured in this room.</h3>
                <p>The Palace of Necessidades was the first witness to the birth of the Royal Prince, born in great solemnity as he was the first prince to be born and baptized there since the return of the Royal Family from its long exile in Brazil.</p>
                <p>It was not only the home to the Royal Family, it was also a stronghold for political negotiations, a niche where both personal and political life came together.</p>
                <p>This beautiful 19th century palace, with its endless hallways and staircases of pink marble stone, surrounded by 10 acres of woods, was once a Convent, a place of pilgrimage and devotion to Our Lady of Necessidades, and only later turned into a Palace.</p>
                <p>The Palace was the setting for all the milestones of the Royal Prince’s life: his birth, his baptism, held in great pomp and circumstance, and his wedding. It was also within those arched hallways where he professed his undying love to Queen D. Estefânia (Queen Stephanie), his wife, where they exchanged vows and spent their wedding night and where they blissfully spent their days.</p>
                <p>This Palace, now home to the Portuguese Ministry of Foreign Affairs, is still full of these precious memories of D. Pedro V, his firm steps still echoing in the halls, his traces still scattered around the gardens and his life still remembered by all who visit it.</p>
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