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
		    $('html,body').animate({scrollTop:0},400);
		    $('.fotorama').on('fotorama:show',function(){
		    	//console.log('--- Foto Changed ---');
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
		    	console.log('ADDDED');
		    	console.log(mcontent);
		    	$('.sub-menu .suite').html(mcontent.data);
		    	var loadcont = function(res){
			        window.history.pushState("object or string", "Title", "/"+res);
			        var mcontent;
			        var baseURL = null;
			        if (window.location.origin) {
			            baseURL = window.location.origin;
			        } else {
			            baseURL = window.location.host;
			        }
			        var m = new Loader(baseURL+'/includes/address-filter-output.php?url='+res);
			        function completeload(ev){
			        	var data = JSON.parse(m.data);
			        	var handler = new ContentLoader();
			        	handler.loadAllContent(data.path);
			            //loadContent(data.path);
			            m.removeEventListener('complete',completeload);
			            m = null;
			        }        
			        m.addEventListener('complete',completeload);
			    }
			    $('.sub-menu .suite li a').click(function(){
			    	var href = $(this).attr('href');
			        var datarooms = $(this).attr('data-rooms');
			        var baseURL = null;
			        if (window.location.origin) {
			            baseURL = window.location.origin;
			        } else {
			            baseURL = window.location.host;
			        }
			        var n = href.indexOf(baseURL);
			        var res = href.substring(n+baseURL.length+1, href.length);
			        loadcont(res);
			        if (event.preventDefault) {
			        	event.preventDefault();
			        } else {
			            event.returnValue = false;
			            return false;
			        }

			    });
			    $('.info-room-featured a').click(function(){
			    	var alink = $(this);
			    	var href = $(alink).attr('href');
			        var datarooms = $(this).attr('data-rooms');
			        var baseURL = null;
			        if (window.location.origin) {
			            baseURL = window.location.origin;
			        } else {
			            baseURL = window.location.host;
			        }
			        var n = href.indexOf(baseURL);
			        var res = href.substring(n+baseURL.length+1, href.length);
			        loadcont(res);
			        if (event.preventDefault) {
			        	event.preventDefault();
			        } else {
			            event.returnValue = false;
			            return false;
			        }
			    });
		    }
		    var baseURL = null;
	        if (window.location.origin) {
	            baseURL = window.location.origin;
	        } else {
	            baseURL = window.location.host;
	        }
		    mcontent = new Loader(baseURL+'/includes/'+language+'submenu/sub-menu-rooms.php');
		    mcontent.addEventListener('complete',completeloadContent);
		    $('.logo').addClass('small');
		    $('ul.suite').addClass('menupos');
	    }
	    this.destroy = function(){

        };
    }
    var approom = new Approom();

    return approom;
});