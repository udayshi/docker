var Encore = require('@symfony/webpack-encore');

Encore
    // the project directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')
    // the public path you will use in Symfony's asset() function - e.g. asset('build/some_file.js')
    .setManifestKeyPrefix('build/')

    .cleanupOutputBeforeBuild()
    //enable versioning


    //.enableSourceMaps(!Encore.isProduction())
    .enableSourceMaps(true)
    // the following line enables hashed filenames (e.g. app.abc123.css)
    //.enableVersioning(Encore.isProduction())
    //used by all application

    //.createSharedEntry('layout', './assets/js/layout.js')



    // uncomment to define the assets of the project
    .addEntry('js/app', './assets/js/app.js')
    .enableVersioning()

    .addStyleEntry('css/app', './assets/css/app.scss')

    // uncomment if you use TypeScript
    //.enableTypeScriptLoader()

    // uncomment if you use Sass/SCSS files
    .enableSassLoader()



    // uncomment for legacy applications that require $/jQuery as a global variable
    //.autoProvidejQuery()
;
console.log(Encore.getWebpackConfig());
module.exports = Encore.getWebpackConfig();
