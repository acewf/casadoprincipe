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
    var elementdatepicker = $('.booker .input-daterange');
    $(elementdatepicker).datepicker({
    	format: 'dd/mm/yyyy',
	    startDate: "-0d",
	    language: 'pt-BR',
	    forceParse: false,
	    maxzindex:50,
	    topDiference:77,
	    autoclose: true
	});

});
