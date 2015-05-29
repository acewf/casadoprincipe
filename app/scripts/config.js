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
        component: '../scripts/component',
        library: '../scripts/library',
        jquery: 'jquery/jquery',
        bootstrap: 'bootstrap/dist/js/bootstrap',
        bootstrapdate: 'bootstrap-datepicker-master/js/bootstrap-datepicker',
        bootstrappickerpt: 'bootstrap-datepicker-master/js/locales/bootstrap-datepicker.pt',
        fotorama: 'fotorama/fotorama',
        loglevel: 'loglevel/dist/loglevel.min',
        picturefill: 'picturefill/dist/picturefill'
    },
    shim: {
        apphome: {
            deps: [
                'fotorama',
                'jquery'
            ],
            exports: 'apphome'
        },
        approom: {
            deps: [
                'fotorama'
            ],
            exports: 'approom'
        },
        approomdetail: {
            deps: [
                'bootstrapdate',
                'bootstrappickerpt',
                'fotorama'
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