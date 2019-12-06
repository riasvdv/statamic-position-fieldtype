let mix = require('laravel-mix');

mix.js('resources/js/position-fieldtype.js', 'dist/js');
mix.styles('resources/css/position-fieldtype.css', 'dist/css/position-fieldtype.css');
mix.copy('resources/fonts', 'dist/fonts');
