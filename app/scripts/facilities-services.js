////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['facilitiesservices'], function(appmenu) {
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
            $('footer').show();

            var delayer=0;
            $('section.content article').delay(200).each(function(){
                $(this).delay(delayer).fadeTo(200, 1);
                delayer+=200;
            });
            delayer=0;
            $('section.app-history').delay(500).each(function(){
                $(this).delay(delayer).fadeTo(200, 1);
                delayer+=200;
            });

            var mcontent;
            function completeloadContent(ev){
                $('.sub-menu .suite').html(mcontent.data);
                var handler = new ContentLoader();
                $('ul.suite li a').click(function(){
                    handler.click(this);
                });
                $('nav.sub-menu ul li a').removeClass('active');
                $('.sub-menu a[href^="'+window.location.href+'"]').addClass('active');
            }
            mcontent = new Loader(window.location.origin+'/includes/menu/menu-facilities-services.php');
            mcontent.addEventListener('complete',completeloadContent);            
    	}
        this.destroy = function(){

        };
    }
    var appmodule= new APPmodule();
    return appmodule;
});