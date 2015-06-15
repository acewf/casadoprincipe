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
                    <p class="small-text">address, telephone and email</p>
                    <ul>
                        <li>Praça do Príncipe Real, n. 23 – 1º</li>
                        <li>1250-184 Lisboa</li>
                        <li>Tel +351 218 264 183</li>
                        <li>+351 935 743 078</li>
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
            <h3>feel free to ask us any question. we will get back to you very very shortly</h3>
            <form id="formcontact" action="process-service.php" data-parsley-validate>
                <div class="feedback"></div>
                <ul>
                    <li>
                        <span>Name</span>
                        <input type="text" id="nome"  name="nome" data-parsley-trigger="change" required/>
                    </li>
                    <li>
                        <span>Email</span>
                        <input type="email" id="email"  name="email" data-parsley-trigger="change" required />
                    </li>
                    <li>
                        <span>SECURITY CODE</span>
                        <input type="text" id="security" data-defaultValue='14+8=?'  name="security" value="14+8=?"  required/>
                    </li>
                    <li>
                        <span>YOUR MESSAGE</span>
                        <textarea id="message" name="message"  required></textarea>
                    </li>
                </ul>
                <a id="submitcontact">SUBMIT</a>
            </form>
            </div>
    </section>       
    <script>
    if (typeof requirejs == 'function') {
        requirejs(['contacts','appmenu'],function(module,appmenu){
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
