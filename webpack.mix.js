let mix = require('laravel-mix');

mix.js('src/js/app.js', 'dist/')
    .sass('src/sass/app.scss', 'dist/')
    .options({
        processCssUrls: false
    })
    .setPublicPath('dist');

// mix.browserSync({
//     proxy: 'digital.loc',
//     files: ['*.php', 'views/**/*.php', 'dist/app.css', 'dist/app.js']
// });