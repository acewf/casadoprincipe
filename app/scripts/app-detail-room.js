////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['approomdetail'], function(appmenu) {
	'use strict';
    //Uses extras in here.
    function Approomdetail(){
    	this.instance = this;
    	this.putStates=function(){
    		$('.logo').addClass('small');
    		$('#logo-big').removeClass('show');
    		$('#logo-small').addClass('show');
		    $('ul.room-choose').addClass('show-childs');
		    $('ul.suite').removeClass('menupos');
		    $('.fotorama').fotorama();
		    
		    $( "#bookit" ).click(function(){
		    	event.preventDefault();
		    	var urlWithDate = 'http://www.secure-hotel-booking.com/Casa-do-Principe/2E3B/search?hotelId=16384';//$("#AVP").attr("action");
			    var dataChegada = $('#AVP_arrivalDate').val();
				var dataSaida =  $('#AVP_exitDate').val();
				/*
				dataChegada = dataChegada.replace("/", "-");
				dataSaida = dataSaida.replace("/", "-");
				dataChegada = dataChegada.replace("/", "-");
				dataSaida = dataSaida.replace("/", "-");
				*/
				function reverseDate(datech){
					var date = datech;
					var items = date.split("/");
					date = items[2]+'-'+items[1]+'-'+items[0];
					return date;
				}

				dataChegada = reverseDate(dataChegada);
				dataSaida = reverseDate(dataSaida);

				urlWithDate += "&arrivalDate="+dataChegada+"&departureDate="+dataSaida;
				$("#AVP").attr("action",urlWithDate);
             	$("#AVP").submit(function( event ) {   
				  //event.preventDefault();
				  console.log('Form Sended');
				});
				$("#AVP").submit();
            });
             
    	}

    	this.loadPageAndMenu = function(){
    		var mcontent;
		    function completeloadContent(ev){
		    	$('ul.room-choose').html(mcontent.data);
		    	var handler = new contentloader();
		    	$('ul.room-choose li a').click(function(){
                	handler.click(this);
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
