////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['contacts'], function(gallery) {
    'use strict';
    //Uses extras in here.
    console.log('APP HOME DEFINED**');

    function APP(){
        this.putStates=function(){
            $('.sub-menu .suite').html('');
            $('.sub-menu .room-choose').html('');
            $('#logo-big').removeClass('show');
            $('#logo-small').addClass('show');
            $('ul.room-choose').addClass('show-childs');
            $('ul.suite').removeClass('menupos');
            $('.logo').removeClass('small');
            $('#formcontact').parsley();
            $('footer').show();
            
            var delayer=0;
            $('section').delay(200).each(function(){
                $(this).delay(delayer).fadeTo(200, 1);
                delayer+=80;
            });
            //$('.contact-item').delay(1000).show();

            var GoogleMapsLoader = require('google-maps');      // only for common js environments
 
            GoogleMapsLoader.load(function(google) {
                console.log('maps api loaded');
                var directionsDisplay;
                var directionsService = new google.maps.DirectionsService();
                directionsDisplay = new google.maps.DirectionsRenderer();
                var mapOptions = {
                  center: new google.maps.LatLng(38.7166513,-9.1493584),
                  zoom: 19,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var el = document.getElementById('map-canvas');
                var map = new google.maps.Map(el, mapOptions);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(38.7166513,-9.1493584),
                    icon: 'http://www.casadoprincipe.pt/images/position-marker.png',
                    map: map
                });
            });


            $('#submitcontact').click(function(){
                var nomeValid = $('#formcontact #nome');
                var emailValid = $('#formcontact #email');
                var securityValid = $('#formcontact #security');
                var messageValid = $('#formcontact #message');
                var formValid = $('#formcontact').parsley().isValid();

                var liNome = nomeValid[0].parentNode;
                var liEmail = emailValid[0].parentNode;
                var liSecurity = securityValid[0].parentNode;
                var liMessage = messageValid[0].parentNode;
                var m;
                if (!nomeValid.parsley().isValid()) {                    
                    m  = $(liNome).find('.parsley-errors-list');
                    nomeValid.addClass('show-error');
                    m.html('<li class="parsley-required">This field is required</li>');
                } else {
                    m  = $(liNome).find('.parsley-errors-list');
                    nomeValid.removeClass('show-error');
                    m.html('');
                }
                if (!emailValid.parsley().isValid()) {                    
                    m  = $(liEmail).find('.parsley-errors-list');
                    emailValid.addClass('show-error');
                    m.html('<li class="parsley-required">Incorrect email format.</li>');
                } else {
                    m  = $(liEmail).find('.parsley-errors-list');
                    emailValid.removeClass('show-error');
                    m.html('');
                }              
                if (!securityValid.parsley().isValid() || (securityValid.val()==securityValid.attr('data-defaultValue'))) {                    
                    m  = $(liSecurity).find('.parsley-errors-list');
                    securityValid.addClass('show-error');
                    m.html('<li class="parsley-required">Wrong answer</li>');
                } else {
                    m  = $(liSecurity).find('.parsley-errors-list');
                    securityValid.removeClass('show-error');
                    m.html('');
                }
                if (!messageValid.parsley().isValid()) {                    
                    m  = $(liMessage).find('.parsley-errors-list');
                    messageValid.addClass('show-error');
                    m.html('<li class="parsley-required">This field is required</li>');
                } else {
                    m  = $(liMessage).find('.parsley-errors-list');
                    messageValid.removeClass('show-error');
                    m.html('');
                }

                if (!formValid) {
                    $('.contact .feedback').html('Message incomplete. Please fill out the requiered fields.');
                    $('.contact .feedback').addClass('show');
                } else {
                    $('.contact .feedback').html('');
                    $('.contact .feedback').removeClass('show');
                    console.log('form is ready');
                }


                console.log(m);
            });
            
            
        }
    	this.init = function(){
            this.putStates();
            var handler = new contentloader();
            /*
            var result = $('article a[href^="'+window.location.origin+'"]');
            console.log(result);
            $('article a').click(function(){
                var total = $('.sub-menu .suite li').length;
                if(total===0){
                     var mcontent;
                    function completeloadContent(ev){
                        $('.sub-menu .suite').html(mcontent.data);
                    }
                    mcontent = new loader(window.location.origin+'/includes/submenu/sub-menu-rooms.php');
                    mcontent.addEventListener('complete',completeloadContent); 
                }
                handler.click(this);
            });
            */
    	}
    }

    var location = new APP();
    return location;
});