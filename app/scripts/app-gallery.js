////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['gallery'], function(gallery) {
    'use strict';
    //Uses extras in here.
    //var ContentLoader;
    
    var mcontent;
    //console.log(contentloader)
    function APPgallery(){
        // ContentLoader = (ContentLoader)?ContentLoader=ContentLoader:null;
        
        this.putStates=function(){
            $('.sub-menu .suite').html('');
            $('.sub-menu .room-choose').html('');
            $('#logo-big').removeClass('show');
            $('#logo-small').addClass('show');
            $('ul.room-choose').addClass('show-childs');
            $('ul.suite').removeClass('menupos');
            $('.logo').removeClass('small');

            var res = 'gallery'
            var find = '/';
            var re = new RegExp(find, 'g');
            var str = res.replace(re, '-');
            $('nav.sub-menu').attr("id",str);
            //$('.fotorama').fotorama();
            /*
            $('.fotorama').load([
              {img: 'images/destaque-room.png', thumb: 'images/thumbs/destaque-room.png'},
              {img: 'images/dsc_0281.png', thumb: 'images/thumbs/destaque-room.png'}
            ]);
            */
            $('footer').hide();
        };

        this.completeloadContent = function(ev){
            console.log('complete....');
            $('.sub-menu .suite').html(mcontent.data);
        };
        this.destroy = function(){

        };
    	this.init = function(){
            this.putStates();
            var handler = new ContentLoader();

            $('article a').click(function(){
                var total = $('.sub-menu .suite li').length;
                if(total===0){   
                    /*                  
                    function completeloadContent(ev){
                        $('.sub-menu .suite').html(mcontent.data);
                    }
                    */
                    var baseURL = null;
                    if (window.location.origin) {
                        baseURL = window.location.origin;
                    } else {
                        baseURL = window.location.host;
                    }
                    mcontent = new Loader(baseURL+'/includes/'+language+'submenu/sub-menu-rooms.php');
                    mcontent.addEventListener('complete',this.completeloadContent); 
                }
                handler.click(this);
            });
    	};
    }

    var appgallery = new APPgallery();
    return appgallery;
});