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
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">        
<link rel="alternate" href="http://www.casadoprincipe.pt/pt-pt/" hreflang="pt-PT"  />
<link rel="alternate" href="http://es.example.com/en-us/" hreflang="en-US" />
<title>Casa do Príncipe – Quartos e suites de charme com o conforto moderno de um hotel, numa localização premium no centro histórico de Lisboa, em frente ao jardim do Príncipe Real</title>

<meta name="author" content="www.euro-m.pt" />
<meta name="copyright" content="trademark" />
<meta name="application-name" content="Casa do Principe" />
<meta name="keywords" content="Hotel, Lisboa, Lisbon, Lisbonne, Lissabon, quartos, suites, charme, guesthouse, boutique, cama, hotel, bed, and, breakfast, B&B, centro da cidade, centro histórico, avenida liberdade, chiado, bairro alto, baixa, castelo, experiência,  viagem, destino, procuro hotel, reservar hotel, lua-de-mel, romântico, família, negócios, viajar, design, viagem, conforto, luxo, melhor preço, oferta especial, praia, sol, rei, rainha" />
<meta name="description" content="A Casa do Príncipe é um boutique Bed & Breakfast (B & B) localizado no centro histórico de Lisboa, numa das zonas mais vibrantes da cidade, o Príncipe Real.
Os quartos e suites são espaçosos, cheios de sol, decorados em estilo palaciano, com todo o moderno conforto de um hotel. Melhor preço garantido." />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!--FACEBOOK META -->
<meta property="og:title" content="Casa&nbsp;do&nbsp;Principe&nbsp;-&nbsp;Premium suites&nbsp;&amp;&nbsp;exquisite&nbsp;rooms&nbsp;in&nbsp;the&nbsp;heart&nbsp;of&nbsp;Lisbon" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.casadoprincipe.pt/" />
<meta property="og:image" content="<?php echo $basePath; ?>images/imagens-share/share-home-compressor.png" />
<meta property="og:site_name" content="Casa do Príncipe – Quartos e suites de charme com o conforto moderno de um hotel, numa localização premium no centro histórico de Lisboa, em frente ao jardim do Príncipe Real" />
<meta property="og:description" content="A Casa do Príncipe é um boutique Bed & Breakfast (B & B) localizado no centro histórico de Lisboa, numa das zonas mais vibrantes da cidade, o Príncipe Real.
Os quartos e suites são espaçosos, cheios de sol, decorados em estilo palaciano, com todo o moderno conforto de um hotel. Melhor preço garantido." />