// vite.config.js
import {
    defineConfig
} from 'vite';

import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
        hmr: {
            // AQUI: Usar apenas o domínio, sem o 'https://'
            host: 'malvaceous-nitrosylsulfuric-venus.ngrok-free.dev', 
            // O 'protocol: wss' já indica que a conexão é segura (HTTPS/WSS)
            protocol: 'wss'
        }
    },
});