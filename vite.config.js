import { fileURLToPath, URL } from 'node:url'

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': fileURLToPath(new URL('node_modules/bootstrap', import.meta.url)),
        },
    }
});
