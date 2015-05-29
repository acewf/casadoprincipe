<div class="page-content">
    <section class="content inside-room">
        <nav>
            <ul class="suite">
                <li><a data-rooms="imperial" href="<?php echo "$basePath"; ?>suites/imperial">IMPERIAL SUITE</a></li>
                <li><a data-rooms="royal" href="<?php echo "$basePath"; ?>suites/royal">ROYAL SUITES</a></li>
                <li><a data-rooms="premium" href="<?php echo "$basePath"; ?>suites/premium">PREMIUM ROOMS</a></li>
                <li><a data-rooms="historic" href="<?php echo "$basePath"; ?>suites/historic">HISTORIC ROOMS</a>
                </li></ul><ul class="room-choose">
                <li><a href="">QUEEN D. ESTEFÂNIA</a></li>
                <li class="active"><span></span><a href="">PALACE</a></li>
            </ul>
        </nav>
        <article class="image-frame">
            <div class="frame-inside"data-transition="crossfade">
                <div class="fotorama fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--no-controls" data-nav="false" data-arrows="true" data-click="true" data-swipe="true" data-allowfullscreen="true" data-loop="true" data-stopautoplayontouch="false"  data-width="100%" data-ratio="1432/577">
                    <div class="featured-content">
                        <div class="transparent-shadow"></div>
                        <div class="info-room-featured">
                            <h3>Queen D. Estefânia</h3>
                            <p>Spacious bedroom with lounge area, balcony overlooking the Príncipe Real garden, with three large windows that fill the room with natural light, creating a bright but relaxing atmosphere.</p>
                            <a href="<?php echo "$basePath"; ?>suites/royal" target="_self"><button>SEE DETAILS</button></a>
                        </div>                    
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/destaque-room.png">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/dsc_0281.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/palacio-da-liberdade-interior1.jpg">
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="app-history inside-room">
        <div class="description">
            <p class="small-text">Charming suites and rooms with the modern comfort of a hotel in an exceptional location in the historic center of Lisbon</p>
        </div><div class="text-content">
            <div class="description-location"><p>Casa do Príncipe takes its name after the Royal Prince, King D. Pedro V, whose story sets the tone for your unforgettable stay in Lisbon. Each of its 9 palatial suites and rooms refer to a meaningful part of this King’s life.</p></div>
        </div>
    </section>
</div>
<script>
console.log('try to define quarto room');
if (typeof requirejs == 'function') {
    requirejs(['approom']);
}
</script>