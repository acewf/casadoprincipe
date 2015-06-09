////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['gallery'], function(gallery) {
    'use strict';
    //Uses extras in here.
    console.log('APP HOME DEFINED**');

    function APPgallery(){
        this.putStates=function(){
            $('.sub-menu .suite').html('');
            $('#logo-big').removeClass('show');
            $('#logo-small').addClass('show');
            $('ul.room-choose').addClass('show-childs');
            $('ul.suite').removeClass('menupos');
            $('.logo').removeClass('small');
            $('.fotorama').fotorama();
            $('.fotorama').load([
              {img: 'images/destaque-room.png', thumb: 'images/thumbs/destaque-room.png'},
              {img: 'images/dsc_0281.png', thumb: 'images/thumbs/destaque-room.png'}
            ]);

            $('footer').hide();
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

    var gallery = new APPgallery();
    return gallery;
});