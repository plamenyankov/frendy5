var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
       .copy('bower_components/foundation/scss', 'resources/assets/sass')
        .copy('bower_components/foundation/js/foundation.min.js','public/js/foundation.min.js')
        .copy('bower_components/angular-socket-io/','public/js/angular/angular-socket-io/')
        .copy('bower_components/ng-file-upload/angular-file-upload.js','public/js/angular-file-upload.js')
        .copy('bower_components/ng-file-upload/angular-file-upload-shim.js','public/js/angular-file-upload-shim.js')
        .copy('bower_components/foundation/js/foundation/','public/js/foundation/')
        .copy('bower_components/foundation/js/vendor/','public/js/vendor/')
        .copy('bower_components/jquery/dist/jquery.min.js','public/js/jquery.min.js');
});
