// webpack.config.js
var Encore = require('@symfony/webpack-encore');

Encore
    // the project directory where all compiled assets will be stored
    .setOutputPath('public/build/')

    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')

    // will create public/build/app.js and public/build/app.css
    .addEntry('app', './assets/js/app.js')
    .addEntry('appalojamiento', './assets/js/alojamiento.js')
    .addEntry('appcomer', './assets/js/comer.js')
    .addEntry('appevento', './assets/js/evento.js')
    // .addEntry('midatatable', './assets/js/midatatable.js')
    .addStyleEntry('appstyle', './assets/css/app.css')
    .addStyleEntry('eventostyle', './assets/css/evento.css')
    .addStyleEntry('alojamientostyle', './assets/css/alojamiento.css')
    .addStyleEntry('comerstyle', './assets/css/comer.css')
    .addStyleEntry('iniciostyle', './assets/css/inicio.css')
    .addStyleEntry('quehacer', './assets/css/quehacer.css')
   
   



    // allow legacy applications to use $/jQuery as a global variable
    .autoProvidejQuery()

    // enable source maps during development
    .enableSourceMaps(!Encore.isProduction())

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    // show OS notifications when builds finish/fail
    .enableBuildNotifications()

    // create hashed filenames (e.g. app.abc123.css)
    // .enableVersioning()

    // allow sass/scss files to be processed
    // .enableSassLoader()
;

// export the final configuration
module.exports = Encore.getWebpackConfig();