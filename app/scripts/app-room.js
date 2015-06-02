////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['approom'], function(appmenu) {
	'use strict';
    //Uses extras in here.
    console.log('app-room start');


    console.log('TRYING TO IMPLEMENT APP ROOM*****************')

    $('ul.room-choose').removeClass('show-childs');
    $('ul.suite').addClass('menupos');

	var mcontent;
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
	           	
	           	console.log(msnode);
	           	$('.page-content').remove();

	           	//msnode.innerHTML = 'ALGO';
	            $(msnode).append(mcontent.data);
	            //requirejs(['approomdetail']);
	        } 
	        function loadContent(endereco){
	        	mcontent = new loader('../includes/'+endereco+'.php?');
	            mcontent.addEventListener('complete',completeloadContent);
	        }
	        var m = new loader('../includes/address-filter-output.php?url='+res);
	        function completeload(ev){
	            loadContent(m.data);
	            m.removeEventListener('complete',completeload);
	            m = null;
	        }        
	        m.addEventListener('complete',completeload);
	    });
    }
    mcontent = new loader('includes/submenu/sub-menu-rooms.php');
    mcontent.addEventListener('complete',completeloadContent);

    $('.logo').addClass('small');
    $('ul.suite').addClass('menupos');
    console.log('app-room');
});