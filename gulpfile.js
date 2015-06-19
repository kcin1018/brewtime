var elixir = require('laravel-elixir');

var bowerDir = '../../../bower_components';

elixir(function(mix) {
    mix.sass('app.scss')
        .scripts([
            bowerDir + '/jquery/dist/jquery.js',
            bowerDir + '/bootstrap/dist/js/bootstrap.js',
            bowerDir + '/react/react.js',
        ], 'public/js/vendor.js')
/*        .babel([
            'global.js'
        ], 'public/js/brewtime.js')*/
        .styles([
            bowerDir + '/bootstrap/dist/css/bootstrap.css',
            bowerDir + '/font-awesome/css/font-awesome.css'
        ], 'public/css/vendor.css')
        .version(['public/js/vendor.js'/*, 'public/js/brewtime.js'*/, 'public/css/app.css', 'public/css/vendor.css'])
        .copy('bower_components/bootstrap/dist/fonts', 'public/build/fonts')
        .copy('bower_components/font-awesome/fonts', 'public/build/fonts');
});