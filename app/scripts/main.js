require(['app', 'jquery', 'picturefill'], function (app) {
    'use strict';
    // use app here
    var pagModulesRef = [];
    pagModulesRef['home-ui'] = {module:'apphome'};
    pagModulesRef['quarto-ui'] = {module:'approom'};
    pagModulesRef['quarto-ui-info'] = {module:'approominfo'};
    pagModulesRef['quarto-detail-ui'] = {module:'approomdetail'};
    pagModulesRef['quarto-detail-ui-royal'] = {module:'approomdetail'};
    pagModulesRef['casa-do-principe-ui'] = {module:'casadoprincipe'};
    pagModulesRef['facilities-services-ui'] = {module:'facilitiesservices'};
    pagModulesRef['history-ui'] = {module:'history'};

    /* ----------------- ------------------ */
    pagModulesRef['rooms/royal/quarto-detail-ui-queen'] = {module:'approomdetail'};
    pagModulesRef['rooms/royal/quarto-detail-ui-palace'] = {module:'approomdetail'};
    pagModulesRef['rooms/royal/quarto-ui-info'] = {module:'approominfo'};
    /* ----------------- ------------------ */
    pagModulesRef['rooms/imperial/quarto-detail-ui'] = {module:'approomdetail'};
    pagModulesRef['rooms/imperial/quarto-ui-info'] = {module:'approominfo'};
    /* ----------------- ------------------ */
    pagModulesRef['rooms/premium/quarto-detail-ui-arts'] = {module:'approomdetail'};
    pagModulesRef['rooms/premium/quarto-detail-ui-lisbon'] = {module:'approomdetail'};
    pagModulesRef['rooms/premium/quarto-ui-info'] = {module:'approominfo'};
    /* ----------------- ------------------ */
    pagModulesRef['rooms/historic/quarto-detail-ui-king'] = {module:'approomdetail'};
    pagModulesRef['rooms/historic/quarto-detail-ui-queen'] = {module:'approomdetail'};
    pagModulesRef['rooms/historic/quarto-detail-ui-sintra'] = {module:'approomdetail'};
    pagModulesRef['rooms/historic/quarto-detail-ui-voyages'] = {module:'approomdetail'};
    pagModulesRef['rooms/historic/quarto-ui-info'] = {module:'approominfo'};

    $(function () {
        console.log("ADD jquery PLugin");
        $.fn.imagesLoaded = function () {
            var imgs = this.find('img[src!=""]');
            // if there's no images, just return an already resolved promise
            if (!imgs.length) {return $.Deferred.resolve().promise();}
            // for each image, add a deferred object to the array which resolves when the image is loaded
            var dfds = [];  
            imgs.each(function(){
                var dfd = $.Deferred();
                dfds.push(dfd);
                var img = new Image();
                img.onload = function(){
                    console.log('Img Loaded');
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
    console.log('default app',app);
    if (typeof requirejs === 'function') {
	    requirejs(['appmenu'],function(appmenu){

        });
	    if (contentmodule) {
	    	console.log('modulo a carregar:',contentmodule);
	    	requirejs([pagModulesRef[contentmodule].module],function(module){
                console.log('-----',module);
                if(module)
                module.init();
            });
	    } else {
	    	console.log('module missing');
	    }    
	}    
});