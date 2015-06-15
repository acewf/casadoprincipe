/* jshint -W098,-W079 picturefill: 'picturefill/dist/picturefill'
 */
 /*
 bootstrapdate: 'bootstrap-datetimepicker/src/js/bootstrap-datetimepicker',
        bootstrappickerpt: 'bootstrap-datetimepicker/src/js/locales/bootstrap-datetimepicker.pt',
 */
var require = {
    baseUrl: '/bower_components',
    paths: {
        main: '../scripts/main',
        app: '../scripts/app',
        appmenu: '../scripts/app-menu-top',
        apphome: '../scripts/app-home',
        gallery: '../scripts/app-gallery',
        location: '../scripts/app-location',
        contacts: '../scripts/app-contacts',
        personalize: '../scripts/app-personalize',
        approom: '../scripts/app-room',
        approomdetail: '../scripts/app-detail-room',
        approominfo: '../scripts/app-room-info',
        casadoprincipe: '../scripts/casa-do-principe',
        facilitiesservices: '../scripts/facilities-services',
        history: '../scripts/history',
        component: '../scripts/component',
        library: '../scripts/library',
        textloader: '../scripts/textloader',
        contentloader: '../scripts/contentloader',
        loadingoverlay: '../scripts/loadingoverlay.min',
        jquery: 'jquery/dist/jquery',
        parsley: 'parsleyjs/dist/parsley.min',
        bootstrap: 'bootstrap/dist/js/bootstrap',
        'google-maps': 'google-maps/lib/Google',
        bootstrapdate: 'bootstrap-datepicker-master/js/bootstrap-datepicker',
        bootstrappickerpt: 'bootstrap-datepicker-master/js/locales/bootstrap-datepicker.pt',
        fotorama: 'fotorama/fotorama',
        picturefill: 'picturefill/dist/picturefill',
        'bootstrap-datetimepicker': 'bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min',
        parsleyjs: 'parsleyjs/dist/parsley'
    },
    shim: {
        appmenu: {
            deps: [
                'fotorama',
                'jquery',
                'contentloader',
                'loadingoverlay',
                'textloader'
            ],
            exports: 'appmenu'
        },
        apphome: {
            deps: [
                'fotorama',
                'jquery',
                'contentloader',
                'loadingoverlay',
                'textloader'
            ],
            exports: 'apphome'
        },
        gallery: {
            deps: [
                'fotorama',
                'jquery',
                'contentloader',
                'loadingoverlay',
                'loadingoverlay',
                'textloader'
            ],
            exports: 'gallery'
        },
        contacts: {
            deps: [
                'jquery',
                'contentloader',
                'google-maps',
                'parsley',
                'loadingoverlay',
                'textloader'
            ],
            exports: 'contacts'
        },
        location: {
            deps: [
                'jquery',
                'google-maps',
                'contentloader',
                'loadingoverlay',
                'textloader'
            ],
            exports: 'location'
        },
        personalize: {
            deps: [
                'jquery',
                'contentloader',
                'loadingoverlay',
                'textloader'
            ],
            exports: 'personalize'
        },
        approom: {
            deps: [
                'fotorama',
                'contentloader',
                'loadingoverlay',
                'textloader'
            ],
            exports: 'approom'
        },
        casadoprincipe: {
            deps: [
                'fotorama',
                'contentloader',
                'loadingoverlay',
                'textloader'
            ],
            exports: 'approom'
        },
        facilitiesservices: {
            deps: [
                'fotorama',
                'contentloader',
                'loadingoverlay',
                'textloader'
            ],
            exports: 'facilitiesservices'
        },
        approomdetail: {
            deps: [
                'bootstrapdate',
                'bootstrappickerpt',
                'fotorama',
                'contentloader',
                'loadingoverlay',
                'textloader'
            ],
            exports: 'approomdetail'
        },
        bootstrapdate: {
            deps: [
                'bootstrap'
            ],
            exports: 'bootstrapdate'
        },
        bootstrappickerpt: {
            deps: [
                'bootstrapdate'
            ],
            exports: 'bootstrappickerpt'
        },
        loadingoverlay: {
            deps: [
                'jquery'
            ],
            exports: 'loadingoverlay'
        },
        fotorama: {
            deps: [
                'jquery'
            ],
            exports: 'fotorama'
        }
    },
    packages: [
        {
            name: 'picturefill',
            main: 'dist/picturefill.js',
            location: 'picturefill'
        }
    ]
};