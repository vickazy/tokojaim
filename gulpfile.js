var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
        './resources/views/themes/shoppe/assets/css/easy-responsive-tabs.css',
        './resources/views/themes/shoppe/assets/css/slider.css',
        './resources/views/themes/shoppe/assets/css/global.css',
        './resources/views/themes/shoppe/assets/css/style.css',
    ],'public/assets/css/shoppe.css')
    .sass([
        './resources/views/themes/shoppe/assets/sass/app.scss'
    ], 'public/assets/css/style.css')
    .scripts([
        './resources/views/themes/shoppe/assets/js/move-top.js',
        './resources/views/themes/shoppe/assets/js/jquery.accordion.js',
        './resources/views/themes/shoppe/assets/js/jquery.easing.js',
        './resources/views/themes/shoppe/assets/js/easing.js',
        './resources/views/themes/shoppe/assets/js/startstop-slider.js',
        './resources/views/themes/shoppe/assets/js/easyResponsiveTabs.js',
        './resources/views/themes/shoppe/assets/js/slides.min.jquery.js',
        './resources/views/themes/shoppe/assets/js/script.js',
    ], 'public/assets/js/shoppe.js');
});
