import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        hmr: process.env.VITE_HMR_HOST ? {
            host: process.env.VITE_HMR_HOST,
            protocol: 'wss',
        } : undefined,
    },
});
