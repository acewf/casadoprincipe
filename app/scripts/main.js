require(['app', 'jquery', 'picturefill'], function (app) {
    'use strict';
    // use app here


    var pagModulesRef = [];
    pagModulesRef['en/home-ui'] = {module:'apphome'};
    pagModulesRef['en/quarto-ui'] = {module:'approom'};
    pagModulesRef['en/casa-do-principe-ui'] = {module:'casadoprincipe'};
    pagModulesRef['en/facilities-services-ui'] = {module:'facilitiesservices'};
    pagModulesRef['en/history-ui'] = {module:'history'};
    pagModulesRef['gallery-ui'] = {module:'gallery'};
    pagModulesRef['en/location-ui'] = {module:'location'};
    pagModulesRef['en/personalize-ui'] = {module:'personalize'};
    pagModulesRef['en/contact-ui'] = {module:'contacts'};

    /* ----------------- ------------------ */
    pagModulesRef['en/rooms/royal/quarto-detail-ui-queen'] = {module:'approomdetail'};
    pagModulesRef['en/rooms/royal/quarto-detail-ui-palace'] = {module:'approomdetail'};
    pagModulesRef['en/rooms/royal/quarto-ui-info'] = {module:'approominfo'};
    /* ----------------- ------------------ */
    pagModulesRef['en/rooms/imperial/quarto-detail-ui'] = {module:'approomdetail'};
    pagModulesRef['en/rooms/imperial/quarto-ui-info'] = {module:'approominfo'};
    /* ----------------- ------------------ */
    pagModulesRef['en/rooms/premium/quarto-detail-ui-arts'] = {module:'approomdetail'};
    pagModulesRef['en/rooms/premium/quarto-detail-ui-lisbon'] = {module:'approomdetail'};
    pagModulesRef['en/rooms/premium/quarto-ui-info'] = {module:'approominfo'};
    /* ----------------- ------------------ */
    pagModulesRef['en/rooms/historic/quarto-detail-ui-king'] = {module:'approomdetail'};
    pagModulesRef['en/rooms/historic/quarto-detail-ui-queen'] = {module:'approomdetail'};
    pagModulesRef['en/rooms/historic/quarto-detail-ui-sintra'] = {module:'approomdetail'};
    pagModulesRef['en/rooms/historic/quarto-detail-ui-voyages'] = {module:'approomdetail'};
    pagModulesRef['en/rooms/historic/quarto-ui-info'] = {module:'approominfo'};



    /* ----------------- PT ------------------ */
    pagModulesRef['pt/home-ui'] = {module:'apphome'};
    pagModulesRef['pt/quarto-ui'] = {module:'approom'};
    pagModulesRef['pt/casa-do-principe-ui'] = {module:'casadoprincipe'};
    pagModulesRef['pt/facilities-services-ui'] = {module:'facilitiesservices'};
    pagModulesRef['pt/history-ui'] = {module:'history'};
    pagModulesRef['pt/location-ui'] = {module:'location'};
    pagModulesRef['pt/personalize-ui'] = {module:'personalize'};
    pagModulesRef['pt/contact-ui'] = {module:'contacts'};

    /* ----------------- ------------------ */
    pagModulesRef['pt/rooms/royal/quarto-detail-ui-queen'] = {module:'approomdetail'};
    pagModulesRef['pt/rooms/royal/quarto-detail-ui-palace'] = {module:'approomdetail'};
    pagModulesRef['pt/rooms/royal/quarto-ui-info'] = {module:'approominfo'};
    /* ----------------- ------------------ */
    pagModulesRef['pt/rooms/imperial/quarto-detail-ui'] = {module:'approomdetail'};
    pagModulesRef['pt/rooms/imperial/quarto-ui-info'] = {module:'approominfo'};
    /* ----------------- ------------------ */
    pagModulesRef['pt/rooms/premium/quarto-detail-ui-arts'] = {module:'approomdetail'};
    pagModulesRef['pt/rooms/premium/quarto-detail-ui-lisbon'] = {module:'approomdetail'};
    pagModulesRef['pt/rooms/premium/quarto-ui-info'] = {module:'approominfo'};
    /* ----------------- ------------------ */
    pagModulesRef['pt/rooms/historic/quarto-detail-ui-king'] = {module:'approomdetail'};
    pagModulesRef['pt/rooms/historic/quarto-detail-ui-queen'] = {module:'approomdetail'};
    pagModulesRef['pt/rooms/historic/quarto-detail-ui-sintra'] = {module:'approomdetail'};
    pagModulesRef['pt/rooms/historic/quarto-detail-ui-voyages'] = {module:'approomdetail'};
    pagModulesRef['pt/rooms/historic/quarto-ui-info'] = {module:'approominfo'};

    $(function () {
        $.fn.imagesLoaded = function () {
            var imgs = this.find('img[src!=""]');
            // if there's no images, just return an already resolved promise
            if (!imgs.length) {
                return $.Deferred().resolve().promise();
            }
            // for each image, add a deferred object to the array which resolves when the image is loaded
            var dfds = [];  
            imgs.each(function(){
                var dfd = $.Deferred();
                dfds.push(dfd);
                var img = new Image();
                img.onload = function(){
                    dfd.resolve();
                }
                img.src = this.src;

            });
            // return a master promise object which will resolve when all the deferred objects have resolved
            // IE - when all the images are loaded
            return $.when.apply($,dfds);
        }        
    });

    app.init();
    if (typeof requirejs === 'function') {
	    requirejs(['appmenu'],function(appmenu){
            appmenu.init();
        });
	    if (contentmodule) {
	    	console.log('modulo a carregar:',contentmodule);
	    	requirejs([pagModulesRef[contentmodule].module,'appmenu'],function(module,appmenu){
                if(module){
                    module.init();
                } 
            });
	    } else {
	    	console.log('module missing');
	    }    
	}    
});