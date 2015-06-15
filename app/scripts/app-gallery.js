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
                    mcontent = new Loader(window.location.origin+'/includes/'+language+'submenu/sub-menu-rooms.php');
                    mcontent.addEventListener('complete',this.completeloadContent); 
                }
                handler.click(this);
            });
    	};
    }

    var appgallery = new APPgallery();
    return appgallery;
});