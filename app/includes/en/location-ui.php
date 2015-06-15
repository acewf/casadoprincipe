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

<div class="page-content location">
    <section class="content">
        <article class="origenbox">
            <button class="close"></button>
            <input id="originfield" type="text" value="Local Origem">
            <button id="searchlocation">get directions</button>
            <div id="directionsPanel"></div>
        </article>
        <article class="box-calculate-route">
            <div class="actual-address">Casa Do Principe<br> Praça do Príncipe Real, n. 23 – 1º</div>
            <button>Calculate Route</button>
        </article>
        <article class="box-show-calculate-route">
            <div class="icon icon-inline icon-angle-left"></div>
        </article>
        <div id="map-canvas"></div>
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
            <h3>Casa do Príncipe is at a short distance from Lisbon’s main cultural landmarks</h3>
            <p>The Praça do Príncipe Real is the cosmopolitan and trendy face of Lisbon, with some of the most stylish shops, concept and traditional restaurants and, overall, to some, the most fashionable and happening area of Lisbon.<br><br>
With a privileged location, it faces the well-known Príncipe Real garden and the Botanical Garden, just a step away from the iconic Bairro Alto (1 min. walking) and at walking distance from other historic areas such as Chiado, Rossio, Avenida da Liberdade, and the vibrant Cais do Sodré with the hip Mercado da Ribeira foodmarket. Casa do Príncipe is at a short distance from Lisbon’s main cultural landmarks and is set in the perfect place to give you an unforgettable experience of Lisbon.</p>
              <ul>
                    <li>There is a taxi-stop at the square, as well as buses and a subway station (Rato) at a 7 min. walking distance</li>
                    <li>You can catch the 24 historic tram at our doorstep which can take to Chiado or to Largo do Rato</li>
                    <li>The traditional Glória funicular, at the doorstep of the São Pedro de Alcântara Belvedere, can take you down hill to Baixa (downtown Lisbon) and the Restauradores Square – where you may catch the train to Sintra.</li>
                    <li>At a 20 min. walking distance you will find Cais Sodré train station where you may catch the train to Cascais and Estoril, the famous riviera beachside towns.</li>
                </ul>
            <p>If you’re arriving by plane to the Lisbon Airport, Casa do Príncipe is just 15 min. away by car/taxi. Please do let us know in advance what will be your your method of arrival and we will be happy to advise you on the best way to reach us.</p>
        </div>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        requirejs(['location','appmenu'],function(module,appmenu){
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