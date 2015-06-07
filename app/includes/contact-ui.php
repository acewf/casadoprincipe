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
        <article class="show-rooms">
            <div class="center-title">
                <h3>Contacto</h3>
                <p>Se você gostaria de ajuda com a sua reserva, por favor não hesite em contactar-nos.</p>
            </div>
            <section class="rooms-view">
                <article class="contact-item">
                    <a href="">
                        <h5>Telefone</h5>
                        <ul>  
                            <li class="telefone">+351 218 264 183</li>
                        </ul>
                    </a>
                </article><article class="contact-item">
                    <a href="">
                        <h5>Mobile</h5>
                        <ul>  
                            <li class="fax">+351 935 743 078</li>
                        </ul>
                    </a>
                </article><article class="contact-item">
                    <a href="mailto:info@casadoprincipe.com">
                        <h5>Email</h5>
                        <ul>  
                            <li class="email">info@casadoprincipe.com</li>
                        </ul>
                    </a>
                </article><article class="contact-item">
                    <a href="www.facebook.com/casadoprincipe">
                        <h5>Facebook</h5>
                        <ul>  
                            <li class="morada">www.facebook.com/casadoprincipe</li>
                        </ul>
                    </a>
                </article>
                </article><article class="contact-item wide">
                    <a href="http://127.0.0.1:9000/location">
                        <h5>Morada</h5>
                        <ul>  
                            <li class="morada">Praça do Príncipe Real, n. 23 – 1º</li>
                            <li>1250-184 Lisboa</li>
                        </ul>
                    </a>
                </article>
            </section>
        </article>
    </section>        
    <script>
    if (typeof requirejs == 'function') {
        requirejs(['contact'],function(module){
            try{
                module.init();
            }catch(err) {
                console.log(err.message);
            }  
        });
    }
    </script> 
</div>
