const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/admin/app.js', 'public/js/admin')
    .postCss('public/assets/css/admin/app.css', 'assets/css/admin/app.min.css', [require('cssnano')])
    .postCss('public/assets/css/admin/bootstrap.css', 'assets/css/admin/bootstrap.min.css', [require('cssnano')])
    .postCss('public/assets/css/admin/icons.css', 'assets/css/admin/icons.min.css', [require('cssnano')])
    .sass('resources/scss/admin/app.scss', 'assets/css/admin/app.css')
    .sass('resources/scss/admin/bootstrap.scss', 'assets/css/admin/bootstrap.css')
    .sass('resources/scss/admin/icons.scss', 'assets/css/admin/icons.css');
