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
                <p class="small-text">Porque cada hóspede da Casa do Príncipe é único, a nossa equipa está disponível para satisfazer todas as suas necessidades e ajudar no que for possível. Queremos que passe em Lisboa um tempo inesquecível, quer esteja a viajar em negócios, turismo ou com a sua família.</p>
            </div>
            <div class="img-content">
                <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/streetview.jpg">
            </div>
        </div><div class="text-content">
            <div class="center-content">
            <h3>A Casa do Príncipe oferece os seguintes Serviços e Comodidades:</h3>
              <ul>

                    <li>1 Suite Imperial, 2 Suites Reais, 2 Quartos Premium e 3 Quartos Históricos, todos com casa-de-banho privativa</li>
                    <li>Uma localização excepcional no centro histórico de Lisboa</li>
                    <li>Acesso a internet de alta velocidade</li>
                    <li>Televisão plasma de ecrã plano</li>
                    <li>Ar condicionado</li>
                    <li>Pequeno-Almoço buffet</li>
                    <li>Amenities de casa-de-banho premium</li>
                    <li>Serviços domésticos diários</li>
                    <li>Cofre no quarto</li>
                    <li>Secador de cabelo</li>
                </ul>
        </div>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        require(['facilitiesservices','appmenu'],function(module,appmenu){
            try{
                appmenu.addModule(module,'facilitiesservices');
                module.init();
            }catch(err) {
                console.log(err.message);
            }    
        });
    }
    </script>
</div>