////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['contacts'], function(gallery) {
    'use strict';
    //Uses extras in here.
    console.log('APP HOME DEFINED**');

    function APP(){
        this.putStates=function(){
            $('.sub-menu .suite').html('');
            $('.sub-menu .room-choose').html('');
            $('#logo-big').removeClass('show');
            $('#logo-small').addClass('show');
            $('ul.room-choose').addClass('show-childs');
            $('ul.suite').removeClass('menupos');
            $('.logo').removeClass('small');
            
            var delayer=0;
            $('.contact-item').delay(200).each(function(){
                $(this).delay(delayer).fadeTo(200, 1);
                delayer+=80;
            });
            //$('.contact-item').delay(1000).show();
            
            
        }
    	this.init = function(){
            this.putStates();
            var handler = new contentloader();
            /*
            var result = $('article a[href^="'+window.location.origin+'"]');
            console.log(result);
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
            */
    	}
    }

    var location = new APP();
    return location;
});