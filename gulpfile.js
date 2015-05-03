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
    mix.sass('app.scss');

    mix.scripts([
        'libs/bootstrap.min.js',
        'libs/contact.js',
        'libs/gmaps.js',
        'libs/html5shiv.js',
        'libs/jquery.js',
        'libs/jquery.prettyPhoto.js',
        'libs/jquery.scrollUp.min.js',
        'libs/price-range.js',
        'libs/select2.min.js',
        'libs/main.js',
        'app.js'
    ],null, 'public/js');

    mix.styles([
        'libs/bootstrap.min.css',
        'libs/animate.css',
        'libs/font-awesome.min.css',
        'libs/prettyPhoto.css',
        'libs/price-range.css',
        'libs/responsive.css',
        'libs/select2.min.css',
        'libs/main.css',
        'app.css'
    ], null, 'public/css');
});
