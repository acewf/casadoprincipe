require(['app', 'jquery', 'picturefill'], function (app) {
    'use strict';
    // use app here
    var pagModulesRef = [];
    pagModulesRef['home-ui'] = {module:'apphome'};
    pagModulesRef['quarto-ui'] = {module:'approom'};
    pagModulesRef['quarto-detail-ui'] = {module:'approomdetail'};
    pagModulesRef['casa-do-principe-ui'] = {module:'casadoprincipe'};
    pagModulesRef['facilities-services-ui'] = {module:'facilitiesservices'};

    app.init();
    console.log('default app');
    if (typeof requirejs === 'function') {
	    requirejs(['appmenu']);
	    if (contentmodule) {
	    	console.log('modulo a carregar:',contentmodule);
	    	requirejs([pagModulesRef[contentmodule].module]);
	    } else {
	    	console.log('module missing');
	    }    
	}    
});