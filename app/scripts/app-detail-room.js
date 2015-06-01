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
    console.log('app-room-detail');


    $('.logo').addClass('small');
    $('ul.room-choose').addClass('show-childs');


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
