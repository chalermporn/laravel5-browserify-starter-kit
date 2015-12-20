var elixir = require('laravel-elixir');

elixir.config.css.minifyCss.pluginOptions = { processImport: true, keepSpecialComments:0 };

elixir(function(mix) {
     mix
        .copy('node_modules/font-awesome/fonts', 'public/fonts')
        .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts')
        .sass('app.scss')
        .sass('admin.scss')
        .browserify('app/app.js')
        .browserify('admin/admin.js')
    ;
});
