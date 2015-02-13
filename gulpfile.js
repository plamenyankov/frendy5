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
        .copy('bower_components/jquery/dist/jquery.min.js','public/js/jquery.min.js');
});
