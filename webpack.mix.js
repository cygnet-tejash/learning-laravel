const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js");

mix.copyDirectory("resources/admin/vendor", "public/admin/vendor");
mix.copyDirectory("resources/js/vendor", "public/js/vendor");
mix.copyDirectory("resources/js/theme", "public/js");
mix.copyDirectory("resources/fonts", "public/fonts");
mix.copyDirectory("resources/img", "public/img");
mix.copyDirectory("resources/css", "public/css");

mix.js('resources/admin/js/sb-admin.js', 'public/admin/js/sb-admin.min.js');
mix.js('resources/admin/js/custom.js', 'public/admin/js/custom.js');

mix.sass('resources/admin/scss/sb-admin.scss', 'public/admin/css/sb-admin.css');
mix.sass('resources/sass/app.scss', 'public/css/app.css');
mix.sass('resources/sass/main.scss', 'public/css/main.css');


mix.js('resources/js/socket.js', 'public/js/socket.js');