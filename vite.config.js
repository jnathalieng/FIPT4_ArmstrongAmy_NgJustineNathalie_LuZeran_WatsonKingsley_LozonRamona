import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    server: {
        host: '127.0.0.1',
        port: 5173
    },

    plugins: [
        laravel({
            input: ['resources/css/main.css', 'resources/css/grid.css', 'resources/js/main.js'
            ],
            refresh: true,
        }),
        vue(),
    ],
});