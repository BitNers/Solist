const mix = require('laravel-mix');

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

mix
.scripts('node_modules/jquery/dist/jquery.min.js','public/src/jquery/jquery.js')
.scripts('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/src/bootstrap/bootstrap.js')
.scripts('node_modules/angular/angular.min.js','public/src/angular/angular.js')
.scripts('node_modules/mdbootstrap/css/mdb.min.css', 'public/src/bootstrap/mdb.css')
.scripts('node_modules/mdbootstrap/js/mdb.min.js', 'public/src/bootstrap/mdb.js')
.scripts('node_modules/mdbootstrap/js/popper.min.js', 'public/src/bootstrap/popper.js')
.scripts('node_modules/bootstrap/dist/css/bootstrap.min.css','public/src/bootstrap/bootstrap.css');