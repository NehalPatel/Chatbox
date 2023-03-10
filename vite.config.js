import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/chatbox.css', 'resources/js/chatbox.js'],
            refresh: true,
        }),
    ],
});
