const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');
require('laravel-elixir-livereload');


elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js')
        // .version('css/app.css')
        .livereload();
});
