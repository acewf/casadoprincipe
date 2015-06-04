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
    	}

    	this.loadPageAndMenu = function(){
    		var mcontent;
    		function completeloadContent(ev){
		    	$('ul.room-choose').html(mcontent.data);
		    	$('ul.room-choose li a').click(function(){
			        var href = $(this).attr('href');
			        var datarooms = $(this).attr('data-rooms');
			        event.preventDefault();
			        var n = href.indexOf(event.target.origin);
			        var res = href.substring(n+event.target.origin.length+1, href.length);
			        window.history.pushState("object or string", "Title", "/"+res);
			        var mcontent 
			        function completeloadContent(ev){
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
			        	console.log('app-room-info@LOAD Page:'+window.location.origin+'/includes/'+endereco+'.php?')
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
		    var href = window.location.href;
		    var n = href.indexOf(window.location.origin);
			var res = href.substring(n+window.location.origin.length+1, href.length);			
		   	var subm = new loader(window.location.origin+'/includes/address-filter-output.php?url='+res);
	        function Subcompleteload(ev){
	        	var data = JSON.parse(subm.data);

	            mcontent = new loader(window.location.origin+'/includes/submenu/'+data.level+'.php?');
		    	mcontent.addEventListener('complete',completeloadContent);
	            subm.removeEventListener('complete',Subcompleteload);
	            subm = null;
	        }        
	        subm.addEventListener('complete',Subcompleteload);
    	}

    	this.init=function(){    
    		this.putStates();		
		    this.loadPageAndMenu();		    
    	}
    }
    var approomdetail = new Approomdetail();
    return approomdetail;
});
