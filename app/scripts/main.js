require(['app', 'jquery', 'picturefill'], function (app) {
    'use strict';
    // use app here


    var pagModulesRef = [];
    pagModulesRef['home-ui'] = {module:'apphome'};
    pagModulesRef['quarto-ui'] = {module:'approom'};
    pagModulesRef['quarto-ui-info'] = {module:'approominfo'};
    pagModulesRef['quarto-detail-ui'] = {module:'approomdetail'};
    pagModulesRef['quarto-detail-ui-royal'] = {module:'approomdetail'};
    pagModulesRef['en/casa-do-principe-ui'] = {module:'casadoprincipe'};
    pagModulesRef['en/facilities-services-ui'] = {module:'facilitiesservices'};
    pagModulesRef['en/history-ui'] = {module:'history'};
    pagModulesRef['gallery-ui'] = {module:'gallery'};
    pagModulesRef['location-ui'] = {module:'location'};
    pagModulesRef['personalize-ui'] = {module:'personalize'};
    pagModulesRef['contact-ui'] = {module:'contacts'};

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
	    	requirejs([pagModulesRef[contentmodule].module],function(module){
                if(module){
                    module.init();
                } 
            });
	    } else {
	    	console.log('module missing');
	    }    
	}    
});