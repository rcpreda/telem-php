import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/auth.css',
                'resources/scss/dashboard.scss',
                'resources/scss/auth.scss',
                'resources/js/app.js',
                'resources/js/dashboard.js',
                'resources/js/auth.js',
            ],
            refresh: true,
        }),
    ],
});
