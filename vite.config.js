import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/assets/libs/swiper/swiper-bundle.min.css',
                'resources/assets/libs/@iconscout/unicons/css/line.css',
                'resources/assets/libs/preline/preline.js',
                'resources/assets/libs/gumshoejs/gumshoe.polyfills.min.js',
                'resources/assets/libs/lucide/umd/lucide.min.js',
                'resources/assets/css/tailwind.min.css',
                'resources/assets/js/theme.js',
                'resources/assets/js/swiper.js'
            ],
            refresh: true,
        }),
    ],
});
