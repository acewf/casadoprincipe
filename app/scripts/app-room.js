////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['approom'], function(appmenu) {
	'use strict';
    //Uses extras in here.
    console.log('app-room start');

    function Approom(){
    	this.init=function(){
		    $('ul.room-choose').removeClass('show-childs');
		    $('#logo-big').removeClass('show');
    		$('#logo-small').addClass('show');
		    $('ul.suite').addClass('menupos');
		    $('.fotorama').fotorama();
		    $('footer').show();
		    $('.fotorama').on('fotorama:show',function(){
		    	console.log('--- Foto Changed ---');
		    });

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
			console.log('APP ROOM CALL LOAD CONTENT');
		    function completeloadContent(ev){
		    	$('.sub-menu .suite').html(mcontent.data);
		    	$('.sub-menu .suite li a').click(function(){
			        var href = $(this).attr('href');
			        var datarooms = $(this).attr('data-rooms');
			        event.preventDefault();
			        var n = href.indexOf(event.target.origin);
			        var res = href.substring(n+event.target.origin.length+1, href.length);
			        window.history.pushState("object or string", "Title", "/"+res);
			        var mcontent;
			        var m = new loader(window.location.origin+'/includes/address-filter-output.php?url='+res);
			        function completeload(ev){
			        	var data = JSON.parse(m.data);
			        	var handler = new contentloader();
			        	handler.loadAllContent(data.path);

			            //loadContent(data.path);
			            m.removeEventListener('complete',completeload);
			            m = null;
			        }        
			        m.addEventListener('complete',completeload);
			    });
		    }
		    mcontent = new loader(window.location.origin+'/includes/submenu/sub-menu-rooms.php');
		    mcontent.addEventListener('complete',completeloadContent);
		    $('.logo').addClass('small');
		    $('ul.suite').addClass('menupos');
	    }
    }
    var approom = new Approom();

    return approom;
});