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
<div class="page-content facilities">
    <section class="content inside-room hostel-info">
        <article class="image-frame">
            <div class="frame-inside"data-transition="crossfade">
                <div class="fotorama fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--no-controls" data-autoplay="true" data-nav="false" data-arrows="true" data-click="true" data-swipe="true" data-allowfullscreen="true" data-loop="true" data-stopautoplayontouch="false"  data-width="100%" data-ratio="1432/577">
                    <div class="featured-content">                  
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/casadoprincipe/48078152.jpg">
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
        <div class="group-text-img">
            <div class="description">
                <p class="small-text">Our friendly and highly professional staff caters to all needs during your visit, hoping to make this a memorable stay whether travelling for business, leisure or with your family.</p>
            </div>
            <div class="img-content">
                <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/streetview.jpg">
            </div>
        </div><div class="text-content">
            <div class="center-content">
            <h3>casa do príncipe offers the following facilities &amp; services:</h3>
              <ul>
                    <li>1 Imperial Suite, 2 Royal Suites, 2 Premium Rooms and 3 Historic Rooms all with private bathrooms</li>
                    <li>An exceptional location in the heart of the historic center of Lisbon</li>
                    <li>Free WiFi in all accommodation and public areas</li>
                    <li>Welcome drink on arrival</li>
                    <li>LCD TV</li>
                    <li>Air conditioning</li>
                    <li>Free WiFi in all accommodation and public areas</li>
                    <li>Welcome drink on arrival</li>
                    <li>LCD TV</li>
                    <li>Air conditioning</li>
                </ul>
        </div>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        require(['facilitiesservices'],function(module){
            try{
                module.init();
            }catch(err) {
                console.log(err.message);
            }  
        });
    }
    </script>
</div>