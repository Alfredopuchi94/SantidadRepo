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

mix.scripts([
		'resources/assets/js/jquery.js',
		'resources/assets/js/vue.min.js',
		'resources/assets/js/axios.js',
		'resources/assets/js/popper.js',
		'resources/assets/js/bootstrap.js',
		'resources/assets/js/bootstrap-dropdownhover.min.js',
		'resources/assets/js/jquery-ui.js',
		'resources/assets/js/toastr.min.js',
		'resources/assets/js/app.js',
	],'public/js/app.js')
	.styles([
		'resources/assets/css/bootstrap.css',
		'resources/assets/css/bootstrap-dropdownhover.min.css',
		'resources/assets/css/jquery-ui.css',
		'resources/assets/css/font-awesome.min.css',
		'resources/assets/css/animate.css',
		'resources/assets/css/toastr.min.css',
		'resources/assets/css/app.css',
	],'public/css/app.css' );
