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
<div class="page-content contact">
    <section class="content">
        <div id="map-canvas"></div>
    </section> 
    <section class="app-history contact">
        <div class="group-text-img">
            <div class="description">
                <div class="text-center">
                    <p class="small-text">endereço, telefone e e-mail</p>
                    <ul>
                        <li>Praça do Príncipe Real, n. 23 – 1º</li>
                        <li>1250-184 Lisboa</li>
                        <li>Tel +351 218 264 183</li>
                        <li>+351 935 743 078</li>
                        <li>GPS: 38° 43' 32'' N,  9' 8' 46'' O</li>
                        <li><a href="mailto:info@casadoprincipe.com">Email: info@casadoprincipe.com</a></li>
                    </ul>
                    <a href="https://www.google.pt/maps/place/Pra%C3%A7a+do+Pr%C3%ADncipe+Real+23,+1250-096+Lisboa/@38.7166278,-9.1493433,17z/data=!3m1!4b1!4m2!3m1!1s0xd19337ec47b8b81:0x490ba0d459bfd352" target="_blank">OPEN MAP</a>
                </div>
            </div>
            <div class="img-content">
                <img alt="image D. Pedro" src="<?php echo "$basePath"; ?>images/streetview.jpg">
            </div>
        </div><div class="text-content">
            <div class="center-content">
            <h3>Sinta-se à vontade para nos perguntar qualquer questão. Respondemos rapidamente.</h3>
            <form id="formcontact" action="process-service.php" data-parsley-validate>
                <div class="feedback"></div>
                <ul>
                    <li>
                        <span>Nome</span>
                        <input type="text" id="nome"  name="nome" data-parsley-trigger="change" required/>
                    </li>
                    <li>
                        <span>Email</span>
                        <input type="email" id="email"  name="email" data-parsley-trigger="change" required />
                    </li>
                    <li>
<<<<<<< HEAD:app/includes/contact-ui.php
                        <span>CAPTCHA</span>
=======
                        <span id="code">SECURITY CODE</span>
>>>>>>> a0c03b28ce75073e97a855b60ac297ae9fbcde3b:app/includes/en/contact-ui.php
                        <input type="text" id="security" data-defaultValue='14+8=?'  name="security" value="14+8=?"  required/>
                    </li>
                    <li>
                        <span>A SUA MENSAGEM</span>
                        <textarea id="message" name="message"  required></textarea>
                    </li>
                </ul>
<<<<<<< HEAD:app/includes/contact-ui.php
                <a id="submitcontact">ENVIAR</a>
=======
                <a id="submitcontact">SUBMIT</a>
                <a id="clearform" class="hide">NEW MESSAGE</a>
>>>>>>> a0c03b28ce75073e97a855b60ac297ae9fbcde3b:app/includes/en/contact-ui.php
            </form>
            </div>
    </section>       
    <script>
    if (typeof requirejs == 'function') {
        requirejs(['contacts','appmenu'],function(module,appmenu){
            try{
                appmenu.addModule(module,'contacts');
                module.init();
            }catch(err) {
                console.log(err.message);
            }    
        });
    }
    </script> 
</div>
