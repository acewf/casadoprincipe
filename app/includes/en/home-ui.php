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
<div class="page-content homepage">
    <section class="content">
        <article class="image-frame">
            <div class="frame-inside" data-transition="crossfade">
                <a class="link-legenda" href="https://www.secure-hotel-booking.com/smart/Casa-do-Principe/2E3B/pt/">
                    <div class="legenda">                              
                        <h1 class="title">RESERVE ONLINE</h1>
                        <p class="description">melhor tarifa disponível</p>
                    </div>
                </a>
                <a class="link-legenda" style="display:none" href="">
                    <div class="legenda">
                        <h3 class="title">RESERVE ONLINE</h3>
                    </div>
                </a>
                <div class="page-marker">
                    <a class="previous"></a>
                    <a class="next"></a>
                </div>
                <div class="fotorama fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--no-controls" data-allowfullscreen="native" data-allowfullscreen="true" data-nav="false" data-autoplay="true"  data-arrows="true" data-click="true" data-swipe="true"  data-loop="true" data-stopautoplayontouch="true"  data-width="100%" data-ratio="1432/577">
                    <div class="featured-content">
                        <p>A Casa do Príncipe é um B&amp;B de charme no centro de Lisboa</p>
                        <div class="transparent-shadow"></div>
                        <img alt="destaque 1" src="<?php echo "$basePath"; ?>images/slider-home/01.jpg">
                    </div>
                    <div class="featured-content">
                        <!--<div class="transparent-shadow" <?php //style="background-color: rgba(0, 0, 0, .8)"?>></div>-->
                        <img alt="destaque 2" src="<?php echo "$basePath"; ?>images/slider-home/02.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 3" src="<?php echo "$basePath"; ?>images/slider-home/03.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 4" src="<?php echo "$basePath"; ?>images/slider-home/04.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 5" src="<?php echo "$basePath"; ?>images/slider-home/06.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 6" src="<?php echo "$basePath"; ?>images/slider-home/07.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 7" src="<?php echo "$basePath"; ?>images/slider-home/09.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 8" src="<?php echo "$basePath"; ?>images/slider-home/11.jpg">
                    </div>
                    <div class="featured-content">
<<<<<<< HEAD:app/includes/home-ui.php
                        <img alt="destaque 9" src="<?php echo "$basePath"; ?>images/slider-home/12.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 10" src="<?php echo "$basePath"; ?>images/slider-home/14.jpg">
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 11" src="<?php echo "$basePath"; ?>images/slider-home/17.jpg">
                    </div>
                    <!--<div class="featured-content">
                        <img alt="destaque 9" src="<?php echo "$basePath"; ?>images/slider-home/09.jpg">
=======
                        <img alt="destaque 8" src="<?php echo "$basePath"; ?>images/slider-home/12.jpg">
>>>>>>> a0c03b28ce75073e97a855b60ac297ae9fbcde3b:app/includes/en/home-ui.php
                    </div>
                    <div class="featured-content">
                        <img alt="destaque 8" src="<?php echo "$basePath"; ?>images/slider-home/14.jpg">
                    </div>
                    <div class="featured-content">
<<<<<<< HEAD:app/includes/home-ui.php
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
                    </div>-->
=======
                        <img alt="destaque 8" src="<?php echo "$basePath"; ?>images/slider-home/17.jpg">
                    </div>
>>>>>>> a0c03b28ce75073e97a855b60ac297ae9fbcde3b:app/includes/en/home-ui.php
                </div>
            </div>
        </article>
        <article class="reasons">
<<<<<<< HEAD:app/includes/home-ui.php
            <h2>numa das zonas mais vibrantes e históricas da cidade</h2>
            <div class="description"><p>A Casa do Príncipe é um B&amp;B de charme no centro de Lisboa, numa das zonas mais vibrantes e históricas da cidade, mesmo em frente ao Jardim do Príncipe Real.
Este íntimo e acolhedor Bed &amp; Breakfast, com os seus quartos espaçosos e cheios de sol, vai fazer com que se sinta em casa, mas com o conforto e a qualidade de um hotel. A sua localização privilegiada deixa-o a uma curta distância das lojas mais arrojadas e modernas, atracções turísticas, restaurantes de referência e de tudo aquilo que faz com que Lisboa seja o segredo melhor guardado da Europa.
</p></div>
=======
            <h2>located in one of the most trendy and exciting areas</h2>
            <div class="description"><p>Casa do Príncipe is located in one of the trendiest and most exciting areas of Lisbon, facing the Príncipe Real Garden. With spacious and sunny rooms, this intimate B&amp;B will make you feel at home with the comfort and quality of a hotel, benefiting from its spectacular location at walking distance from fashionable shops and city sights, signature restaurants and all that makes Lisbon Europe’s most well-kept secret.</p></div>
