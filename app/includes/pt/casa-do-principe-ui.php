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
                <p class="small-text">A Casa do Príncipe é um B&amp;B de charme no centro de Lisboa, numa das zonas mais vibrantes e históricas da cidade, mesmo em frente ao Jardim do Príncipe Real.</p>
            </div>
            <div class="img-content">
                <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/dompedro.png">
            </div>
        </div><div class="text-content">
            <div>
                <div class="description-location">
                    <h3>O melhor destino para desfrutar da melhor experiência da cidade de Lisboa</h3>
                    <p>Este íntimo e acolhedor Bed & Breakfast, com os seus quartos espaçosos e cheios de sol, vai fazer com que se sinta em casa, mas com o conforto e a qualidade de um hotel. A sua localização privilegiada deixa-o a uma curta distância das lojas mais arrojadas e modernas, atracções turísticas, restaurantes de referência e de tudo aquilo que faz com que Lisboa seja o segredo melhor guardado da Europa.<br><br>
    A história do enigmático Príncipe Real, D. Pedro V, que empresta o nome a este B&B, lança as bases para a sua estadia inesquecível em Lisboa. Cada um dos 9 quartos e suites, em estilo palaciano, recordam uma parte da vida deste Príncipe.<br><br>
    A Casa do Príncipe fica no primeiro andar de um elegante e icónico prédio do século XIX, com traços delicados e pormenores que concorrem para fazer deste espaço o sítio por excelência para desfrutar da melhor experiência da cidade de Lisboa: seja pelo seu imponente pé direito de 4m., pelo chão de tábua corrida antiga ou pelos tectos detalhadamente ornamentados e adornados com frescos. O trabalho de restauração desta casa permitiu combinar decorações clássicas do século XIX, com originais detalhes contemporâneos que contribuíram para criar um ambiente de elegância, conforto e distinção.</p></div>
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