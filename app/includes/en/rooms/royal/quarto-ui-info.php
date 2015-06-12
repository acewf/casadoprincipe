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

<div class="page-content generic-room">
    <section class="content inside-room home-rooms">
        <article class="image-frame">
            <div class="frame-inside"data-transition="crossfade">
                <div class="fotorama fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--no-controls" data-nav="false" data-autoplay="true" data-arrows="true" data-click="true" data-swipe="true" data-allowfullscreen="true" data-loop="true" data-stopautoplayontouch="true"  data-width="100%" data-ratio="1432/577">
                    <div class="featured-content">
                        <div class="info-room-featured">
                            <h3>Queen D. Estefânia</h3>
                            <p>Spacious bedroom with seating and relaxing area, three large windows with balcony overlooking the Botanical Garden trees, create a fresh and relaxing ambience – you can listen to the birds even though in the center of Lisbon.</p>
                            <a href="<?php echo $basePath.$lang; ?>suites-rooms/royal/queen" target="_self"><button>SEE DETAILS</button></a>
                        </div>
                        <div class="transparent-shadow"></div>
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/suites-and-rooms/royal-suits/queen-d-estefania/royal-estefania-01.jpg">
                    </div>
                    <div class="featured-content">
                        <div class="info-room-featured">
                            <h3>Palace Room</h3>
                            <p>Spacious bedroom with lounge area, two large windows facing the Príncipe Real garden, creating a fresh and relaxing palatial ambience.</p>
                            <a href="<?php echo $basePath.$lang; ?>suites-rooms/royal/palace" target="_self"><button>SEE DETAILS</button></a>
                        </div>
                        <div class="transparent-shadow"></div>
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/suites-and-rooms/royal-suits/palace-suite/royal-palace-01.jpg">
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="app-history inside-room home-rooms">
        <div class="description offset">
            <p class="small-text">Charming suites and rooms with the modern comfort of a hotel in an exceptional location in the historic center of Lisbon</p>
        </div><div class="text-content">
            <div class="description-location positionsys"><p>Casa do Príncipe takes its name after the Royal Prince, King D. Pedro V, whose story sets the tone for your unforgettable stay in Lisbon. Each of its 9 palatial suites and rooms refer to a meaningful part of this King’s life.</p></div>
        </div>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        require(['approominfo'],function(module){
            try{
                module.init();
            }catch(err) {
                console.log(err.message);
            }               
        });
    } 
    </script>
</div>