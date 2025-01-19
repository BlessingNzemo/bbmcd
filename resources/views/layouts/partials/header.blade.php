<!-- Header -->
<header class="fixed top-0 left-0 w-full bg-white z-50 shadow-lg transition-shadow duration-300">
    <nav class="py-4">
        <div class="container px-4 mx-auto flex items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="Logo" class="h-8">
            </a>

            <!-- Navigation Desktop -->
            <div class="hidden lg:flex items-center justify-center flex-1 space-x-8">
                <a href="{{ route('home') }}" class="nav-link relative px-4 py-2 text-gray-700 hover:text-primary transition-colors duration-300 group focus:bg-blue-50 rounded-lg focus:outline-none">
                    <span>Accueil</span>
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                </a>
                <a href="#" class="nav-link relative px-4 py-2 text-gray-700 hover:text-primary transition-colors duration-300 group focus:bg-blue-50 rounded-lg focus:outline-none">
                    <span>À propos</span>
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                </a>
                <a href="#" class="nav-link relative px-4 py-2 text-gray-700 hover:text-primary transition-colors duration-300 group focus:bg-blue-50 rounded-lg focus:outline-none">
                    <span>Services</span>
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                </a>
                <a href="#" class="nav-link relative px-4 py-2 text-gray-700 hover:text-primary transition-colors duration-300 group focus:bg-blue-50 rounded-lg focus:outline-none">
                    <span>Contact</span>
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                </a>
            </div>

            <!-- Auth Buttons -->
            <div class="flex items-center space-x-4">
                <a href="#" class="flex items-center px-6 py-2 text-primary border border-primary rounded-lg hover:bg-primary hover:text-white transition-all duration-300 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Se connecter
                </a>
                <a href="#" class="flex items-center px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark hover:shadow-lg transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                    S'inscrire
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button type="button" class="lg:hidden p-2" data-hs-overlay="#mobile-menu">
                <i class="uil uil-bars text-2xl"></i>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] bg-white">
        <div class="p-4">
            <div class="flex justify-between items-center mb-8">
                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="Logo" class="h-8">
                <button type="button" class="p-2" data-hs-overlay="#mobile-menu">
                    <i class="uil uil-multiply text-2xl"></i>
                </button>
            </div>
            <div class="flex flex-col space-y-4">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-primary hover:bg-blue-50 px-4 py-2 rounded-lg transition-all duration-300">Accueil</a>
                <a href="#" class="text-gray-700 hover:text-primary hover:bg-blue-50 px-4 py-2 rounded-lg transition-all duration-300">À propos</a>
                <a href="#" class="text-gray-700 hover:text-primary hover:bg-blue-50 px-4 py-2 rounded-lg transition-all duration-300">Services</a>
                <a href="#" class="text-gray-700 hover:text-primary hover:bg-blue-50 px-4 py-2 rounded-lg transition-all duration-300">Contact</a>
                
                <div class="pt-4 border-t">
                    <a href="#" class="block w-full py-2 text-center text-primary border border-primary rounded-lg hover:bg-primary hover:text-white transition-all duration-300">Se connecter</a>
                    <a href="#" class="block w-full py-2 mt-2 text-center bg-primary text-white rounded-lg hover:bg-primary-dark hover:shadow-lg transition-all duration-300">S'inscrire</a>
                </div>
            </div>
        </div>
    </div>
</header>
