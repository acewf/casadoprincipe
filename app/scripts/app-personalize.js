////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['personalize'], function(gallery) {
    'use strict';
    //Uses extras in here.
    console.log('APP HOME DEFINED**');

    function APP(){
        this.putStates=function(){
            $('.sub-menu .suite').html('');
            $('#logo-big').addClass('show');
            $('#logo-small').removeClass('show');
            $('ul.room-choose').addClass('show-childs');
            $('ul.suite').removeClass('menupos');
            $('.logo').removeClass('small');
            
            var GoogleMapsLoader = require('google-maps');      // only for common js environments
 
            GoogleMapsLoader.load(function(google) {
                console.log('maps api loaded');
                var directionsDisplay;
                var directionsService = new google.maps.DirectionsService();
                directionsDisplay = new google.maps.DirectionsRenderer();
                var mapOptions = {
                  center: new google.maps.LatLng(38.7165766,-9.1491336),
                  zoom: 19,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var el = document.getElementById('map-canvas');
                var map = new google.maps.Map(el, mapOptions);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(38.7165766,-9.1491336),
                    icon: 'https://maps.google.com/mapfiles/kml/shapes/info-i_maps.png',
                    map: map
                });
                directionsDisplay.setMap(map);
                var request = {
                    origin:'R. Dr. António Martins, Lisboa',
                    destination:'Jardim do Príncipe Real, Praça do Príncipe Real, Lisboa',
                    travelMode: google.maps.TravelMode.DRIVING
                  };
                  directionsService.route(request, function(result, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                      directionsDisplay.setDirections(result);
                    }
                });
            });
            
        }
    	this.init = function(){
            this.putStates();
            var handler = new contentloader();
            var completeloadContent = function(ev){
                $('.sub-menu .suite').html(mcontent.data);
            }
            $('article a').click(function(){
                var total = $('.sub-menu .suite li').length;
                if(total===0){
                     var mcontent;
                    mcontent = new loader(window.location.origin+'/includes/submenu/sub-menu-rooms.php');
                    mcontent.addEventListener('complete',completeloadContent); 
                }
                handler.click(this);
            });
    	}
    }

    var location = new APP();
    return location;
});