>>>>>>> a0c03b28ce75073e97a855b60ac297ae9fbcde3b:app/includes/en/home-ui.php
        </article>
        <article class="show-rooms">
            <div class="center-title">
                <h3>quartos &amp; suites</h3>
            </div>
            <section class="rooms-view">
                <article class="room">
                    <a href="<?php echo $basePath.$lang; ?>suites-rooms/imperial/king">
                        <div class="small-frame">
                            <img alt="Quarto Imperial" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-imperial.jpg">
                        </div>
<<<<<<< HEAD:app/includes/home-ui.php
                        <h5>Suite Imperial</h5>
=======
                        <h5>King D. Pedro V Suite</h5>
>>>>>>> a0c03b28ce75073e97a855b60ac297ae9fbcde3b:app/includes/en/home-ui.php
                    </a>
                </article><article class="room">
                    <a href="<?php echo $basePath.$lang; ?>suites-rooms/royal">
                        <div class="small-frame">
                            <img alt="Quarto Royal" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-royal-estefania.jpg">
                        </div>
                        <h5>Suites Reais</h5>
                    </a>
                </article><article class="room">
                    <a href="<?php echo $basePath.$lang; ?>suites-rooms/premium">
                        <div class="small-frame">
                            <img alt="Quarto Premium" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-premium-arts.jpg">
                        </div>
                        <h5>Quartos Premium</h5>
                    </a>
                </article><article class="room">
                    <a href="<?php echo $basePath.$lang; ?>suites-rooms/historic">
                        <div class="small-frame">
                            <img alt="Quarto Historic" src="<?php echo "$basePath"; ?>images/thumbs-suites-and-rooms/thumb-historic-maria.jpg">
                        </div>
                        <h5>Quartos Históricos</h5>
                    </a>
                </article>
            </section>
        </article>
        <article class="reasons">
            <!--the ultimate destination for your Lisbon experience-->
            <h2>O melhor destino para desfrutar da melhor experiência da cidade de Lisboa</h2>
            <div class="description"><p>A Casa do Príncipe fica no primeiro andar de um elegante e icónico prédio do século XIX, com traços delicados e pormenores que concorrem para fazer deste espaço o sítio por excelência .</p></div>
        </article>
    </section>
    <section class="app-history">
    	<div class="img-content">
    	    <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/dompedro.png">
    	</div><div class="description">
<<<<<<< HEAD:app/includes/home-ui.php
    	    <!--<h3>Royal Prince, King D. Pedro V</h3>-->
    	    <h3>Principe Real, Rei D. Pedro V</h3>
    	    <p class="small-text">A história do enigmático Príncipe Real, D. Pedro V, que empresta o nome a este B&amp;B, lança as bases para a sua estadia inesquecível em Lisboa. Cada um dos 9 quartos e suites, em estilo palaciano, recordam uma parte da vida deste Príncipe.</p>
    	    <a href="<?php echo "$basePath"; ?>history" target="_self"><h4>Conheça O Rei</h4></a>
=======
    	    <h3>Royal Prince, King D. Pedro V</h3>
    	    <p class="small-text">Casa do Príncipe takes its name after the Royal Prince, King D. Pedro V, whose story sets the tone for your unforgettable stay in Lisbon. Each of its 9 palatial suites and rooms refer to a meaningful part of this King’s life.</p>
    	    <a href="<?php echo $basePath.$lang; ?>history" target="_self"><h4>MEET THE KING</h4></a>
>>>>>>> a0c03b28ce75073e97a855b60ac297ae9fbcde3b:app/includes/en/home-ui.php
    	</div>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        requirejs(['apphome','appmenu'],function(module,appmenu){
            try{
                appmenu.addModule(module,'apphome');
                module.init();
            }catch(err) {
                console.log(err.message);
                var delayer=0;
            }  
        });
    } else {
        var imgs = document.getElementsByClassName('image-frame');
        imgs[0].style.opacity = '1';
        var reasons = document.getElementsByClassName('reasons');
        reasons[0].style.opacity = '1';
        reasons[1].style.opacity = '1';
        var showrooms = document.getElementsByClassName('show-rooms');
        showrooms[0].style.opacity = '1';
        var room = document.getElementsByClassName('room');
        for (var i = 0; i < room.length; i++) {
            room[i].style.opacity = '1';
        };
        var history = document.getElementsByClassName('app-history');
        if (history.length>0) {
            //history[0].style.opacity = '1';     
        };           
    }
    </script>
</div>