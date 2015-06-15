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
            <div >
            <div class="description-location">
                <h2>WHO WAS THE ROYAL PRINCE?</h2>
                <h3>the answer to this question is as enigmatic as the prince himself.</h3>
                <p>Born in Lisbon in 1837, the Prince soon displayed great curiosity about everything that surrounded him, becoming eager to learn more and more about the world he lived in. Every bit of knowledge he gathered started weighing upon him, as he grew into a very private and isolated young man with a loud mind, racing with intricate thoughts and plans for the country he would soon reign. It is often said that quiet people have the loudest mind, and that was precisely the case.<br> 
He found true comfort and understanding in the loving arms of his wife, Queen D. Estefânia (Queen Stephanie). It was one of those rare cases of love at first sight, for they only met on their wedding day, which was very common at the time. Queen D. Estefânia understood and eased his troubles as no one could, their naïveté and innocence moving all those around them. It was truly the love story of the century and moulded every inch of the Royal Prince’s character.<br>
He devoted his life to his country, seeking to further develop it and to bring comfort to the people, through many investments, some of them personal. He founded schools and hospitals, visited and comforted the sick and he was the stable figure that Portugal desperately needed.<br><br>
The Praça do Príncipe Real (Royal Prince Square) was named after him by his loving mother, Queen D. Maria II, and has kept his name ever since, marking its place in the front row of Lisbon’s history.<br><br>
His tragic death, at 24 years old of age, was mourned throughout Europe, leaving the weight of the crown to his brother D. Luís. However, the role he played in History still fills books and fables with the adventures and reflections of a mind very much ahead of its time. The sharp mind of the Royal Prince.
</p></div>
        </div>
    </section>
    <script>
    if (typeof requirejs == 'function') {
        require(['history'],function(module){
            try{
                module.init();
            }catch(err) {
                console.log(err.message);
            }  
        });
    }
    </script>
</div>
