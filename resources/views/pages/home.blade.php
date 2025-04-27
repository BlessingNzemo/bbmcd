@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-400 to-blue-900 relative overflow-hidden pt-32 pb-24">
    <div class="absolute inset-0 bg-pattern opacity-10"></div>
    <div class="container px-4 relative">
        <div class="text-center max-w-4xl mx-auto mb-16" data-aos="fade-up">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                Transformez votre <span class="text-primary">carte de visite</span><br> en expérience digitale
            </h1>
            <p class="text-xl text-white mb-10">
                Solutions NFC innovantes pour les professionnels modernes
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#" class="inline-block px-8 py-4 bg-white text-primary rounded-xl font-medium hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg

                <a href="#" class="btn-outline hover:bg-gray-50 transform hover:scale-105 transition-transform duration-300">
                    En savoir plus
                </a>
            </div>
        </div>

        <!-- Forme ondulée -->
        <div class="relative" data-aos="zoom-in" data-aos-delay="300">
            <img src="{{ asset('assets/images/landing/saas/nfc.png') }}" alt="Hero" class="w-full max-w-xl mx-auto rounded-xl ">
            <div class="absolute inset-0 bg-primary/10 rounded-xl"></div>
        </div>
    </div>
    <div class="shape absolute sm:-bottom-px -bottom-[1px] start-0 end-0 overflow-hidden text-gray-50">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</section>

<!-- Features Section -->
{{-- <section class="py-24 bg-gray-50">
    <div class="container mx-auto px-4 max-w-6xl">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-3xl/snug md:text-4xl font-bold text-gray-800 mb-4">
                Des solutions innovantes pour chaque étape <br>de votre transition digitale
            </h2>
            <p class="text-base text-gray-600">
                Découvrez nos fonctionnalités exclusives pour une expérience professionnelle unique
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8 mx-auto">
            <!-- Feature 1 -->
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                <span class="inline-flex relative z-0 bg-blue-50 h-14 w-14 mb-6" style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                    <div class="absolute -z-20 top-5 left-5 right-0 bottom-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                </span>
                <h5 class="text-xl font-medium mt-5 text-gray-800">Design épuré</h5>
                <p class="text-base text-slate-600 mt-4">Une interface intuitive et moderne pour une expérience utilisateur optimale.</p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                <span class="inline-flex relative z-0 bg-red-50 h-14 w-14 mb-6" style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                    <div class="absolute -z-20 top-5 left-5 right-0 bottom-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-red-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                </span>
                <h5 class="text-xl font-medium mt-5 text-gray-800">Lorem Ipsum Dolor</h5>
                <p class="text-base text-slate-600 mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="300">
                <span class="inline-flex relative z-0 bg-green-50 h-14 w-14 mb-6" style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                    <div class="absolute -z-20 top-5 left-5 right-0 bottom-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                </span>
                <h5 class="text-xl font-medium mt-5 text-gray-800">Sit Amet Consectetur</h5>
                <p class="text-base text-slate-600 mt-4">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="400">
                <span class="inline-flex relative z-0 bg-purple-50 h-14 w-14 mb-6" style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                    <div class="absolute -z-20 top-5 left-5 right-0 bottom-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-purple-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                </span>
                <h5 class="text-xl font-medium mt-5 text-gray-800">Adipiscing Elit</h5>
                <p class="text-base text-slate-600 mt-4">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.</p>
            </div>

            <!-- Feature 5 -->
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="500">
                <span class="inline-flex relative z-0 bg-yellow-50 h-14 w-14 mb-6" style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                    <div class="absolute -z-20 top-5 left-5 right-0 bottom-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-yellow-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                </span>
                <h5 class="text-xl font-medium mt-5 text-gray-800">Tempor Incididunt</h5>
                <p class="text-base text-slate-600 mt-4">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam.</p>
            </div>
            <!-- Feature 6-->
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="500">
                <span class="inline-flex relative z-0 bg-yellow-50 h-14 w-14 mb-6" style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                    <div class="absolute -z-20 top-5 left-5 right-0 bottom-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-yellow-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                </span>
                <h5 class="text-xl font-medium mt-5 text-gray-800">Tempor Incididunt</h5>
                <p class="text-base text-slate-600 mt-4">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam.</p>
            </div>
        </div>
    </div>
</section> --}}

