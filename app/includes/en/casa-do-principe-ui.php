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
<div class="page-content principe-house">
    <section class="content inside-room hostel-info">
        <article class="image-frame">
            <div class="frame-inside"data-transition="crossfade">
                <div class="fotorama fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--no-controls" data-nav="false" data-arrows="true" data-autoplay="true" data-click="true" data-swipe="true" data-allowfullscreen="true" data-loop="true" data-stopautoplayontouch="false"  data-width="100%" data-ratio="1432/577">
                    <div class="featured-content">
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/slider-casa-do-principe/01.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/slider-casa-do-principe/02.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/slider-casa-do-principe/03.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 4" src="<?php echo "$basePath"; ?>images/slider-casa-do-principe/04.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 5" src="<?php echo "$basePath"; ?>images/slider-casa-do-principe/05.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 6" src="<?php echo "$basePath"; ?>images/slider-casa-do-principe/06.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 7" src="<?php echo "$basePath"; ?>images/slider-casa-do-principe/07.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 8" src="<?php echo "$basePath"; ?>images/slider-casa-do-principe/08.jpg">
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="app-history inside-room">
        <div class="group-text-img">
            <div class="description">
                <p class="small-text">Casa Do Príncipe Is A Charming B&amp;b Nestled In The Heart Of Lisbon, In One Of Its Trendiest And Most Exciting Areas, Facing The Príncipe Real Garden.</p>
            </div>
            <div class="img-content">
                <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/dompedro.png">
            </div>
        </div><div class="text-content">
            <div>
                <div class="description-location">
                    <h3>The ultimate destination for your lisbon experience</h3>
                    <p>With spacious and sunny rooms, this intimate B&amp;B will make you feel at home with the comfort and quality of a hotel, benefiting from its spectacular location at walking distance from fashionable shops and city sights, signature restaurants and all that makes Lisbon Europe’s most well-kept secret.<br><br>
    Casa do Príncipe takes its name after the Royal Prince, King D. Pedro V, whose story sets the tone for your unforgettable stay in Lisbon. Each of its 9 palatial suites and rooms refer to a meaningful part of this King’s life.<br><br>
    It is located on the first floor of a 19th century building, with unique traits that make this luscious B&amp;B the ultimate destination for your Lisbon experience: its 4 meter (13 ft) indoor height, intricately stuccowork ceilings, real hardwood floors and authentic frescos. The beautiful restoration work on this house  incorporated genuine 19th century decoration with a touch of contemporary details all combined to create an exclusive atmosphere of sophistication and grace, discretion and elegance.</p></div>
            </div>
        </div>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        require(['casadoprincipe','appmenu'],function(module,appmenu){
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