const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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

elixir(mix => {
    mix.sass('app.scss')
       .scripts([ //this path is from 'resource/assets/js/'
		'libs/sweetalert-dev.js' // 'libs/sweetalert-dev.js'
	],'./public/js/libs.js') //save to 'public/js/libs.js'
	.styles([ //this path is from 'resource/assets/css/'
		'libs/sweetalert.css' //libs/sweetalert.css'
	], './public/css/libs.css') //save to 'public/css/libs.css'
       .webpack('app.js');
});
