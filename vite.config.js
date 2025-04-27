import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            // Ajoutez le fichier CSS de Swiper à la liste des entrées
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                // Utilisez le chemin public
                'public/assets/libs/swiper/swiper-bundle.min.css'
            ],
            refresh: true,
        }),
    ],
    // server: {
    //     hmr: {
    //         host: '192.168.243.42:8080',
    //     },
    // },
});
