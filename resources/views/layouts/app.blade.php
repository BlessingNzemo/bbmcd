<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BBM - Solutions NFC innovantes">

    <title>@yield('title') | BBM Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Vite -->
    @vite([
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
    ])

    <!-- Custom CSS -->
    @stack('styles')
</head>

<body class="text-gray-600 bg-gray-50">

    <!-- Header -->
    @include('layouts.partials.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.partials.footer')

    <!-- Core JS -->
    <script src="{{ asset('assets/libs/preline/preline.js') }}"></script>
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/gumshoejs/gumshoe.polyfills.min.js') }}"></script>
    <script src="{{ asset('assets/libs/lucide/umd/lucide.min.js') }}"></script>

    <!-- Custom JS -->
    @stack('scripts')

</body>
</html>
