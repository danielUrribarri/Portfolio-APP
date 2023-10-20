import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/bootstrap.min.css',
                'resources/css/line-awesome.min.css',
                'resources/css/style.css',               
                'resources/js/bootstrap.bundle.min.js',
                'resources/js/main.js',
                'resources/js/aos.js',                
            ],
            refresh: true,
        }),
        
    ],
});
