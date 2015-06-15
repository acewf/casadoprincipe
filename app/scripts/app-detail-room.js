////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['approomdetail'], function() {
	'use strict';

	//var ContentLoader = (ContentLoader)?ContentLoader=ContentLoader:null;
	//var Loader = (Loader)?Loader=Loader:null;
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
		    $('footer').show();
            $('html,body').animate({scrollTop:60},400);

		    var delayer=0;
            $('section.content article').delay(200).each(function(){
                $(this).delay(delayer).fadeTo(200, 1);
                delayer+=200;
            });
		    
		    $('#bookit').click(function(){
		    	event.preventDefault();
		    	var urlWithDate = 'http://www.secure-hotel-booking.com/Casa-do-Principe/2E3B/search?hotelId=16384';//$("#AVP").attr("action");
			    var dataChegada = $('#AVP_arrivalDate').val();
				var dataSaida =  $('#AVP_exitDate').val();
				
				function reverseDate(datech){
					var date = datech;
					var items = date.split('/');
					date = items[2]+'-'+items[1]+'-'+items[0];
					return date;
				}
				dataChegada = reverseDate(dataChegada);
				dataSaida = reverseDate(dataSaida);
				urlWithDate += '&arrivalDate='+dataChegada+'&departureDate='+dataSaida;
				$('#AVP').attr('action',urlWithDate);
             	$('#AVP').submit(function() {
				  console.log('Form Sended');
				});
				$('#AVP').submit();
            });

            $('.big-size').click(function(){
            	$('.content.room-detail').addClass('slide-to-left');
            	$('.inside-detail').addClass('slide-from-right');
            	$('.page-content').animate({ 'height': $('.inside-detail').outerHeight(true) + 'px' });
            	$('html,body').animate({scrollTop:60},400);
            	$('.room-choose').fadeOut();
            });
            $('.back-detail-room').click(function(){
            	$('.content.room-detail').removeClass('slide-to-left');
            	$('.inside-detail').removeClass('slide-from-right');
            	$('.page-content').animate({ 'height':$('.content.room-detail').outerHeight(true) + 'px'});
            	$('.room-choose').fadeIn();
            });   
    	};
    	this.loadPageAndMenu = function(){
    		var mcontent;
		    function completeloadContent(){
		    	$('ul.room-choose').html(mcontent.data);
		    	var handler = new ContentLoader();
		    	$('ul.room-choose li a').click(function(){
                	handler.click(this);
            	});
                $('article.room a').click(function(){
                    handler.click(this);
                });
                
            	$('nav.sub-menu ul li a').removeClass('active');
            	$('a[href^="'+window.location.href+'"]').addClass('active');
		    }
		    var href = window.location.href;
		    var n = href.indexOf(window.location.origin);
			var res = href.substring(n+window.location.origin.length+1, href.length);
		   	var subm = new Loader(window.location.origin+'/includes/address-filter-output.php?url='+res);
	        function Subcompleteload(){
	        	var data = JSON.parse(subm.data);
	            mcontent = new Loader(window.location.origin+'/includes/submenu/'+data.level+'.php?');
		    	mcontent.addEventListener('complete',completeloadContent);
	            subm.removeEventListener('complete',Subcompleteload);
	            subm = null;
	        }        
	        subm.addEventListener('complete',Subcompleteload);
    	};
    	this.pageChangeListener = function(){
    		$('.rooms-group section.rooms-view').hide();
            $('.rooms-group #page1').fadeIn();
    		$('.choose-rooms li a').click(function(){
    			var target = event.target;
    			$('.choose-rooms li').removeClass('actived');
    			$(target.parentNode).addClass('actived');
                event.preventDefault();
                var id = this.getAttribute('data-pageid');

                $('.rooms-group section.rooms-view').fadeOut();
                $('.rooms-group #'+id).delay(200).fadeIn();

            });
    	};
    	this.destroy = function(){
    		/* PUT DEFAULTS VALUES */
    		console.log('--romm choose--')
    		$('.room-choose').fadeIn();
    	}
    	this.init=function(){
    		this.putStates();
    		this.loadPageAndMenu();
    		this.pageChangeListener();

    		var elementdatepicker = $('.booker .input-daterange');
		    $(elementdatepicker).datepicker({
		    	format: 'dd/mm/yyyy',
			    startDate: '-0d',
			    language: 'pt-BR',
			    forceParse: false,
			    maxzindex:50,
			    topDiference:77,
			    autoclose: true
			}).on('show', function(e){
				var target = e.target;
				$(target.parentNode.parentNode).addClass('selectedColor');
		    }).on('hide', function(e){
				var target = e.target;
				$(target.parentNode.parentNode).removeClass('selectedColor');
		    });
    	};
    }
    var approomdetail = new Approomdetail();
    return approomdetail;
});
