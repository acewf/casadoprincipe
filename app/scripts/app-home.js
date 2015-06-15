////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['apphome','appmenu'], function(apphome,appmenu) {
    'use strict';
    //Uses extras in here.
    function APPhome(){
        this.putStates=function(){
            $('.sub-menu .suite').html('');
            $('.sub-menu .room-choose').html('');
            $('#logo-big').addClass('show');
            $('#logo-small').removeClass('show');
            $('ul.room-choose').addClass('show-childs');
            $('ul.suite').removeClass('menupos');
            $('.logo').removeClass('small');
             $('footer').show();
            $('.fotorama').fotorama({width: 700,maxwidth: '100%',ratio: 2.51, allowfullscreen: true});
            appmenu.addFotoramEvents();
            var delayer=0;
            console.log('run put states at home---------');
            $('section.content article').delay(200).each(function(){
                $(this).delay(delayer).fadeTo(200, 1);
                delayer+=200;
            });
            delayer=0;
            $('section.app-history').delay(500).each(function(){
                $(this).delay(delayer).fadeTo(200, 1);
                delayer+=200;
            });
        }
        this.destroy = function(){

        };
    	this.init = function(){
            this.putStates();
            var handler = new ContentLoader();
            var mcontent;
            var completeloadContent = function(ev){
                $('.sub-menu .suite').html(mcontent.data);
            }
            $('article.show-rooms a').click(function(){
                var total = $('.sub-menu .suite li').length;
                if(total===0){
                    mcontent = new Loader(window.location.origin+'/includes/'+language+'submenu/sub-menu-rooms.php');
                    mcontent.addEventListener('complete',completeloadContent); 
                }
                handler.click(this);
            });
    	}
    }

    var apphome = new APPhome();
    return apphome;
});