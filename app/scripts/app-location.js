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
            $('.sub-menu .room-choose').html('');
            $('#logo-big').removeClass('show');
            $('#logo-small').addClass('show');
            $('ul.room-choose').addClass('show-childs');
            $('ul.suite').removeClass('menupos');
            $('.logo').removeClass('small');
            $('footer').show();
            $('.location button.close').hide();
            $('#originfield').click(function(){
                if (($(this).val()=='Indicar Local') || ($(this).val()=='Location')) {
                    $(this).val('');
                };
            });

            var res = 'location'
            var find = '/';
            var re = new RegExp(find, 'g');
            var str = res.replace(re, '-');
            $('nav.sub-menu').attr("id",str);

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
                $('.location button.close').show();
                $('.location div.icon').hide();
            });
            $('.box-show-calculate-route').click(function(){
                console.log('ddd',$('.location section.content').hasClass('show-address'));
                if (!$('.location section.content').hasClass('show-address')) {
                    $('.location section.content').addClass('show-address');
                    $('.location button.close').show();
                    $('.location div.icon').hide();
                } else {
                    $('.location button.close').hide();
                    $('.location div.icon').show();
                    $('.box-show-calculate-route').show();
                    $('.location section.content').removeClass('show-address');
                }
                
            });
            $('.location button.close').click(function(){
                //var boxElem = $('.box-calculate-route');
                //boxElem.show();
                console.log('AAAA');
            });
            
            var GoogleMapsLoader = require('google-maps');      // only for common js environments
            var searchBox;
            GoogleMapsLoader.LIBRARIES = ['places'];
            GoogleMapsLoader.VERSION = '3.14';
            GoogleMapsLoader.LANGUAGE = '3.14';
            var elemt = null;
            var mapDiv;
            var mapslang = '';
            if(language==='pt' || language==='pt/'){
                mapslang = 'pt-PT';
            } else {
                mapslang = 'en-GB';
            }

            
            function googleControler(google) {
                var directionsDisplay;
                var directionsService = new google.maps.DirectionsService();
                directionsDisplay = new google.maps.DirectionsRenderer();
                var mapOptions = {
                  center: new google.maps.LatLng(38.7170702,-9.1489789),
                  zoom: 18,
                  scaleControl: false,
                  mapTypeControl: false,
                  scrollwheel: false,
                  language:mapslang,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var el = document.getElementById('map-canvas');
                var map = new google.maps.Map(el, mapOptions);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(38.7170702,-9.1489789),
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
                        var matrix = mapDiv.style.transform.match(/-?[\d\.]+/g);
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
            }
            /////"visualization", "1", {"callback" : pageLoaded}
            GoogleMapsLoader.load(googleControler,'3',{"language" : mapslang}); 
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
                    scaledSize: new google.maps.Size(20, 20)
                  };
                }
            }  

        }
        this.changeOrigenLocation = function(){
            var directionsService = instance.directionsService;
            var directionsDisplay = instance.directionsDisplay;
            var boxElem = $('.box-calculate-route');
            if (window.innerHeight>730) {
             boxElem.hide();
            }
            var mapslang = '';
            if(language==='pt' || language==='pt/'){
                mapslang = 'pt-PT';
            } else {
                mapslang = 'en-GB';
            }
            console.log(language,'mapslang:',mapslang);
            var request = {
                origin:$('#originfield').val(),
                destination:'Praça Príncipe Real 23, Lisboa',
                travelMode: google.maps.TravelMode.DRIVING
            };
            directionsService.route(request, function(result, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                  directionsDisplay.setDirections(result);
                }
            });
        }
        this.destroy = function(){

        };
    	this.init = function(){
            this.putStates();
            var handler = new ContentLoader();
            var completeloadContent = function(ev){
                $('.sub-menu .suite').html(mcontent.data);
            }
            $('article a').click(function(){
                var total = $('.sub-menu .suite li').length;
                if(total===0){
                     var mcontent;
                    var baseURL = null;
                    if (window.location.origin) {
                        baseURL = window.location.origin;
                    } else {
                        baseURL = window.location.host;
                    }
                    mcontent = new Loader(baseURL+'/includes/'+language+'submenu/sub-menu-rooms.php');
                    mcontent.addEventListener('complete',completeloadContent); 
                }
                handler.click(this);
            });
    	}
    }

    var location = new APP();
    return location;
});