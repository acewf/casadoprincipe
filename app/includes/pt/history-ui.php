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
<div class="page-content history">
    <section class="app-history inside-room">
        <div class="group-text-img">
            <div class="img-content">
                <div>
                    <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/principe-big.png">
                </div>
            </div>
        </div><div class="text-content">
            <div>
                <!--
                  <p>
                    Born in Lisbon in 1837, the Prince soon displayed great curiosity about everything that surrounded him, becoming eager to learn more and more about the world he lived in. Every bit of knowledge he gathered started weighing upon him, as he grew into a very private and isolated young man with a loud mind, racing with intricate thoughts and plans for the country he would soon reign. It is often said that quiet people have the loudest mind, and that was precisely the case.<br>
                    He found true comfort and understanding in the loving arms of his wife, Queen D. Estefânia (Queen Stephanie). It was one of those rare cases of love at first sight, for they only met on their wedding day, which was very common at the time. Queen D. Estefânia understood and eased his troubles as no one could, their naïveté and innocence moving all those around them. It was truly the love story of the century and moulded every inch of the Royal Prince’s character.<br>
                    He devoted his life to his country, seeking to further develop it and to bring comfort to the people, through many investments, some of them personal. He founded schools and hospitals, visited and comforted the sick and he was the stable figure that Portugal desperately needed.<br><br>
                    The Praça do Príncipe Real (Royal Prince Square) was named after him by his loving mother, Queen D. Maria II, and has kept his name ever since, marking its place in the front row of Lisbon’s history.<br><br>
                    His tragic death, at 24 years old of age, was mourned throughout Europe, leaving the weight of the crown to his brother D. Luís. However, the role he played in History still fills books and fables with the adventures and reflections of a mind very much ahead of its time. The sharp mind of the Royal Prince.
                  </p>
                -->
            <div class="description-location">
                <h2>Quem foi este Príncipe Real, cujos rastos se encontram espalhados por Lisboa, e que desvendam a lenda de uma das personagens mais icónicas da História de Portugal?</h2>

                <p>
                    O Príncipe Real nasceu no ano de 1837, no século da mudança, onde o progresso e a tradição se combatiam numa batalha que mudou a sociedade. A sua mãe era a Rainha de Portugal, D. Maria II e o seu pai D. Fernando II. Os valores e elevados padrões morais em que nasceu nunca o deixariam e mantê-lo-iam ancorado ao longo da sua vida, tornando-o na bússula moral do país.<br><br>
                    Nasceu na cidade de Lisboa, no Palácio das Necessidades, com o nome D. Pedro V, o primeiro príncipe a nascer nesta cidade depois do longo exílio da Família Real no Brasil. Foi neste Palácio lisboeta com vista para o rio Tejo, que viveu toda a sua vida: onde nasceu, cresceu, casou e morreu.<br><br>
                    É impossível falar do Príncipe Real sem recordar o seu carinho especial pelo Palácio da Pena, no meio da Serra de Sintra e a apenas 30 km de Lisboa. Este Palácio encantado, construído por D. Fernando II, era um recanto de frescura. Escondido entre as árvores da Serra e abundante em fauna e flora tão variadas, era o sítio ideal para passar os verões. Os jardins do palácio são ainda guardiões das memórias felizes ali deixadas pelo Príncipe Real, testemunhas fiéis dos passeios demorados que dava com o amor da sua vida, a Rainha D. Estefânia, de mãos dadas e a partilhar segredos e preocupações acerca do futuro de Portugal.<br><br>
                    A Rainha D. Estefânia apareceu na sua vida como uma lufada de ar fresco, doce e primaveril, enchendo de luz os cantos escuros da sua mente. Era um anjo com um coração de ouro, como não raras vezes a descreviam, e partilhava com D. Pedro um amor vivo, daqueles eternos e incondicionais. Como todas as pedras raras e cometas brilhantes que vagueiam a Terra, a vida de Estefânia foi efémera. Morreu de difteria apenas 14 meses depois do seu casamento sem deixar herdeiros, entristecendo para sempre o coração de D. Pedro. Inspirado pela bondade de Estefânia e pela sua dedicação às crianças, D. Pedro fundou em Lisboa um hospital em seu nome.<br><br>
                    D. Pedro V continuou a sua vida, dedicando-se incansavelmente ao desenvolvimento do país. Fundou também o Curso Superior de Letras (que depois se chamou Faculdade de Letras da Universidade de Lisboa), em reflexo da importância que atribuía à educação e do seu amor pela literatura, escolhendo pessoalmente alguns professores e assistindo a aulas sempre que possível.<br><br>
                    Manteve-se sempre fiel aos seus princípios, mesmo nos tempos mais difíceis. Quando se abateu sobre Lisboa um surto de cólera e de febre amarela, a cidade foi evacuada. A Família Real e os membros da aristocracia tiveram que fugir, ficando apenas o Príncipe Real. D. Pedro recusou-se a abandonar os seus súbditos e em vez de se abrigar, acorreu aos doentes e moribundos nos hospitais e nos cemitérios, onde confortou as famílias.<br><br>
                    “O Santo”, o “Esperançoso”, o “Bem-amado” foram os cognomes com que a História o baptizou. Tal como a sua querida mulher, não viveu muito tempo, sucumbindo aos 24 anos e deixando o peso da coroa ao seu irmão D. Luís. Mas o seu espírito perdurou. Lisboa ainda se agita com as memórias do Príncipe Real, as suas conquistas e dedicação, a sua mente tão avançada para o seu tempo. A sua bondade e compaixão ainda vivem na suave brisa de verão que sacode as copas das árvores do Jardim do Príncipe Real.
                </p>
            </div>
        </div>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        require(['history','appmenu'],function(module,appmenu){
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
