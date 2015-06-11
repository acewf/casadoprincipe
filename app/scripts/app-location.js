////Author:Pedro Martins
////Contact:ace.wf.home@gmail.com
////Date: 05/05/2015
////Company:euro-m.pt
//////////////  AREAS DE JOGO  /////////////////////////
define(['location'], function(gallery) {
    'use strict';
    //Uses extras in here.
    console.log('APP Location DEFINED**');

    function APP(){
        this.directionsService = null;
        this.directionsDisplay = null;
        var instance =this;
        this.putStates=function(){
            $('.sub-menu .suite').html('');
            $('#logo-big').removeClass('show');
            $('#logo-small').addClass('show');
            $('ul.room-choose').addClass('show-childs');
            $('ul.suite').removeClass('menupos');
            $('.logo').removeClass('small');
            $('footer').show();
            $('#originfield').click(function(){
                if ($(this).val()=='Local Origem') {
                    $(this).val('');
                };
            });

            var input = document.getElementById('originfield');
            var markers;
            var delayer=0;
            $('section.app-history').delay(500).each(function(){
                $(this).delay(delayer).fadeTo(200, 1);
                delayer+=200;
            });

            $('#searchlocation').click(this.changeOrigenLocation);

            $('.box-calculate-route button').click(function(){
                $('.location section.content').addClass('show-address');
            });
            $('.origenbox button.close').click(function(){
                $('.location section.content').removeClass('show-address');
            });
            
            var GoogleMapsLoader = require('google-maps');      // only for common js environments
            var searchBox;
            GoogleMapsLoader.LIBRARIES = ['places'];
            var elemt = null;
            var mapDiv;
            GoogleMapsLoader.load(function(google) {
                console.log('maps api loaded');
                var directionsDisplay;
                var directionsService = new google.maps.DirectionsService();
                directionsDisplay = new google.maps.DirectionsRenderer();
                var mapOptions = {
                  center: new google.maps.LatLng(38.7166513,-9.1493584),
                  zoom: 18,
                  scaleControl: false,
                  mapTypeControl: false,
                  scrollwheel: false,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var el = document.getElementById('map-canvas');
                var map = new google.maps.Map(el, mapOptions);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(38.7166513,-9.1493584),
                    icon: 'http://www.casadoprincipe.pt/images/position-marker.png',
                    map: map
                });
                directionsDisplay.setMap(map);
                 directionsDisplay.setPanel(document.getElementById('directionsPanel'));
                instance.directionsService = directionsService;
                instance.directionsDisplay = directionsDisplay;
                searchBox = new google.maps.places.SearchBox(input);
                
                google.maps.event.addListener(searchBox, 'places_changed',places_changed);
                google.maps.event.addListener(map, 'center_changed',function(){
                    if (markers==undefined) {
                        markers= $('#map-canvas').find('canvas');
                        elemt = markers[0];
                        if (elemt.parentNode && elemt.parentNode.parentNode && elemt.parentNode.parentNode.parentNode && elemt.parentNode.parentNode.parentNode.parentNode) {
                            mapDiv = elemt.parentNode.parentNode.parentNode.parentNode.parentNode;
                        };
                        

                    };
                    if(elemt!=null){
                        var matrix = mapDiv.style.transform;
                        var values = matrix.match(/-?[\d\.]+/g);
                        var xOff = parseFloat(values[4]);
                        var yOff = parseFloat(values[5]);
                        var boxElem = $('.box-calculate-route');
                        var top = 0;
                        var left = 0;
                        if (elemt.parentNode) {
                            top = parseFloat(elemt.parentNode.style.top)+yOff;
                            left = parseFloat(elemt.parentNode.style.top)+yOff;
                        }
                        
                        if (boxElem[0].style) {
                            boxElem[0].style.marginTop = yOff+'px';
                            boxElem[0].style.marginLeft = xOff+'px';
                        };                        
                    }
                });
                //google.maps.event.addListener(map, 'drag', function() {} );
            }); 
            var places_changed = function() {
                var places = searchBox.getPlaces();
                if (places.length == 0) {
                  return;
                }
                if (markers==undefined) {
                    markers= $('#map-canvas').find('canvas');
                };
                // For each place, get the icon, place name, and location.
                var bounds = new google.maps.LatLngBounds();
                for (var i = 0, place; place = places[i]; i++) {
                  var image = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                  };
                }
            }  

        }
        this.changeOrigenLocation = function(){
            var directionsService = instance.directionsService;
            var directionsDisplay = instance.directionsDisplay;
            var boxElem = $('.box-calculate-route');
            boxElem.hide();
            var request = {
                origin:$('#originfield').val(),
                destination:'PRAÇA DO PRÍNCIPE REAL,  23 LISBOA',
                travelMode: google.maps.TravelMode.DRIVING
            };
            directionsService.route(request, function(result, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                  directionsDisplay.setDirections(result);
                }
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