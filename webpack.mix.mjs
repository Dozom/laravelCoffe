import mix from 'laravel-mix';

mix.js('resources/js/app.js', 'public/js')
    .babelConfig({
        presets: [
            ['@babel/preset-env', { targets: 'defaults' }]
        ]
    });
export default mix;
