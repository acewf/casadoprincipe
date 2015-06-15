/*global define */
define(function (require) {
    'use strict';


    //log = require('loglevel'),
    // load dependencies
    var $ = require('jquery'),
        components = {},
        self = {};


    components.dummy = require('component/dummy');

    // API methods
    $.extend(self, {

       /**
        * App initialization
	     */
        init: function init() {
            //log.setLevel(0);
            //log.debug('Running jQuery %s', $().jquery);

            //log.debug('');
            //log.debug('Initializing components ...');

            for (var key in components) {
                try {
                    components[key].init();
                } catch (err) {
                    console.log(err);
                    //log.debug('initialization failed for component \'' + key + '\'');
                    //log.error(err);
                }
            }
        }
    });

    return self;
});