<!-- Features Section -->
<section class="py-24 bg-white">
    <div class="container px-4 mx-auto max-w-screen-xl">
        <div class="max-w-2xl mx-auto text-center mb-16">
            <h2 class="text-4xl font-bold mb-6 text-gray-900" data-aos="fade-up">Fonctionnalités Exceptionnelles</h2>
            <p class="text-lg text-gray-600" data-aos="fade-up" data-aos-delay="100">
                Découvrez comment nos cartes NFC et notre plateforme révolutionnent votre façon de partager vos coordonnées professionnelles.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-gray-50 p-8 rounded-xl shadow-md transition-all duration-300 hover:shadow-lg hover:scale-105" data-aos="fade-up" data-aos-delay="150">
                <div class="w-14 h-14 bg-primary/20 flex items-center justify-center rounded-xl mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900">Design Personnalisé</h3>
                <p class="text-gray-600 mb-4">
                    Créez votre carte NFC unique qui reflète votre identité professionnelle. Choisissez parmi nos modèles élégants ou téléchargez votre propre design.
                </p>
                <a href="#" class="text-primary font-medium inline-flex items-center">
                    En savoir plus
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <!-- Feature 2 -->
            <div class="bg-gray-50 p-8 rounded-xl shadow-md transition-all duration-300 hover:shadow-lg hover:scale-105" data-aos="fade-up" data-aos-delay="200">
                <div class="w-14 h-14 bg-primary/20 flex items-center justify-center rounded-xl mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900">Compatibilité Universelle</h3>
                <p class="text-gray-600 mb-4">
                    Nos cartes fonctionnent avec tous les smartphones équipés de la technologie NFC. Aucune application spécifique n'est nécessaire pour accéder à votre profil numérique.
                </p>
                <a href="#" class="text-primary font-medium inline-flex items-center">
                    En savoir plus
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <!-- Feature 3 -->
            <div class="bg-gray-50 p-8 rounded-xl shadow-md transition-all duration-300 hover:shadow-lg hover:scale-105" data-aos="fade-up" data-aos-delay="250">
                <div class="w-14 h-14 bg-primary/20 flex items-center justify-center rounded-xl mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900">Profil Dynamique</h3>
                <p class="text-gray-600 mb-4">
                    Créez un profil attrayant avec photo de couverture, photo de profil et bio personnalisée. Mettez en avant votre personnalité et votre expertise professionnelle.
                </p>
                <a href="#" class="text-primary font-medium inline-flex items-center">
                    En savoir plus
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <!-- Feature 4 -->
            <div class="bg-gray-50 p-8 rounded-xl shadow-md transition-all duration-300 hover:shadow-lg hover:scale-105" data-aos="fade-up" data-aos-delay="300">
                <div class="w-14 h-14 bg-primary/20 flex items-center justify-center rounded-xl mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900">Enregistrement Instantané</h3>
                <p class="text-gray-600 mb-4">
                    Un simple bouton permet à vos contacts d'enregistrer instantanément toutes vos coordonnées dans leur répertoire téléphonique, sans erreur de saisie.
                </p>
                <a href="#" class="text-primary font-medium inline-flex items-center">
                    En savoir plus
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <!-- Feature 5 -->
            <div class="bg-gray-50 p-8 rounded-xl shadow-md transition-all duration-300 hover:shadow-lg hover:scale-105" data-aos="fade-up" data-aos-delay="350">
                <div class="w-14 h-14 bg-primary/20 flex items-center justify-center rounded-xl mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900">Réseaux Sociaux Intégrés</h3>
                <p class="text-gray-600 mb-4">
                    Connectez tous vos profils de réseaux sociaux à votre carte. Permettez à vos contacts de vous suivre sur LinkedIn, Twitter, Instagram et plus encore en un seul clic.
                </p>
                <a href="#" class="text-primary font-medium inline-flex items-center">
                    En savoir plus
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <!-- Feature 6 -->
            <div class="bg-gray-50 p-8 rounded-xl shadow-md transition-all duration-300 hover:shadow-lg hover:scale-105" data-aos="fade-up" data-aos-delay="400">
                <div class="w-14 h-14 bg-primary/20 flex items-center justify-center rounded-xl mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900">Galerie Portfolio</h3>
                <p class="text-gray-600 mb-4">
                    Présentez vos produits, services ou réalisations grâce à notre galerie photo intégrée. Faites une première impression visuelle percutante auprès de vos contacts.
                </p>
                <a href="#" class="text-primary font-medium inline-flex items-center">
                    En savoir plus
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="mt-16 text-center" data-aos="fade-up" data-aos-delay="450">
            <a href="#" class="py-3 px-8 inline-flex items-center justify-center rounded-xl font-semibold bg-primary text-white hover:bg-primary-dark transition-colors duration-300">
                Découvrir toutes nos fonctionnalités
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<!-- Pricing Section -->
{{-- style="background-image: url('{{ asset('assets/images/backgr.png') }}'); --}}
<section class="py-24"  background-size: cover; background-position: center; background-blend-mode: multiply;">
    <div class="container px-4 mx-auto max-w-screen-xl">
        <div class="mx-auto max-w-screen-sm text-center mb-16">
            <h2 class="mb-4 text-4xl font-bold text-white" data-aos="fade-up">Nos Formules</h2>
            <p class="text-white   mb-10 text-lg" data-aos="fade-up" data-aos-delay="100">
                Choisissez la solution qui correspond à vos besoins professionnels
            </p>

            <div class="flex items-center justify-center gap-4" data-aos="fade-up" data-aos-delay="150">
                <span class="text-base font-bold text-gray-700">Mensuel</span>
                <label for="pricing-input" class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" id="pricing-input" value="" class="sr-only peer">
                    <span class="w-11 h-4 bg-gray-200 rounded-full peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-[2px] after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all after:ring-2 after:ring-offset-2 after:ring-primary after:bg-primary"></span>
                </label>
                <span class="text-base font-bold text-gray-700">Annuel</span>
            </div>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8" data-aos="fade-up" data-aos-delay="200">
            <!-- Formule Essentielle -->
            <div class="bg-gray-50 rounded-xl shadow-md transition-all duration-300 hover:shadow-lg overflow-hidden">
                <div class="p-8">
                    <div class="mb-6">
                        <h3 class="flex items-center gap-2 font-bold text-3xl text-gray-800 monthly-price">
                            <span>7$</span>
                            <span class="text-lg font-medium text-gray-600">/mois</span>
                        </h3>
                        <h3 class="flex items-center gap-2 font-bold text-3xl text-gray-800 yearly-price hidden">
                            <span>70$</span>
                            <span class="text-lg font-medium text-gray-600">/an</span>
                        </h3>
                    </div>

                    <div class="mb-6">
                        <h4 class="text-xl font-bold mb-2 text-gray-800">Formule Essentielle</h4>
                        <p class="text-gray-600">Idéale pour les indépendants et les petites entreprises.</p>
                    </div>

                    <hr class="border-gray-300 my-6">

                    <ul class="space-y-4 mb-10">
                        <li class="flex items-center gap-3">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-gray-700">1 carte NFC personnalisée</p>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-gray-700">Profil de base</p>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-gray-700">5 liens sociaux</p>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-gray-700">Mises à jour illimitées</p>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-red-100 text-red-500 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-gray-700">Statistiques de visite</p>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-red-100 text-red-500 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-gray-700">Galerie photos</p>
                        </li>
                    </ul>

                    <a href="#" class="w-full py-3 px-8 inline-flex justify-center items-center rounded-xl font-semibold bg-blue-500 text-white hover:bg-blue-700 transition-colors duration-300">
                        Choisir cette formule
                    </a>
                </div>
            </div>

            <!-- Formule Professionnelle -->
            <div class="bg-gray-50 rounded-xl shadow-xl transition-all duration-300 hover:shadow-lg overflow-hidden relative transform scale-105">
                <div class="absolute bg-primary text-sm text-center inline-flex items-center gap-2 text-white font-semibold rounded-s py-1 px-3 end-0 top-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zm7-10a1 1 0 01.707.293l.707.707.707-.707A1 1 0 0116 3v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0V6h-1a1 1 0 110-2h1V3a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    Populaire
                </div>
                <div class="p-8">
                    <div class="mb-6">
                        <h3 class="flex items-center gap-2 font-bold text-3xl text-gray-800 monthly-price">
                            <span>19$</span>
                            <span class="text-lg font-medium text-gray-600">/mois</span>
                        </h3>
                        <h3 class="flex items-center gap-2 font-bold text-3xl text-gray-800 yearly-price hidden">
                            <span>190$</span>
                            <span class="text-lg font-medium text-gray-600">/an</span>
                        </h3>
                    </div>

                    <div class="mb-6">
                        <h4 class="text-xl font-bold mb-2 text-gray-800">Formule Professionnelle</h4>
                        <p class="text-gray-600">Parfaite pour les professionnels et les PME.</p>
                    </div>

                    <hr class="border-gray-300 my-6">

                    <ul class="space-y-4 mb-10">
                        <li class="flex items-center gap-3">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-gray-700">3 cartes NFC personnalisées</p>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-gray-700">Profil premium</p>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-gray-700">Liens sociaux illimités</p>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-gray-700">Mises à jour illimitées</p>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-gray-700">Statistiques de visite</p>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-gray-700">Galerie photos (10 images)</p>
                        </li>
                    </ul>

                    <a href="#" class="w-full py-3 px-8 inline-flex justify-center items-center rounded-xl font-semibold bg-blue-500 text-white hover:bg-blue-700 transition-colors duration-300">
                        Choisir cette formule
                    </a>
                </div>
            </div>

            <!-- Formule Entreprise -->
            <div class="bg-gray-50 rounded-xl shadow-md transition-all duration-300 hover:shadow-lg overflow-hidden">
                <div class="p-8">
                    <div class="mb-6">
                        <h3 class="flex items-center gap-2 font-bold text-3xl text-gray-800 monthly-price">
                            <span>49$</span>
                            <span class="text-lg font-medium text-gray-600">/mois</span>
                        </h3>
                        <h3 class="flex items-center gap-2 font-bold text-3xl text-gray-800 yearly-price hidden">
                            <span>490$</span>
                            <span class="text-lg font-medium text-gray-600">/an</span>
                        </h3>
                    </div>

                    <div class="mb-6">
                        <h4 class="text-xl font-bold mb-2 text-gray-800">Formule Entreprise</h4>
                        <p class="text-gray-600">Optimale pour les équipes et grandes entreprises.</p>
                    </div>

                    <hr class="border-gray-300 my-6">

                    <ul class="space-y-4 mb-10">
                        <li class="flex items-center gap-3">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-gray-700">10 cartes NFC personnalisées</p>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-gray-700">Profil personnalisable avancé</p>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-gray-700">Liens sociaux illimités</p>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-gray-700">Mises à jour illimitées</p>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-gray-700">Statistiques avancées</p>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-gray-700">Galerie photos illimitée</p>
                        </li>
                    </ul>

                    <a href="#" class="w-full py-3 px-8 inline-flex justify-center items-center rounded-xl font-semibold bg-blue-500 text-white hover:bg-blue-700 transition-colors duration-300">
                        Choisir cette formule
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Avantages Section -->
<section class="py-16 bg-white">
    <div class="container px-4 mx-auto max-w-screen-xl">
        <div class="mx-auto max-w-screen-sm text-center mb-12">
            <h2 class="mb-4 text-4xl font-bold text-gray-900" data-aos="fade-up">Pourquoi Choisir une Carte NFC ?</h2>
            <p class="text-gray-600 mb-10 text-lg" data-aos="fade-up" data-aos-delay="100">
                Découvrez les avantages d'une carte de visite nouvelle génération
            </p>
        </div>
        {{-- style="background-image: url('{{ asset('assets/images/backgr.png') }}'); --}}

        <div class="grid gap-8 mb-6 md:grid-cols-2 lg:grid-cols-2" data-aos="fade-up" data-aos-delay="200">
            <!-- Avantage 1 : Partage Simplifié -->
            <div class="items-center bg-gray-50 rounded-xl shadow-xl hover:shadow-2xl transition-shadow duration-300 sm:flex overflow-hidden">
                <img src="{{ asset('assets/images/backgr.png') }}" alt="Partage Facile" class="w-full rounded-xl sm:w-2/5 object-cover h-full">
                <div class="p-6 sm:w-3/5">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Partage simplifié</h3>
                    <p class="text-gray-600 mb-4">
                        Partager vos coordonnées n’a jamais été aussi simple. Avec une carte NFC, un simple contact suffit pour transmettre toutes vos informations à un smartphone.
                    </p>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Contact NFC ou QR code</li>
                        <li>Partage instantané</li>
                        <li>Compatible tous smartphones</li>
                    </ul>
                </div>
            </div>

            <!-- Avantage 2 : Mises à Jour Illimitées -->
            <div class="items-center bg-gray-50 rounded-xl shadow-xl hover:shadow-2xl transition-shadow duration-300 sm:flex overflow-hidden">
                <img src="{{ asset('assets/images/backgr.png') }}" alt="Mises à Jour Illimitées" class="w-full rounded-xl sm:w-2/5 object-cover h-full">
                <div class="p-6 sm:w-3/5">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Mises à jour illimitées</h3>
                    <p class="text-gray-600 mb-4">
                        Connectée en temps réel à votre profil digital, actualisez vos données de manière illimitée. Modifiez vos coordonnées 24h/24, 7j/7 depuis votre compte.
                    </p>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Modifications instantanées</li>
                        <li>Aucune réimpression</li>
                        <li>Profil toujours à jour</li>
                    </ul>
                </div>
            </div>

            <!-- Avantage 3 : Fini les Cartes Perdues -->
            <div class="items-center bg-gray-50 rounded-xl shadow-xl hover:shadow-2xl transition-shadow duration-300 sm:flex overflow-hidden">
                <img src="{{ asset('assets/images/backgr.png') }}" alt="Fini les Cartes Perdues" class="w-full rounded-xl sm:w-2/5 object-cover h-full">
                <div class="p-6 sm:w-3/5">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Fini les cartes perdues</h3>
                    <p class="text-gray-600 mb-4">
                        80% des cartes de visite papiers sont perdues dès la première semaine. Ne perdez plus le lien avec vos prospects.
                    </p>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Contact direct et durable</li>
                        <li>Augmentation des conversions</li>
                        <li>Image professionnelle moderne</li>
                    </ul>
                </div>
            </div>

            <!-- Avantage 4 : Une Seule Carte -->
            <div class="items-center bg-gray-50 rounded-xl shadow-xl hover:shadow-2xl transition-shadow duration-300 sm:flex overflow-hidden">
                <img src="{{ asset('assets/images/backgr.png') }}" alt="Une Seule Carte" class="w-full rounded-xl sm:w-2/5 object-cover h-full">
                <div class="p-6 sm:w-3/5">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Une seule carte</h3>
                    <p class="text-gray-600 mb-4">
                        Fini les paquets de 250 cartes encombrants, coûteux et souvent oubliés. Avec notre carte de visite digitale, ne gardez qu’une seule carte dans votre portefeuille.
                    </p>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Gain de place</li>
                        <li>Économie sur l'impression</li>
                        <li>Solution écologique</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Team Section -->
<section class="bg-blue-900 py-16 " style="background-image: url('{{ asset('assets/images/animated.svg') }}');">
    <div class="container px-4 mx-auto max-w-screen-xl">
        <div class="mx-auto max-w-screen-sm text-center mb-12">
            <h2 class="mb-4 text-4xl font-bold text-white" data-aos="fade-up">Notre Équipe</h2>
            <p class="text-white mb-10 text-lg" data-aos="fade-up" data-aos-delay="100">
                Une équipe de professionnels passionnés prêts à transformer vos échanges professionnels
            </p>
        </div>

        <div class="grid gap-8 mb-6 md:grid-cols-2" data-aos="fade-up" data-aos-delay="200">
            <!-- Team Member 1 -->
            <div class="bg-gray-50 rounded-xl shadow-md transition-all duration-300 hover:shadow-lg sm:flex overflow-hidden">
                <a href="#" class="sm:w-2/5 block">
                    <img class="w-full h-full object-cover sm:rounded-l-xl" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Membre de l'équipe">
                </a>
                <div class="p-6 sm:w-3/5">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">
                        <a href="#" class="hover:text-primary transition-colors">Sarah Durand</a>
                    </h3>
                    <span class="text-primary font-medium block mb-3">CEO & Développeuse</span>
                    <p class="text-gray-600 mb-4">Sarah guide la stratégie technique et la vision de BBM pour créer des solutions NFC innovantes.</p>
                    <ul class="flex space-x-4">
                        <li>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="bg-gray-50 rounded-xl shadow-md transition-all duration-300 hover:shadow-lg sm:flex overflow-hidden">
                <a href="#" class="sm:w-2/5 block">
                    <img class="w-full h-full object-cover sm:rounded-l-xl" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Membre de l'équipe">
                </a>
                <div class="p-6 sm:w-3/5">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">
                        <a href="#" class="hover:text-primary transition-colors">Thomas Martin</a>
                    </h3>
                    <span class="text-primary font-medium block mb-3">Directeur Technique</span>
                    <p class="text-gray-600 mb-4">Thomas supervise tous les aspects techniques de nos solutions NFC et garantit leur fiabilité.</p>
                    <ul class="flex space-x-4">
                        <li>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="bg-gray-50 rounded-xl shadow-md transition-all duration-300 hover:shadow-lg sm:flex overflow-hidden">
                <a href="#" class="sm:w-2/5 block">
                    <img class="w-full h-full object-cover sm:rounded-l-xl" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="Membre de l'équipe">
                </a>
                <div class="p-6 sm:w-3/5">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">
                        <a href="#" class="hover:text-primary transition-colors">Michel Laurent</a>
                    </h3>
                    <span class="text-primary font-medium block mb-3">Développeur Frontend</span>
                    <p class="text-gray-600 mb-4">Michel crée des interfaces utilisateur intuitives et élégantes pour nos applications web et mobiles.</p>
                    <ul class="flex space-x-4">
                        <li>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="bg-gray-50 rounded-xl shadow-md transition-all duration-300 hover:shadow-lg sm:flex overflow-hidden">
                <a href="#" class="sm:w-2/5 block">
                    <img class="w-full h-full object-cover sm:rounded-l-xl" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png" alt="Membre de l'équipe">
                </a>
                <div class="p-6 sm:w-3/5">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">
                        <a href="#" class="hover:text-primary transition-colors">Sophie Dubois</a>
                    </h3>
                    <span class="text-primary font-medium block mb-3">Marketing & Ventes</span>
                    <p class="text-gray-600 mb-4">Sophie développe nos stratégies marketing et gère nos relations avec les clients.</p>
                    <ul class="flex space-x-4">
                        <li>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team End -->

<!-- Styles pour les animations NFC -->
@push('styles')
<style>
    /* Animation des ondes NFC */
    .nfc-ripple {
        position: relative;
        width: 60px;
        height: 60px;
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
    }

    .nfc-ripple::before,
    .nfc-ripple::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.3);
        animation: ripple 2s linear infinite;
    }

    .nfc-ripple::after {
        animation-delay: 1s;
    }

    @keyframes ripple {
        0% {
            transform: scale(1);
            opacity: 1;
        }
        100% {
            transform: scale(3);
            opacity: 0;
        }
    }

    /* Animation de la carte NFC */
    .nfc-card-animation {
        position: relative;
        overflow: hidden;
        transition: all 0.6s ease;
    }

    .nfc-card-animation:hover img {
        transform: scale(1.05);
    }

    .nfc-card-animation img {
        transition: transform 0.6s ease;
    }

    /* Style pour Swiper */
    .partners-carousel .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background: #ccc;
        opacity: 1;
    }

    .partners-carousel .swiper-pagination-bullet-active {
        background: var(--primary-color, #000);
    }

    .partners-carousel .swiper-button-next,
    .partners-carousel .swiper-button-prev {
        color: var(--primary-color, #000);
    }
</style>
@endpush



<!-- CTA Section amélioré -->
<section class="py-24">
    <div class="container px-4">
        <div class="bg-gradient-to-r from-primary to-primary-dark rounded-2xl p-8 md:p-16 text-center transform hover:scale-[1.02] transition-transform duration-300 shadow-xl" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Prêt à commencer?</h2>
            <p class="text-blue/90 text-xl mb-8">Rejoignez des milliers d'entreprises satisfaites</p>
            <a href="#" class="inline-block px-8 py-4 bg-white text-primary rounded-xl font-medium hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                Démarrer maintenant
            </a>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script>
    // JavaScript pour basculer entre les prix mensuels et annuels
    document.addEventListener('DOMContentLoaded', function() {
        const pricingSwitch = document.getElementById('pricing-input');
        const monthlyPrices = document.querySelectorAll('.monthly-price');
        const yearlyPrices = document.querySelectorAll('.yearly-price');

        pricingSwitch.addEventListener('change', function() {
            if (this.checked) {
                // Afficher les prix annuels
                monthlyPrices.forEach(el => el.classList.add('hidden'));
                yearlyPrices.forEach(el => el.classList.remove('hidden'));
            } else {
                // Afficher les prix mensuels
                monthlyPrices.forEach(el => el.classList.remove('hidden'));
                yearlyPrices.forEach(el => el.classList.add('hidden'));
            }
        });
    });
    // Code pour le bouton "Get Started"
    document.addEventListener('DOMContentLoaded', function() {
        const getStartedButton = document.querySelector('.get-started-button');
        getStartedButton.addEventListener('click', function() {
            alert('Merci de votre intérêt ! Nous vous contacterons bientôt.');
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.partners-carousel', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // Quand la largeur de la fenêtre est >= 768px
                768: {
                    slidesPerView: 1,
                    spaceBetween: 30
                },
                // Quand la largeur de la fenêtre est >= 1024px
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 40
                }
            }
        });
    });

    //Script pourr le carousel swiper
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.partners-carousel', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // Quand la largeur de la fenêtre est >= 768px
                768: {
                    slidesPerView: 1,
                    spaceBetween: 30
                },
                // Quand la largeur de la fenêtre est >= 1024px
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 40
                }
            }
        });
    });
</script>
@endpush
@push('styles')
<style>
.bg-pattern {
    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.shape {
    pointer-events: none;
    z-index: 2;
}

.btn-primary {
    @apply inline-block px-8 py-4 bg-primary text-white rounded-xl font-medium hover:bg-primary-dark transform hover:scale-105 transition-all duration-300 shadow-lg;
}

.btn-outline {
    @apply inline-block px-8 py-4 border-2 border-primary text-primary rounded-xl font-medium hover:bg-primary hover:text-white transition-all duration-300;
}

</style>



@endpush
