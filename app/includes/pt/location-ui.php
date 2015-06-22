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
            <input id="originfield" type="text" value="Indicar Local">
            <button id="searchlocation">obter direções</button>
            <div id="directionsPanel"></div>
        </article>
        <article class="box-calculate-route">
            <div class="actual-address">Casa Do Principe<br> Praça do Príncipe Real, n. 23 – 1º</div>
            <button>Calcular Rota</button>
        </article>
        <article class="box-show-calculate-route">
            <button class="close"></button>
            <div class="icon icon-inline icon-angle-left"></div>
        </article>
        <div id="map-canvas"></div>
    </section>
    <section class="app-history inside-room">
        <div class="group-text-img">
            <div class="description">
                <p class="small-text">A Casa do Príncipe é uma das acomodações melhor localizadas de Lisboa, gozando de uma posição privilegiada: a Praça do Príncipe Real, um dos principais bairros históricos mesmo no coração de Lisboa.</p>
                <!--<p class="small-text">Our friendly and highly professional staff caters to all needs during your visit, hoping to make this a memorable stay whether travelling for business, leisure or with your family.</p>-->
            </div>
            <div class="img-content">
                <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/streetview.jpg">
            </div>
        </div><div class="text-content">
            <div class="center-content">
            <!--<h3>Casa do Príncipe is at a short distance from Lisbon’s main cultural landmarks</h3>-->
            <h3>A Casa do Príncipe deixa-o a uma curta distância das lojas mais arrojadas e modernas atracções turísticas</h3>
            <p>
                Esta praça efusiva e borbulhante é o rosto cosmopolita da cidade, e nela podem encontrar-se as lojas mais modernas e restaurantes conceituados, sentado considerada a zona mais animada de Lisboa.<br><br>
                Este alojamento conta com uma vista cénica para o Jardim Botânico e Jardim do Príncipe Real, a poucos passos do icónico Bairro Alto (1 min. a pé), e na porta de entrada para o centro histórico de Lisboa – a minutos do Chiado, Rossio, Avenida da Liberdade e do vibrante Cais do Sodré, onde se encontra o famoso Mercado da Ribeira, entre outros restaurantes e bares de renome. Com esta envolvência, a Casa do Príncipe está na posição ideal para lhe oferecer uma estadia memorável e uma experiência inesquecível de Lisboa.<br><br>
                Em termos de acessibilidade a outros pontos da cidade:</p>
            <ul>
              <li>Na praça encontram-se paragens de táxis e de autocarros, e a estação de metro mais próxima (Rato) está apenas a 7 minutos de distância a pé.</li>
              <li>À porta da Casa do Príncipe passa o histórico eléctrico 24 que o pode levar desde o Chiado ao Largo do Rato.</li>
              <li>Também pode encontrar o Elevador da Glória mesmo na esquina do Miradouro de S. Pedro de Alcântara, que o levará até à Baixa Pombalina para visitar a Praça dos Restauradores (onde poderá apanhar um comboio para Sintra).</li>
              <li>Um pouco mais abaixo, no Cais do Sodré, poderá também apanhar o comboio para o Estoril ou Cascais, as famosas vilas piscatórias logo à saída de Lisboa.</li>
            </ul>
            <p>Ao planear a sua viagem, saiba que a Casa do Príncipe é a apenas 15 minutos de carro do aeroporto de Lisboa. Por favor informe-nos do seu plano de viagem para que o possamos aconselhar na melhor maneira de chegar até nós.</p>
         </div>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        requirejs(['location','appmenu'],function(module,appmenu){
            try{
                appmenu.addModule(module,'location');
                module.init();
            }catch(err) {
                console.log(err.message);
            }    
        });
    }
    </script>     
</div>