let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/delClient.js', 'public/js')
   .js('resources/assets/js/delService.js', 'public/js')
   .js('resources/assets/js/delInvoice.js', 'public/js')
   .js('resources/assets/js/getData.js', 'public/js')
   .js('resources/assets/js/getService.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/fontawesome/fontawesome.scss', 'public/css')
   .copyDirectory('resources/assets/sass/fontawesome/webfonts', 'public/fonts/vendor/fontawesome/webfonts');
