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

             var res = 'contacts'
            var find = '/';
            var re = new RegExp(find, 'g');
            var str = res.replace(re, '-');
            $('nav.sub-menu').attr("id",str);
            
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

            var text = $('#formcontact span#code').html()+' ('+numbers.one+'+'+numbers.two+'=?)';
            $('#formcontact span#code').html(text);

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

            var messages = {};
            messages.en = {};
            messages.en['geral'] = 'Message incomplete. Please fill out the requiered fields';
            messages.en['nome'] = 'This field is required';
            messages.en['email'] = 'Incorrect email format.';
            messages.en['security'] = 'Wrong answer';
            messages.en['message'] = 'This field is required';
            messages.en['sucesssend'] = 'Message sent. Thank you.';

            messages.pt = {};
            messages.pt['geral'] = 'Mensagem incompleta. Por favor preencha todos os campos.';
            messages.pt['nome'] = 'Este campo é obrigatório';
            messages.pt['email'] = 'Email com formato incorrecto';
            messages.pt['security'] = 'Resposta errada';
            messages.pt['message'] = 'Este campo é obrigatório';
            messages.pt['sucesssend'] = 'Mensagem Enviada. Muito obrigado.';

            var ling = null;
            if(language==='en' || language==='en/'){
                ling='en';
            } else {
                ling='pt';
            }

            var baseURL = null;
            if (window.location.origin) {
                baseURL = window.location.origin;
            } else {
                baseURL = window.location.host;
            }
            if (window.location.origin) {};

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
                    m.html('<li class="parsley-required">'+messages[ling]['nome']+'</li>');
                } else {
                    m  = $(liNome).find('.parsley-errors-list');
                    nomeValid.removeClass('show-error');
                    m.html('');
                }
                if (!emailValid.parsley().isValid()) {                    
                    m  = $(liEmail).find('.parsley-errors-list');
                    emailValid.addClass('show-error');
                    m.html('<li class="parsley-required">'+messages[ling]['email']+'</li>');
                } else {
                    m  = $(liEmail).find('.parsley-errors-list');
                    emailValid.removeClass('show-error');
                    m.html('');
                }          
                var securValid = false;
                if (!securityValid.parsley().isValid() || (securityValid.val()===securityValid.attr('data-defaultValue'))) {                    
                    m  = $(liSecurity).find('.parsley-errors-list');
                    securityValid.addClass('show-error');
                    m.html('<li class="parsley-required">'+messages[ling]['security']+'</li>');
                } else if((numbers.one+numbers.two)===parseFloat(securityValid.val())){
                    m  = $(liSecurity).find('.parsley-errors-list');
                    securityValid.removeClass('show-error');
                    m.html('');
                    securValid = true;
                } else{
                    m  = $(liSecurity).find('.parsley-errors-list');
                    securityValid.addClass('show-error');
                    m.html('<li class="parsley-required">'+messages[ling]['security']+'</li>');
                }
                if (!messageValid.parsley().isValid()) {                    
                    m  = $(liMessage).find('.parsley-errors-list');
                    messageValid.addClass('show-error');
                    m.html('<li class="parsley-required">'+messages[ling]['message']+'</li>');
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
                    $('.contact .feedback').html(messages[ling]['geral']);
                    $('.contact .feedback').addClass('show');
                } else {
                    $('.contact .feedback').html('');
                    $('.contact .feedback').removeClass('show');
                    var valuesend = $("#formcontact").serialize();
                    console.log('-->',valuesend);
                    var result = valuesend.replace(/%0D/g, "<br>");
                    result = result.replace(/%0A/g, "<br>");
                    console.log('-->',result);
                    $.post(baseURL+"/contact-process.php",result, function(data){
                        //do stuff here...
                        console.log('FEEDBACK EMAIL SEND',data);
                        $('.contact .feedback').html(messages[ling]['sucesssend']);
                        $('.contact .feedback').addClass('show');
                        $('.contact .feedback').addClass('sucess');


                        $('.contact #formcontact ul').hide();
                        $('.contact #submitcontact').hide();
                        $('.contact #clearform').removeClass('hide');


                        $('.contact #clearform').click(function(){
                            $('.contact .feedback').removeClass('sucess');
                            $('.contact .feedback').removeClass('show');
                            $('.contact .feedback').html('');
                            $('.contact ul').show();
                            $('.contact #submitcontact').show();
                            $('.contact #clearform').addClass('hide');
                            $('#formcontact #nome').val('');
                            $('#formcontact #email').val('');
                            $('#formcontact #security').val('');
                            $('#formcontact #message').val('');

                        });
                    });
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