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
                            <h3>Imperial Suite</h3>
                            <p>Spacious bedroom with lounge area, balcony overlooking the Príncipe Real garden, with three large windows that fill the room with natural light, creating a bright but relaxing atmosphere.</p>
                            <a href="<?php echo "$basePath"; ?>suites/" target="_self"><button>go previus</button></a>
                        </div>                    
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/fotos-sintra-palacio-da-pena-050.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/fotos-sintra-palacio-da-pena-050.jpg">
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
                <p>Indulge in the glamour of this imperial suite that pays tribute to the Príncipe Real (Royal Prince) D. Pedro V, who inspired the name our B&B. This room´s decoration embodies the elegance and honour that characterized him. Let yourself be dazzled by the amazing stuccowork ceilings of this suite, taking you back in time to the elegant 19th century.</p>
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
                <a class="big-size"><h4>About King D. Pedro V<div class="icon icon-arrow-right"></div></h4></a>
            </div>
        </article>
        <article class="show-rooms">
            <div class="center-title">
                <h3>more rooms & suites</h3>
            </div>
            <div class="rooms-types">
                <ul class="choose-rooms">
                    <li class="actived"><a data-pageid="page1" href="<?php echo "$basePath"; ?>suites-rooms/royal">ROYAL SUITES</a></li>
                    <li><a data-pageid="page2" href="<?php echo "$basePath"; ?>suites-rooms/premium">PREMIUM ROOMS</a></li>
                    <li><a data-pageid="page3" href="<?php echo "$basePath"; ?>suites-rooms/historic">HISTORIC ROOMS</a></li>
                </ul>
            </div>
            <div class="rooms-group">
                <section class="rooms-view" id="page1">
                    <article class="room" >
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
                <section class="rooms-view" id="page2">
                    <article class="room" >
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
                    </article><article class="room">
                        <a href="">
                            <div class="small-frame">
                                <img alt="Quarto Royal" src="<?php echo "$basePath"; ?>images/img-moldura.png">
                            </div>
                            <h5>Royal Suites</h5>
                        </a>
                    </article>                    
                </section>
                <section class="rooms-view" id="page3">
                    <article class="room" >
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
            </div>
        </article>
    </section>
    <section class="app-history inside-room inside-detail">
        <div class="back-detail-room">BACK TO KING D. PEDRO V SUITE</div>
        <div class="group-text-img">
            <div class="img-content">
                <div>
                    <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/principe-big.png">
                </div>
            </div>
        </div><div class="text-content">
            <div >
            <div class="description-location">
                <h2>WHO WAS THE ROYAL PRINCE?</h2>
                <h3>the answer to this question is as enigmatic as the prince himself.</h3>
                <p>Born in Lisbon in 1837, the Prince soon displayed great curiosity about everything that surrounded him, becoming eager to learn more and more about the world he lived in. Every bit of knowledge he gathered started weighing upon him, as he grew into a very private and isolated young man with a loud mind, racing with intricate thoughts and plans for the country he would soon reign. It is often said that quiet people have the loudest mind, and that was precisely the case.<br> 
He found true comfort and understanding in the loving arms of his wife, Queen D. Estefânia (Queen Stephanie). It was one of those rare cases of love at first sight, for they only met on their wedding day, which was very common at the time. Queen D. Estefânia understood and eased his troubles as no one could, their naïveté and innocence moving all those around them. It was truly the love story of the century and moulded every inch of the Royal Prince’s character.<br>
He devoted his life to his country, seeking to further develop it and to bring comfort to the people, through many investments, some of them personal. He founded schools and hospitals, visited and comforted the sick and he was the stable figure that Portugal desperately needed.<br><br>
The Praça do Príncipe Real (Royal Prince Square) was named after him by his loving mother, Queen D. Maria II, and has kept his name ever since, marking its place in the front row of Lisbon’s history.<br><br>
His tragic death, at 24 years old of age, was mourned throughout Europe, leaving the weight of the crown to his brother D. Luís. However, the role he played in History still fills books and fables with the adventures and reflections of a mind very much ahead of its time. The sharp mind of the Royal Prince.
</p></div>
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