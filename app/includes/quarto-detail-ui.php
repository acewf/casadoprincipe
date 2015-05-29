<!-- build:css styles/vendor/bootstrap.css -->
<link rel="stylesheet" href="<?php echo "$basePath"; ?>../bower_components/bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo "$basePath"; ?>../bower_components/bootstrap/dist/css/bootstrap.css">
<!-- endbuild -->
<div class="page-content">
    <section class="content inside-room room-detail">
        <nav>
            <ul class="suite choose-childs">
                <li><a data-rooms="imperial" href="imperial">IMPERIAL SUITE</a></li>
                <li><a data-rooms="royal" href="royal">ROYAL SUITES</a></li>
                <li><a data-rooms="premium" href="premium">PREMIUM ROOMS</a></li>
                <li><a data-rooms="historic" href="historic">HISTORIC ROOMS</a></li>
            </ul>
            <ul class="room-choose show-childs">
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
                            <a href="<?php echo "$basePath"; ?>suites/" target="_self"><button>go previus</button></a>
                        </div>                    
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/sintra-pena-palacio.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/fotos-sintra-palacio-da-pena-050.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/palacio-da-liberdade-interior1.jpg">
                    </div>
                </div>
            </div>
        </article>
        <article class="booking"><div class="booker"><div class="input-daterange input-group" id="datepicker"><div class="box-date chech-in"> <div data-icon="a" class="icon icon-calendar"></div> <div class="text-field-container"><input type="text" class="input-sm form-control" name="start" value="Check In"/></div><div data-icon="a" class="icon icon-caret-down-two"></div>
            </div><div class="box-date chech-out"><div data-icon="a" class="icon icon-calendar"></div><div class="text-field-container"><input type="text" class="input-sm form-control" name="end" value="Check Out"/></div><div data-icon="a" class="icon icon-caret-down-two"></div>
            </div></div><div class="bookregister"><button>BOOK NOW<div class="icon icon-arrow-right"></div></button></div></div></article>
    </section>
     <section class="app-history inside-room room-detail">
        <div class="description">
            <p class="small-text">Charming suites and rooms with the modern comfort of a hotel in an exceptional location in the historic center of Lisbon</p>
        </div><div class="text-content">
            <div class="description-location"><p>Casa do Príncipe takes its name after the Royal Prince, King D. Pedro V, whose story sets the tone for your unforgettable stay in Lisbon. Each of its 9 palatial suites and rooms refer to a meaningful part of this King’s life.</p></div>
        </div>
    </section>
</div>
<script>
console.log('try to define quarto detail room');
if (typeof requirejs == 'function') {
    requirejs(['approom']);
}
</script>