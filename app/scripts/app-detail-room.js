////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['approomdetail'], function(appmenu) {
	'use strict';
    //Uses extras in here.
    console.log('app-room-detail start');
});
$(function() {
    'use strict';

    console.log('---TRYING TO IMPLEMENT DETAIL ROOM---')
    $('.logo').addClass('small');
    $('ul.room-choose').addClass('show-childs');
    $('ul.suite').removeClass('menupos');

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
    mcontent = new loader('../../includes/submenu/sub-menu-imperial-suite.php');
    mcontent.addEventListener('complete',completeloadContent);


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
});
