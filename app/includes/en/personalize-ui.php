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
<style>
  #map-canvas {
    width: 100%;
    height: 600px;
  }
</style>
<div class="page-content personalize">
    <section class="content inside-room hostel-info">
        <article class="image-frame">
            <div class="frame-inside"data-transition="crossfade">
                <div class="fotorama fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--no-controls" data-nav="false" data-arrows="true" data-autoplay="true" data-click="true" data-swipe="true" data-allowfullscreen="true" data-loop="true" data-stopautoplayontouch="false"  data-width="100%" data-ratio="1432/577">
                    <div class="featured-content">                  
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/slider-personalize-stay/01.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/slider-personalize-stay/02.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/slider-personalize-stay/03.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 4" src="<?php echo "$basePath"; ?>images/slider-personalize-stay/04.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/slider-personalize-stay/05.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/slider-personalize-stay/06.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/slider-personalize-stay/07.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 4" src="<?php echo "$basePath"; ?>images/slider-personalize-stay/08.jpg">
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="app-history inside-room">
        <div class="group-text-img">
            <div class="description">
                <p class="small-text">enjoy the comforts of casa do príncipe, where our attentive services begin long before your arrival and where you can also expect friendly and expert staff ready to cater to your every need.</p>
            </div>
            <div class="img-content">
                <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/fundo-personalize.png">
            </div>
        </div><div class="text-content">
            <div class="center-content">
                <div class="description-location">
                    <h3>Our team is available for a tailor made service </h3>
                    <p>To make sure you get the best out of your Lisbon experience, our team has spared no efforts, and with an extensive contact network that goes beyond Lisbon borders, we’re ready to give you access to the most scenic places, both touristic and secluded.<br><br>
In this intimate B&amp;B, you’ll find attentive service and welcoming and hospitable staff with wide experience and broad knowledge in arts and culture, that will pamper you and guide you through your visit in Lisbon. Whether it’s a restaurant suggestion, a museum tour or a Fado performance, we’ll give you all the scoop in what’s hip and happening in this beautiful and exciting city.<br><br>
Our team is available for a tailor made service before, during and after your stay and looks forward to welcoming you back to Casa do Príncipe!
</p></div>
            </div>
        </div>
    </section>       
</div>
<script>
if (typeof requirejs == 'function') {
    requirejs(['personalize','appmenu'],function(module,appmenu){
        try{
            appmenu.addModule(module,'personalize');
            module.init();
        }catch(err) {
            console.log(err.message);
        }  
    });
}
</script>