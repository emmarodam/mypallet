import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue(),
    ],
    server: {
        host: '0.0.0.0', // Gør den tilgængelig fra andre enheder
        allowedHosts: ['app', 'localhost', '127.0.0.1'], // Tillad anmodninger fra disse hosts
        port: 5173,
        strictPort: true,
        hmr: {
            host: 'localhost',
        },
    },
});