////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['apphome'], function(apphome) {
    'use strict';
    //Uses extras in here.
    console.log('APP HOME DEFINED**');

    function APPhome(){
        this.putStates=function(){
            $('.sub-menu .suite').html('');
            $('#logo-big').addClass('show');
            $('#logo-small').removeClass('show');
            $('ul.room-choose').addClass('show-childs');
            $('ul.suite').removeClass('menupos');
            $('.logo').removeClass('small');
            $('.fotorama').fotorama();
        }
    	this.init = function(){
            this.putStates();
            var handler = new contentloader();
            $('article a').click(function(){
                var total = $('.sub-menu .suite li').length;
                if(total===0){
                     var mcontent;
                    function completeloadContent(ev){
                        $('.sub-menu .suite').html(mcontent.data);
                    }
                    mcontent = new loader(window.location.origin+'/includes/submenu/sub-menu-rooms.php');
                    mcontent.addEventListener('complete',completeloadContent); 
                }
                handler.click(this);
            });
    	}
    }

    var apphome = new APPhome();
    return apphome;
});