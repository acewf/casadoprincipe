////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['approominfo'], function(appmenu) {
	'use strict';
    //Uses extras in here.
    console.log('app-room-detail start');


    function Approomdetail(){
    	this.putStates=function(){
    		$('.logo').addClass('small');
    		$('#logo-big').removeClass('show');
    		$('#logo-small').addClass('show');
		    $('ul.room-choose').addClass('show-childs');
		    $('ul.suite').removeClass('menupos');
		    $('.fotorama').fotorama();
		    $('footer').show();
		    $('html,body').animate({scrollTop:0},400);

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

    	this.goRoom = function(){
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
	        window.history.pushState('', 'Title', '/'+res);
	        var mcontent;
	        var m = new Loader(baseURL+'/includes/address-filter-output.php?url='+res);
	        function completeload(ev){
	        	var data = JSON.parse(m.data);
	            var handler = new ContentLoader();
	        	handler.loadAllContent(data.path);
	            m.removeEventListener('complete',completeload);
	            m = null;
	        }        
	        m.addEventListener('complete',completeload);
	        if (event.preventDefault) {
	        	event.preventDefault();
		    } else {
	            event.returnValue = false;
	            return false;
	        }
    	}

    	this.loadPageAndMenu = function(){
    		var mcontent;
    		var instance = this;
    		function completeloadContent(ev){
		    	$('ul.room-choose').html(mcontent.data);
		    	var find = '/';
		    	var re = new RegExp(find, 'g');
		    	var str = res.replace(re, '-');
		    	$('nav.sub-menu').attr("id",str);
	            $('ul.room-choose li a').click(instance.goRoom);
				$('.info-room-featured a').click(instance.goRoom);			
		    }
		    var baseURL = null;
            if (window.location.origin) {
                baseURL = window.location.origin;
            } else {
                baseURL = window.location.host;
            }
		    var href = window.location.href;
		    var n = href.indexOf(baseURL);
			var res = href.substring(n+baseURL.length+1, href.length);			
		   	var subm = new Loader(baseURL+'/includes/address-filter-output.php?url='+res);

	        function Subcompleteload(ev){
	        	var data = JSON.parse(subm.data);

	            mcontent = new Loader(baseURL+'/includes/'+language+'submenu/'+data.level+'.php?');
		    	mcontent.addEventListener('complete',completeloadContent);
	            subm.removeEventListener('complete',Subcompleteload);
	            subm = null;
	        }        
	        subm.addEventListener('complete',Subcompleteload);
    	}
    	this.destroy = function(){

        };

    	this.init=function(){    
    		this.putStates();		
		    this.loadPageAndMenu();		    
    	}
    }
    var approomdetail = new Approomdetail();
    return approomdetail;
});
