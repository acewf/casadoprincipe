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
        jquery: 'jquery/jquery',
        bootstrap: 'bootstrap/dist/js/bootstrap',
        bootstrapdate: 'bootstrap-datepicker-master/js/bootstrap-datepicker',
        bootstrappickerpt: 'bootstrap-datepicker-master/js/locales/bootstrap-datepicker.pt',
        fotorama: 'fotorama/fotorama',
        loglevel: 'loglevel/dist/loglevel.min',
        picturefill: 'picturefill/dist/picturefill',
        'bootstrap-datetimepicker': 'bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min'
    },
    shim: {
        appmenu: {
            deps: [
                'fotorama',
                'jquery',
                'textloader'
            ],
            exports: 'appmenu'
        },
        apphome: {
            deps: [
                'fotorama',
                'jquery',
                'contentloader',
                'textloader'
            ],
            exports: 'apphome'
        },
        approom: {
            deps: [
                'fotorama',
                'contentloader',
                'textloader'
            ],
            exports: 'approom'
        },
        casadoprincipe: {
            deps: [
                'fotorama',
                'contentloader',
                'textloader'
            ],
            exports: 'approom'
        },
        facilitiesservices: {
            deps: [
                'fotorama',
                'contentloader',
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