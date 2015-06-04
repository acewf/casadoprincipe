////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['casadoprincipe'], function(appmenu) {
	'use strict';
    //Uses extras in here.
    function APPmodule(){
        this.init = function(){
            $('.sub-menu .suite').html('');
            $('.room-choose').html('');
            $('.logo').addClass('small');
            $('ul.suite').addClass('menupos');
            $('#logo-big').removeClass('show');
            $('#logo-small').addClass('show');
            $('.fotorama').fotorama();

            var mcontent;
            function completeloadContent(ev){
                $('.sub-menu .suite').html(mcontent.data);
                var handler = new contentloader();
                $('ul.room-choose li a').click(function(){
                    handler.click(this);
                });
            }
            mcontent = new loader(window.location.origin+'/includes/menu/menu-facilities-services.php');
            mcontent.addEventListener('complete',completeloadContent);            
        }
    }
    var appmodule= new APPmodule();
    return appmodule;
});