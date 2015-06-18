////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['contacts'], function() {
    'use strict';
    //Uses extras in here.
    console.log('APP HOME DEFINED**');
    var numbers = {};
    function APP(){
        this.putStates=function(){  
            numbers.one = Math.floor((Math.random() * 20) + 1);
            numbers.two = Math.floor((Math.random() * 20) + 1);
            numbers.total = numbers.one+numbers.two;
            $('.sub-menu .suite').html('');
            $('.sub-menu .room-choose').html('');
            $('#logo-big').removeClass('show');
            $('#logo-small').addClass('show');
            $('ul.room-choose').addClass('show-childs');
            $('ul.suite').removeClass('menupos');
            $('.logo').removeClass('small');
            $('#formcontact').parsley();
            $('footer').show();
            $('#security').val(numbers.one+"+"+numbers.two+"=?");   
             $('#security').attr('data-defaultValue',numbers.one+"+"+numbers.two+"=?");
            
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
                directionsDisplay = new google.maps.DirectionsRenderer();
                var mapOptions = {
                  center: new google.maps.LatLng(38.7170702,-9.1489789),
                  zoom: 17,
                  scaleControl: false,
                  mapTypeControl: false,
                  scrollwheel: false,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                
                var el = document.getElementById('map-canvas');
                var map = new google.maps.Map(el, mapOptions);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(38.7170702,-9.1489789),
                    icon: 'http://www.casadoprincipe.pt/images/position-marker.png',
                    map: map
                });
            });

            $('#formcontact #security').focusout(function() {
                if ($('#formcontact #security').val()==='') {
                    $('#security').val(numbers.one+"+"+numbers.two+"=?"); 
                };
            });
            $('#formcontact #security').focusin(function() {
                if ($('#formcontact #security').val()===$('#security').attr('data-defaultValue')) {
                    $('#security').val(''); 
                };
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
                var securValid = false;
                if (!securityValid.parsley().isValid() || (securityValid.val()===securityValid.attr('data-defaultValue'))) {                    
                    m  = $(liSecurity).find('.parsley-errors-list');
                    securityValid.addClass('show-error');
                    m.html('<li class="parsley-required">Wrong answer</li>');
                } else if((numbers.one+numbers.two)===parseFloat(securityValid.val())){
                    m  = $(liSecurity).find('.parsley-errors-list');
                    securityValid.removeClass('show-error');
                    m.html('');
                    securValid = true;
                } else{
                    m  = $(liSecurity).find('.parsley-errors-list');
                    securityValid.addClass('show-error');
                    m.html('<li class="parsley-required">Wrong answer</li>');
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

                formValid = $('#formcontact').parsley().isValid();
                if (formValid) {
                    formValid = securValid;
                };

                console.log(formValid)

                if (!formValid) {
                    $('.contact .feedback').html('Message incomplete. Please fill out the requiered fields.');
                    $('.contact .feedback').addClass('show');
                } else {
                    $('.contact .feedback').html('');
                    $('.contact .feedback').removeClass('show');

                    $.post("http://casadoprincipe.pt/contact-process.php", $("#formcontact").serialize(), function(data){
                        //do stuff here...
                        console.log('FEEDBACK EMAIL SEND',data);
                        $('.contact .feedback').html('Message Sended.');
                        $('.contact .feedback').addClass('show');
                        $('.contact .feedback').addClass('sucess');

                        setTimeout(function(){ 
                            $('.contact .feedback').removeClass('sucess');
                            $('.contact .feedback').removeClass('show');
                            $('.contact .feedback').html('');
                        }, 8000);
                    });
                    //console.log('form is ready');
                }
            });            
        };
        this.destroy = function(){

        };
    	this.init = function(){
            this.putStates();
    	};
    }
    var location = new APP();
    return location;
});