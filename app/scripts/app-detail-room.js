////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['approomdetail'], function(appmenu) {
	'use strict';
    //Uses extras in here.
    console.log('app-room-detail start');

    function Approomdetail(){

    	this.init=function(){
    		$('.logo').addClass('small');
    		$('#logo-big').removeClass('show');
    		$('#logo-small').addClass('show');
		    $('ul.room-choose').addClass('show-childs');
		    $('ul.suite').removeClass('menupos');
		    $('.fotorama').fotorama();
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
			            $('.page-content').html(mcontent.data);
			            console.log('data-loaded-->Call AppRoom');
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
		    var href = window.location.href;
		    var n = href.indexOf(window.location.origin);
			var res = href.substring(n+window.location.origin.length+1, href.length);
			console.log(res);
			
		   	var subm = new loader(window.location.origin+'/includes/address-filter-output.php?url='+res);
	        function Subcompleteload(ev){
	        	var data = JSON.parse(subm.data);
	            mcontent = new loader('../../includes/submenu/'+data.level+'.php?');
		    	mcontent.addEventListener('complete',completeloadContent);
	            subm.removeEventListener('complete',Subcompleteload);
	            subm = null;
	        }        
	        subm.addEventListener('complete',Subcompleteload);
	        
			
		    var elementdatepicker = $('.booker .input-daterange');
		    $(elementdatepicker).datepicker({
		    	format: 'dd/mm/yyyy',
			    startDate: "-0d",
			    language: 'pt-BR',
			    forceParse: false,
			    maxzindex:50,
			    topDiference:77,
			    autoclose: true
			}).on('show', function(e){
				var target = e.target;
				var base = $(target.parentNode.parentNode).addClass('selectedColor');
		    }).on('hide', function(e){
				var target = e.target;
				console.log(target);
				var base = $(target.parentNode.parentNode).removeClass('selectedColor');
		    });
    	}
    }
    var approomdetail = new Approomdetail();
    return approomdetail;
});
