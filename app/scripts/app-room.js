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
		    $('.fotorama').on('fotorama:show',function(){
		    	console.log('--- Foto Changed ---');
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
			        var mcontent 
			        function completeloadContent(ev){
			            var totalChild = $('.sub-menu .suite li');
			            console.log('HTML LOADED:');
			            var elem =  $('.page-content');
			           	var msnode = elem[0].parentNode;
			           	var pageC = $('.page-content');
			           	if (pageC)
			           	pageC.remove();
			           	try{
			           		$(msnode).append(mcontent.data);
			           	}catch(err) {
						    console.log(err.message);
						}
			            
			        } 
			        function loadContent(endereco){
			        	mcontent = new loader(window.location.origin+'/includes/'+endereco+'.php?');
			            mcontent.addEventListener('complete',completeloadContent);
			        }
			        var m = new loader(window.location.origin+'/includes/address-filter-output.php?url='+res);
			        function completeload(ev){
			        	var data = JSON.parse(m.data);
			            loadContent(data.path);
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