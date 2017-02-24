const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

elixir(mix => {

    mix.sass('app.scss');

    mix.webpack('app.js');

    mix.scripts([
    	'./node_modules/jquery/js/jquery.js',
    	'./node_modules/bootstrap/js/bootstrap.js',
    	'./node_modules/select2/js/select2.js',
    	], 'public/js/vendor.js');

    mix.styles([
    	'./node_modules/font-awesome/css/font-awesome.css'

    	], 'public/css/vendor.css');

    mix.copy('node_modules/font-awesome/fonts', 'public/build/fonts');
    /*
    mix.version([

    	'public/css/vendor.css',
    	'public/css/app.css',
    	'public/js/app.js',

    	]);
	*/	
});
