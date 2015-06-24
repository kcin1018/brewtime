var elixir = require('laravel-elixir');

var bowerDir = '../../../bower_components';

elixir(function(mix) {
    mix.sass('app.scss')
/*        .babel([
            'global.js'
        ], 'public/js/brewtime.js')*/
        .version([/*'public/js/brewtime.js',*/'public/css/app.css']);
});