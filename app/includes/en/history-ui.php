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
            <div class="description">
                <p class="small-text">“The Saint”, “the Hopeful”, “the Beloved One”, were some of the names used to describe him.</p>
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
                <h2>Who was this Royal Prince, whose traces can be found all over Lisbon, unveiling the tale of one of the most iconic characters of the Portuguese history?</h2>

                <p>The Royal Prince was born in the year of 1837, in the century of change, when progress and tradition fought a battle that shaped society. His mother was the Queen of Portugal, D. Maria II, and his father, King D. Fernando II. Delighted with the arrival of the heir to the trone the Queen honored her son by naming an area of Lisbon after him: the Praça do Príncipe Real (Royal Prince Square).</p>
                <p>The values and high moral standards the Royal Prince was born into would never leave him, and would ground him throughout his life, making him the moral compass of the country.</p>
                <p>He was born in Lisbon, in the Palace of Necessidades, and named D. Pedro V, the first prince to be born in Lisbon after the long exile of the Royal Family in Brazil. It was in this Palace, in Lisbon, overlooking the Rio Tejo (Tagus River), where he lived his entire life: where he was born, raised, married and died.</p>
                <p>One cannot speak of the Royal Prince without recalling his fondness for the Pena Palace, in the midst of the Sintra Mountains, just a short 30 km from Lisbon. This enchanted Palace, built by King D. Fernando, was a haven of pure delight. Its secluded location and the richness of the surrounding fauna and flora made it the perfect place to spend the summer season. The gardens of the Palace are still keepers of the happy memories the Royal Prince built there, witnesses to the long strolls he took with the love of his life, Queen D. Estefânia (Queen Stephanie), holding hands and sharing concerns about the future of Portugal.</p>
                <p>Queen D. Estefânia came to his life like an all-absorbing breath of spring, filling the dark corners of his mind with light and joy. She was an angel with a heart of gold, as described by all who knew her, and shared with D. Pedro V a true undying unconditional love. Like all rare gems and bright comets that wander the earth, Estefânia’s life was shimmering and short. She died of diphtheria 14 months after their wedding, leaving no heirs for the throne of Portugal and casting a lifelong shadow over the spirit of the Royal Prince.</p>
                <p>Inspired by Estefânia’s kindness and devotion to the children and the ill D. Pedro V founded a children’s hospital in Lisbon in her name.</p>
                <p>D. Pedro V tried to live on, devoting himself to the development of his country. Pursuing the important role of education and his love for the arts and literature, he founded the School of Letters handpicking its professors and even attending some of its courses, whenever he got the chance.</p>
                <p>Even through the darkest times he stood firmly by what he believed. When Lisbon was committed with a wave of cholera and yellow fever, the city was evacuated. The Royal Family and members of the aristocracy were advised to leave immediately, and as they all did, only one was left behind: the Royal Prince. He refused to leave his subjects, especially in critical time. So instead of seeking shelter, he ran to the hospitals to aid the ill and to the cemeteries, to pay tribute to the dead and comfort the families.</p>
                <p>“The Saint”, “the Hopeful”, “the Beloved One”, were some of the names used to describe him. As his dear wife, he didn’t live long and died at the age of 24, leaving the weight of the crown to his brother D. Luís, but his spirit lived on. Lisbon still stirs with the memory of the Royal Prince. His achievements and commitment, his sharp mind very much ahead of his time, his kindness and compassion still live in the warm summer breeze that brushes the trees of the Royal Prince (Príncipe Real) Garden.</p>
            </div>
        </div>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        require(['history','appmenu'],function(module,appmenu){
            try{
                appmenu.addModule(module,'history');
                module.init();
            }catch(err) {
                console.log(err.message);
            }   
        });
    }
    </script>
</div>
