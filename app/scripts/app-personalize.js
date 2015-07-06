////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['personalize'], function(gallery) {
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
            $('footer').show();

            var res = 'personalize'
            var find = '/';
            var re = new RegExp(find, 'g');
            var str = res.replace(re, '-');
            $('nav.sub-menu').attr("id",str);

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
        }
        this.destroy = function(){

        };
    	this.init = function(){
            this.putStates();
            var handler = new ContentLoader();
            var completeloadContent = function(ev){
                $('.sub-menu .suite').html(mcontent.data);
            }
            $('article a').click(function(){
                var total = $('.sub-menu .suite li').length;
                if(total===0){
                     var mcontent;
                    var baseURL = null;
                    if (window.location.origin) {
                        baseURL = window.location.origin;
                    } else {
                        baseURL = window.location.host;
                    }
                    mcontent = new Loader(baseURL+'/includes/'+language+'submenu/sub-menu-rooms.php');
                    mcontent.addEventListener('complete',completeloadContent); 
                }
                handler.click(this);
            });
    	}
    }

    var location = new APP();
    return location;
});