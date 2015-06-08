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
<div class="page-content homepage">
    <section class="content">
        <article class="image-frame">
            <div class="frame-inside" data-transition="crossfade">
                <a class="link-legenda" href="https://www.secure-hotel-booking.com/smart/Casa-do-Principe/2E3B/en/">
                    <div class="legenda">                              
                        <h1 class="title">BOOK NOW</h1>
                        <p class="description">best available rate</p>
                    </div>
                </a>
                <a class="link-legenda" style="display:none" href="">
                    <div class="legenda">
                        <h3 class="title">BOOK NOW</h3>
                    </div>
                </a>
                <div class="page-marker">
                    <a class="previous"></a>
                    <a class="next"></a>
                </div>
                <div class="fotorama fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--no-controls" data-nav="false" data-autoplay="true"  data-arrows="true" data-click="true" data-swipe="true" data-allowfullscreen="true" data-loop="true" data-stopautoplayontouch="false"  data-width="100%" data-ratio="1432/577">
                    <div class="featured-content">
                        <p>a charming bed &amp; breakfast nestled in the heart of Lisbon</p>
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/slider-home/01.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/slider-home/02.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/slider-home/03.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 4" src="<?php echo "$basePath"; ?>images/slider-home/04.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 5" src="<?php echo "$basePath"; ?>images/slider-home/05.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 6" src="<?php echo "$basePath"; ?>images/slider-home/06.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 7" src="<?php echo "$basePath"; ?>images/slider-home/07.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 8" src="<?php echo "$basePath"; ?>images/slider-home/08.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 9" src="<?php echo "$basePath"; ?>images/slider-home/09.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 10" src="<?php echo "$basePath"; ?>images/slider-home/10.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 11" src="<?php echo "$basePath"; ?>images/slider-home/11.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 12" src="<?php echo "$basePath"; ?>images/slider-home/12.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 13" src="<?php echo "$basePath"; ?>images/slider-home/14.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 14" src="<?php echo "$basePath"; ?>images/slider-home/14.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 15" src="<?php echo "$basePath"; ?>images/slider-home/15.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 16" src="<?php echo "$basePath"; ?>images/slider-home/16.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 17" src="<?php echo "$basePath"; ?>images/slider-home/17.jpg">
                    </div>
                </div>
            </div>
        </article>
        <article class="reasons">
            <h2>located in one of the most trendiest and exciting areas</h2>
            <div class="description"><p>Casa do Príncipe is located in one of its trendiest and most exciting areas of Lisbon, facing the Príncipe Real Garden. With spacious and sunny rooms, this intimate B&amp;B will make you feel at home with the comfort and quality of a hotel, benefiting from its spectacular location at walking distance from fashionable shops and city sights, signature restaurants and all that makes Lisbon Europe’s most well-kept secret.</p></div>
        </article>
        <article class="show-rooms">
            <div class="center-title">
                <h3>premium suites exquisite rooms</h3>
            </div>
            <section class="rooms-view">
                <article class="room">
                    <a href="<?php echo "$basePath"; ?>suites-rooms/imperial">
                        <div class="small-frame">
                            <img alt="Quarto Imperial" src="<?php echo "$basePath"; ?>images/img-moldura.png">
                        </div>
                        <h5>Imperial Suite</h5>
                    </a>
                </article><article class="room">
                    <a href="<?php echo "$basePath"; ?>suites-rooms/royal">
                        <div class="small-frame">
                            <img alt="Quarto Royal" src="<?php echo "$basePath"; ?>images/img-moldura.png">
                        </div>
                        <h5>Royal Suites</h5>
                    </a>
                </article><article class="room">
                    <a href="<?php echo "$basePath"; ?>suites-rooms/premium">
                        <div class="small-frame">
                            <img alt="Quarto Premium" src="<?php echo "$basePath"; ?>images/img-moldura.png">
                        </div>
                        <h5>Premium Rooms</h5>
                    </a>
                </article><article class="room">
                    <a href="<?php echo "$basePath"; ?>suites-rooms/historic">
                        <div class="small-frame">
                            <img alt="Quarto Historic" src="<?php echo "$basePath"; ?>images/img-moldura.png">
                        </div>
                        <h5>Historic Rooms</h5>
                    </a>
                </article>
            </section>
        </article>
        <article class="reasons">
            <h2>the ultimate destination for your Lisbon experience</h2>
            <div class="description"><p>Casa do Principe is located on the first floor of a 19th century building. The beautiful restoration work on this house  incorporated genuine 19th century decoration with a touch of contemporary details all combined to create an exclusive atmosphere of sophistication and grace, discretion and elegance.</p></div>
        </article>
    </section>         
    <section class="app-history">
    	<div class="img-content">
    	    <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/dompedro.png">
    	</div><div class="description">
    	    <h3>Royal Prince, King D. Pedro V</h3>
    	    <p class="small-text">Casa do Príncipe takes its name after the Royal Prince, King D. Pedro V, whose story sets the tone for your unforgettable stay in Lisbon. Each of its 9 palatial suites and rooms refer to a meaningful part of this King’s</p>
    	    <a href="<?php echo "$basePath"; ?>casa-do-principe" target="_self"><h4>MEET THE KING</h4></a>
    	</div>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        requirejs(['apphome'],function(module){
            try{
                module.init();
            }catch(err) {
                console.log(err.message);
            }  
        });
    }
    </script>
</div>