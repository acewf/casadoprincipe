/* jshint -W098,-W079 */
var require = {
    baseUrl: '../bower_components',
    paths: {
        main: '../scripts/main',
        app: '../scripts/app',
        apphome: '../scripts/app-home',
        component: '../scripts/component',
        library: '../scripts/library',
        jquery: 'jquery/dist/jquery',
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