// webpack.config.js
var Encore = require('@symfony/webpack-encore');

Encore
    // the project directory where all compiled assets will be stored
    .setOutputPath('public/build/')

    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')
<<<<<<< HEAD

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
=======
    // only needed for CDN's or sub-directory deploy
    //.setManifestKeyPrefix('build/')

    /*
     * ENTRY CONFIG
     *
     * Add 1 entry for each "page" of your app
     * (including one that's included on every page - e.g. "app")
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if you JavaScript imports CSS.
     */

    .addEntry('app', './assets/js/app.js')
<<<<<<< HEAD


   
    .addStyleEntry('quehacer', './assets/css/quehacer.css')
=======
    .addEntry('appevento', './assets/js/evento.js')
    .addStyleEntry('inicio', './assets/css/inicio.css') 
    .addStyleEntry('evento', './assets/css/evento.css') 

    .addEntry('app', './assets/js/app.js') 
    .addEntry('appalojamiento', './assets/js/alojamiento.js') 
    .addEntry('appcomer', './assets/js/comer.js') 
    .addStyleEntry('alojamiento', './assets/css/alojamiento.css') 
    .addStyleEntry('comer', './assets/css/comer.css') 

>>>>>>> dad141fb9d02adacf3452c1bb68da9a92a530927
    //.addEntry('page1', './assets/js/page1.js')
    //.addEntry('page2', './assets/js/page2.js')

    // will require an extra script tag for runtime.js
    // but, you probably want this, unless you're building a single-page app
    .enableSingleRuntimeChunk()

    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
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