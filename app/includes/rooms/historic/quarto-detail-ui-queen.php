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
                        <div class="info-room-featured">
                            <h3>Queen D. Estefânia</h3>
                            <p>Spacious bedroom with lounge area, balcony overlooking the Príncipe Real garden, with three large windows that fill the room with natural light, creating a bright but relaxing atmosphere.</p>
                            <a href="<?php echo "$basePath"; ?>suites/" target="_self"><button>go previus</button></a>
                        </div>                    
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/fotos-sintra-palacio-da-pena-050.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/sintra-pena-palacio.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/palacio-da-liberdade-interior1.jpg">
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
                <div class="description"><p>Spacious bedroom with lounge area, balcony overlooking the Príncipe Real garden, with three large windows that fill the room with natural light, creating a bright but relaxing atmosphere.</p></div>
            </div>
        </article>

        <article class="show-room-description">
            <div class="left-block">
                <p>Indulge in the glamour of this imperial suite that pays tribute to the Príncipe Real (Royal Prince) D. Pedro V, who inspired the name our B&amp;B. This room´s decoration embodies the elegance and honour that characterized him. Let yourself be dazzled by the amazing stuccowork ceilings of this suite, taking you back in time to the elegant 19th century.</p>
                <div class="image-frame show-frame">
                    <div class="frame-inside show-frame" data-transition="crossfade">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/principe-moldura.png">
                    </div>
                </div>
            </div><div class="right-block">
                <ul>
                    <li>Size: 45m² /484 sq.ft</li>
                    <li>Extra large Queen bed or two twin beds</li>
                    <li>Balcony overlooking the Príncipe Real garden</li>
                    <li>Seating and relaxing area</li>
                    <li>Sofa double bed in the lounge area</li>
                    <li>Premium bathroom amenities</li>
                    <li>Size: 45m² /484 sq.ft</li>
                    <li>Extra large Queen bed or two twin beds</li>
                    <li>Balcony overlooking the Príncipe Real garden</li>
                    <li>Seating and relaxing area</li>
                    <li>Sofa double bed in the lounge area</li>
                    <li>Premium bathroom amenities</li>
                </ul>
                <a class="big-size" href="" target="_self"><h4>About King D. Pedro V<div class="icon icon-arrow-right"></div></h4></a>
            </div>
        </article>
        <article class="show-rooms">
            <div class="center-title">
                <h3>more rooms &amp; suites</h3>
            </div>
            <div class="rooms-types">
                <ul class="choose-rooms">
                    <li class="actived"><a href="<?php echo "$basePath"; ?>suites-rooms//royal">ROYAL SUITES</a></li>
                    <li><a href="<?php echo "$basePath"; ?>suites-rooms/premium">PREMIUM ROOMS</a></li>
                    <li><a href="<?php echo "$basePath"; ?>suites-rooms/historic">HISTORIC ROOMS</a></li>
                </ul>
            </div>
            <section class="rooms-view">
                <article class="room">
                    <a href="">
                        <div class="small-frame">
                            <img alt="Quarto Imperial" src="<?php echo "$basePath"; ?>images/img-moldura.png">
                        </div>
                        <h5>Imperial Suite</h5>
                    </a>
                </article><article class="room">
                    <a href="">
                        <div class="small-frame">
                            <img alt="Quarto Royal" src="<?php echo "$basePath"; ?>images/img-moldura.png">
                        </div>
                        <h5>Royal Suites</h5>
                    </a>
                </article>
            </section>
        </article>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        var myApp = require(['approomdetail'],function(module){
                try{
                    module.init();
                }catch(err) {
                    console.log(err.message);
                }  
            });
    }
    </script>
</div>
