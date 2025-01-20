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
<section class="py-24 bg-gray-50">
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
</section>


 <!-- features Section Start -->
 <section id="features" class="bg-slate-50 bg-cover bg-left bg-no-repeat bg-[url(../images/landing/saas/hero-3-bg.png)]">
    <div class="py-24">
        <div class="container">
            <div class="flex items-center justify-center mb-14">
                <div class="max-w-2xl text-center">
                    <h5 class="capitalize text-lg  text-gray-800 font-medium mb-2">Our <span class="font-semibold text-primary">Features</span></h5>
                    <h2 class="text-3xl/snug font-bold text-gray-800 mb-1">Simply Beautiful Crafted Pages For Every
                        Usecase</h2>
                    <p class="text-base text-gray-600">Nemo enim ipsam voluptatem that quia voluptas aut fugit </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mt-14 items-center">
                <div>
                    <img src="assets/images/landing/saas/saas2.png" class="max-w-full max-h-full rounded-md" alt="">
                </div>

                <div class="my-auto md:mx-auto">
                    <h2 class="lg:text-3xl text-2xl text-gray-800 font-semibold mb-2">Saas Application</h2>
                    <p class="text-base text-gray-600">A simple and clean landing page designed for <br> saas basad
                        application</p>

                    <div class="mt-10 flex flex-col gap-y-4">

                        <div class="flex items-center gap-5">
                            <div>
                                <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8" style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                    <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                        <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                <path d="M7,14 C7,16.7614237 9.23857625,19 12,19 C14.7614237,19 17,16.7614237 17,14 C17,12.3742163 15.3702913,9.86852817 12,6.69922982 C8.62970872,9.86852817 7,12.3742163 7,14 Z M12,21 C8.13400675,21 5,17.8659932 5,14 C5,11.4226712 7.33333333,8.08933783 12,4 C16.6666667,8.08933783 19,11.4226712 19,14 C19,17.8659932 15.8659932,21 12,21 Z" id="Oval-2" fill="currentColor"></path>
                                                <path d="M12,4 C16.6666667,8.08933783 19,11.4226712 19,14 C19,17.8659932 15.8659932,21 12,21 L12,4 Z" id="Combined-Shape" fill="currentColor"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </span>
                            </div>
                            <div>
                                <p class="text-lg font-medium text-gray-600">Clean Design</p>
                            </div>
                        </div><!-- Flex End -->

                        <div class="flex items-center gap-5">
                            <div>
                                <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8" style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                    <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                        <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                <polygon id="Path-48" fill="currentColor" opacity="0.3" points="5 3 19 3 23 8 1 8"></polygon>
                                                <polygon id="Path-48-Copy" fill="currentColor" points="23 8 12 20 1 8"> </polygon>
                                            </g>
                                        </svg>
                                    </div>
                                </span>
                            </div>
                            <div>
                                <p class="text-lg font-medium text-gray-600">Most Of Common Section Covered</p>
                            </div>
                        </div><!-- Flex End -->

                        <div class="flex items-center gap-5">
                            <div>
                                <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8" style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                    <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                        <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                                <path d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" id="Combined-Shape-Copy" fill="currentColor" opacity="0.3"></path>
                                                <path d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" id="Combined-Shape" fill="currentColor"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </span>
                            </div>
                            <div>
                                <p class="text-lg font-medium text-gray-600">Secondary Page Include</p>
                            </div>
                        </div><!-- Flex End -->

                        <div class="flex items-center gap-5">
                            <div>
                                <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8" style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                    <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                        <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Stockholm-icons-/-Layout-/-Layout-top-panel-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                <path d="M3,4 L20,4 C20.5522847,4 21,4.44771525 21,5 L21,7 C21,7.55228475 20.5522847,8 20,8 L3,8 C2.44771525,8 2,7.55228475 2,7 L2,5 C2,4.44771525 2.44771525,4 3,4 Z M10,10 L20,10 C20.5522847,10 21,10.4477153 21,11 L21,19 C21,19.5522847 20.5522847,20 20,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,11 C9,10.4477153 9.44771525,10 10,10 Z" id="Combined-Shape" fill="currentColor"></path>
                                                <rect id="Rectangle-7-Copy-2" fill="currentColor" opacity="0.3" x="2" y="10" width="5" height="10" rx="1"></rect>
                                            </g>
                                        </svg>
                                    </div>
                                </span>
                            </div>
                            <div>
                                <p class="text-lg font-medium text-gray-600">No Additional Cost</p>
                            </div>
                        </div><!-- Flex End -->
                    </div>
                </div>
            </div><!-- Grid End -->
        </div><!-- Container End -->
    </div>

    <div class="pb-24">
        <div class="container">
            <div class="grid md:grid-cols-2 grid-cols-1 gap-6 items-center">
                <div class="my-auto md:mx-auto">
                    <h2 class="lg:text-3xl text-2xl text-gray-800 font-semibold mb-2">Mobile Application</h2>
                    <p class="text-base font-medium text-gray-600">showcase your awesome mobile application <br>
                        with fascination impression</p>

                    <div class="mt-10 flex flex-col gap-y-4">
                        <div class="flex items-center gap-5">
                            <div>
                                <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8" style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                    <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                        <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                <path d="M7,14 C7,16.7614237 9.23857625,19 12,19 C14.7614237,19 17,16.7614237 17,14 C17,12.3742163 15.3702913,9.86852817 12,6.69922982 C8.62970872,9.86852817 7,12.3742163 7,14 Z M12,21 C8.13400675,21 5,17.8659932 5,14 C5,11.4226712 7.33333333,8.08933783 12,4 C16.6666667,8.08933783 19,11.4226712 19,14 C19,17.8659932 15.8659932,21 12,21 Z" id="Oval-2" fill="currentColor"></path>
                                                <path d="M12,4 C16.6666667,8.08933783 19,11.4226712 19,14 C19,17.8659932 15.8659932,21 12,21 L12,4 Z" id="Combined-Shape" fill="currentColor"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </span>
                            </div>
                            <div>
                                <p class="text-lg font-medium text-gray-600">Clean Design</p>
                            </div>
                        </div><!-- Flex End -->

                        <div class="flex items-center gap-5">
                            <div>
                                <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8" style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                    <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                        <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                <polygon id="Path-48" fill="currentColor" opacity="0.3" points="5 3 19 3 23 8 1 8"></polygon>
                                                <polygon id="Path-48-Copy" fill="currentColor" points="23 8 12 20 1 8">
                                                </polygon>
                                            </g>
                                        </svg>
                                    </div>
                                </span>
                            </div>
                            <div>
                                <p class="text-lg font-medium text-gray-600">Most Of Common Section Covered</p>
                            </div>
                        </div><!-- Flex End -->

                        <div class="flex items-center gap-5">
                            <div>
                                <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8" style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                    <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                        <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                                <path d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" id="Combined-Shape-Copy" fill="currentColor" opacity="0.3"></path>
                                                <path d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" id="Combined-Shape" fill="currentColor"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </span>
                            </div>
                            <div>
                                <p class="text-lg font-medium text-gray-600">Secondary Page Include</p>
                            </div>
                        </div><!-- Flex End -->

                        <div class="flex items-center gap-5">
                            <div>
                                <span class="inline-flex relative z-0 bg-primary/10 h-8 w-8" style="border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;">
                                    <div class="absolute -z-20 top-4 left-4 right-0 bottom-0">
                                        <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Stockholm-icons-/-Layout-/-Layout-top-panel-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                <path d="M3,4 L20,4 C20.5522847,4 21,4.44771525 21,5 L21,7 C21,7.55228475 20.5522847,8 20,8 L3,8 C2.44771525,8 2,7.55228475 2,7 L2,5 C2,4.44771525 2.44771525,4 3,4 Z M10,10 L20,10 C20.5522847,10 21,10.4477153 21,11 L21,19 C21,19.5522847 20.5522847,20 20,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,11 C9,10.4477153 9.44771525,10 10,10 Z" id="Combined-Shape" fill="currentColor"></path>
                                                <rect id="Rectangle-7-Copy-2" fill="currentColor" opacity="0.3" x="2" y="10" width="5" height="10" rx="1"></rect>
                                            </g>
                                        </svg>
                                    </div>
                                </span>
                            </div>
                            <div>
                                <p class="text-lg font-medium text-gray-600">No Additional Cost</p>
                            </div>
                        </div><!-- Flex End -->
                    </div>
                </div>

                <div>
                    <img src="assets/images/landing/saas/app.png" class="max-w-full max-h-[650px] mx-auto rounded-md" alt="">
                </div>
            </div><!-- grid End -->
        </div><!-- Container End -->
    </div>
</section>
<!-- features Section End -->





<!-- Pricing Section avec le code existant mais amélioré -->
<section class="py-24 bg-gray-50">
    <div class="container px-4">
        <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Plans tarifaires</h2>
            <p class="text-xl text-gray-600">Choisissez le plan qui vous convient</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Pricing Cards -->
            {{-- @include('components.pricing-cards') --}}
        </div>
    </div>
</section>


   <!-- pricing Section Start -->
   <section id="price" class="py-24">
    <div class="container">
        <div class="flex items-center justify-center mb-14">
            <div class="max-w-2xl text-center">
                <h5 class="capitalize text-lg  text-gray-800 font-medium mb-2">Our <span class="font-semibold text-primary">Pricing</span></h5>
                <h2 class="text-3xl/snug font-bold text-gray-800 mb-1">Simple Plans For Everyone</h2>
                <p class="text-base text-gray-600 mb-8">Nemo enim ipsam voluptatem that quia voluptas aut fugit </p>
                <div class="flex items-center justify-center gap-4">
                    <span class="text-base font-bold text-gray-700">Monthly</span>
                    <label for="pricing-input" class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" id="pricing-input" value="" class="sr-only peer">
                        <span class="w-11 h-4 bg-gray-200 rounded-full  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-1/2 after:-translate-y-1/2 after:left-[2px] after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all after:ring-2 after:ring-offset-2 after:ring-primary after:bg-primary"></span>
                    </label>
                    <span class="text-base font-bold text-gray-700">Yearly</span>
                </div>
            </div>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-10 gap-6">
            <div class="bg-slate-50 rounded relative overflow-hidden shadow-md">
                <div class="flex flex-col h-full p-6">
                    <div class="shrink">
                        <div class="mb-6">
                            <h3 class="flex items-center gap-2 font-bold text-[38px] text-gray-800">
                                <span>$8</span>
                                <span class="text-lg font-medium">/month</span>
                            </h3>
                        </div>
                        <div class="hidden mb-6">
                            <h3 class="flex items-center gap-2 font-bold text-[38px] text-gray-800">
                                <span>$28</span>
                                <span class="text-lg font-medium">/yearly</span>
                            </h3>
                        </div>
                    </div>

                    <div class="">
                        <h5 class="text-xl font-bold mb-2 text-gray-800">Basic Plan</h5>
                        <p class="text-sm text-gray-700 font-medium">All the basics for starting a new bissnesses.</p>
                    </div>

                    <hr class="border-gray-400 my-6">

                    <ul class="grow ">
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                <i class="uil uil-check"></i>
                            </span>
                            <p class="text-gray-900">10 users</p>
                        </li>
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                <i class="uil uil-check"></i>
                            </span>
                            <p class="text-gray-900">50 GB storage</p>
                        </li>
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                <i class="uil uil-check"></i>
                            </span>
                            <p class="text-gray-900">Front plan features</p>
                        </li>
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                <i class="uil uil-check"></i>
                            </span>
                            <p class="text-gray-900">100 apps</p>
                        </li>
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-red-500/20 text-red-500 text-sm font-bold">
                                <i class="uil uil-times"></i>
                            </span>
                            <p class="text-gray-900">Product support</p>
                        </li>
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-red-500/20 text-red-500 text-sm font-bold">
                                <i class="uil uil-times"></i>
                            </span>
                            <p class="text-gray-900">Advanced security</p>
                        </li>
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-red-500/20 text-red-500 text-sm font-bold">
                                <i class="uil uil-times"></i>
                            </span>
                            <p class="text-gray-900">Free subdomain</p>
                        </li>
                    </ul>

                    <div class="shrink mt-3">
                        <a href="#" class="w-full py-2 px-8 inline-flex justify-center items-center gap-2 rounded-md font-semibold border border-primary text-primary text-base focus:outline-none focus:ring-0 transition-all hover:bg-primary hover:text-white">
                            Continue
                        </a>
                    </div>
                </div>
            </div><!-- End grid-col -->

            <div class="bg-slate-50 rounded relative overflow-hidden shadow-md">
                <div class="absolute bg-primary text-sm text-center inline-flex items-center gap-2 text-white font-semibold rounded-s py-1 px-2 end-0 top-3 w-36">
                    <i class="uil uil-link text-base/none"></i>
                    Most Populer
                </div>
                <div class="flex flex-col h-full p-6">
                    <div class="shrink">
                        <div class="mb-6">
                            <h3 class="flex items-center gap-2 font-bold text-[38px] text-gray-800">
                                <span>$18</span>
                                <span class="text-lg font-medium">/month</span>
                            </h3>
                        </div>
                        <div class="hidden mb-6">
                            <h3 class="flex items-center gap-2 font-bold text-[38px] text-gray-800">
                                <span>$48</span>
                                <span class="text-lg font-medium">/yearly</span>
                            </h3>
                        </div>
                    </div>

                    <div class="">
                        <h5 class="text-xl font-bold mb-2 text-gray-800">Business Plan</h5>
                        <p class="text-sm text-gray-700 font-medium">All the basics for starting
                            a new bissnesses.</p>
                    </div>

                    <hr class="border-gray-400 my-6">

                    <ul class="grow ">
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                <i class="uil uil-check"></i>
                            </span>
                            <p class="text-gray-900">10 users</p>
                        </li>
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                <i class="uil uil-check"></i>
                            </span>
                            <p class="text-gray-900">50 GB storage</p>
                        </li>
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                <i class="uil uil-check"></i>
                            </span>
                            <p class="text-gray-900">Front plan features</p>
                        </li>
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                <i class="uil uil-check"></i>
                            </span>
                            <p class="text-gray-900">100 apps</p>
                        </li>
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                <i class="uil uil-check"></i>
                            </span>
                            <p class="text-gray-900">Product support</p>
                        </li>
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                <i class="uil uil-check"></i>
                            </span>
                            <p class="text-gray-900">Advanced security</p>
                        </li>
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-red-500/20 text-red-500 text-sm font-bold">
                                <i class="uil uil-times"></i>
                            </span>
                            <p class="text-gray-900">Free subdomain</p>
                        </li>
                    </ul>

                    <div class="shrink mt-3">
                        <a href="#" class="w-full py-2 px-8 inline-flex justify-center items-center gap-2 rounded-md font-semibold border border-primary bg-primary text-white text-base focus:outline-none focus:ring-0 transition-all">
                            Continue
                        </a>
                    </div>
                </div>
            </div><!-- End grid-col -->

            <div class="bg-slate-50 rounded relative overflow-hidden shadow-md">
                <div class="flex flex-col h-full p-6">
                    <div class="shrink">
                        <div class="mb-6">
                            <h3 class="flex items-center gap-2 font-bold text-[38px] text-gray-800"><span>$28</span> <span class="text-lg font-medium">/month</span></h3>
                        </div>
                        <div class="hidden mb-6">
                            <h3 class="flex items-center gap-2 font-bold text-[38px] text-gray-800"><span>$68</span> <span class="text-lg font-medium">/yearly</span></h3>
                        </div>
                    </div>

                    <div class="">
                        <h5 class="text-xl font-bold mb-2 text-gray-800">Exclusive Plan</h5>
                        <p class="text-sm text-gray-700 font-medium">All the basics for starting
                            a new bissnesses.</p>
                    </div>

                    <hr class="border-gray-400 my-6">

                    <ul class="grow ">
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                <i class="uil uil-check"></i>
                            </span>
                            <p class="text-gray-900">10 users</p>
                        </li>
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                <i class="uil uil-check"></i>
                            </span>
                            <p class="text-gray-900">50 GB storage</p>
                        </li>
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                <i class="uil uil-check"></i>
                            </span>
                            <p class="text-gray-900">Front plan features</p>
                        </li>
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                <i class="uil uil-check"></i>
                            </span>
                            <p class="text-gray-900">100 apps</p>
                        </li>
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                <i class="uil uil-check"></i>
                            </span>
                            <p class="text-gray-900">Product support</p>
                        </li>
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                <i class="uil uil-check"></i>
                            </span>
                            <p class="text-gray-900">Advanced security</p>
                        </li>
                        <li class="flex items-center gap-2 mb-4 font-medium text-base">
                            <span class="h-5 w-5 inline-flex items-center justify-center rounded-full bg-primary/20 text-primary text-sm font-bold">
                                <i class="uil uil-check"></i>
                            </span>
                            <p class="text-gray-900">Free subdomain</p>
                        </li>
                    </ul>

                    <div class="shrink mt-3">
                        <a href="#" class="w-full py-2 px-8 inline-flex justify-center items-center gap-2 rounded-md font-semibold border border-primary text-primary text-base focus:outline-none focus:ring-0 transition-all hover:bg-primary hover:text-white">
                            Continue
                        </a>
                    </div>
                </div>
            </div><!-- End grid-col -->

        </div><!-- Grid End -->
    </div><!-- Container End -->
</section>
<!-- pricing Section End -->

 <!-- Team Start -->
 <div id="team" class="py-24 bg-slate-50">
    <div class="container overflow-hidden">
        <div class="flex items-center justify-center mb-16">
            <div class="max-w-2xl text-center">
                <h5 class="capitalize text-lg  text-gray-800 font-medium mb-2">Our <span class="font-semibold text-primary">Team</span></h5>
                <h2 class="text-3xl/snug font-bold text-gray-800 mb-1">Meet our team</h2>
                <p class="text-base text-gray-600 mb-8">Nemo enim ipsam voluptatem that quia voluptas aut fugit </p>
            </div>
        </div>

        <div class="gap-2">
            <div class="py-12 -my-12 overflow-x-hidden">
                <div class="swiper feedback-swiper !overflow-visible max-w-full max-h-full">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide mb-12">
                            <div class="relative bg-white rounded-md h-full">
                                <div class="absolute -top-[20%] start-0 translate-x-4 h-24 bg-white p-2 rounded-md overflow-hidden">
                                    <img src="assets/images/avatars/img-7.png" alt="" class="rounded-md max-w-full max-h-full">
                                </div>

                                <div class="px-6 pb-6 pt-16">
                                    <p class="font-medium text-gray-500">@maxine</p>
                                    <h3 class="text-xl font-bold text-gray-800 mb-0.5">Maxine Gilmer</h3>
                                    <p class="font-medium text-gray-500 mb-4">Web designer</p>
                                    <p class="text-gray-500"> These alternatives to the classic Lorem Ipsum texts are often amusing and tell short, funny or nonsensical stories. .</p>
                                </div>
                            </div>
                        </div><!-- end swiper slider -->

                        <div class="swiper-slide mb-12">
                            <div class="relative bg-white rounded-md h-full">
                                <div class="absolute -top-[20%] start-0 translate-x-4 h-24 bg-white p-2 rounded-md overflow-hidden">
                                    <img src="assets/images/avatars/img-3.png" alt="" class="rounded-md max-w-full max-h-full">
                                </div>

                                <div class="px-6 pb-6 pt-16">
                                    <p class="font-medium text-gray-500">@michael</p>
                                    <h3 class="text-xl font-bold text-gray-800 mb-0.5">Michael Ellis</h3>
                                    <p class="font-medium text-gray-500 mb-4">UI/UX designer</p>
                                    <p class="text-gray-500">We all intend to plan ahead, but too often let the day-to-day minutia get in the way of making a calendar.</p>
                                </div>
                            </div>
                        </div><!-- end swiper slider -->

                        <div class="swiper-slide mb-12">
                            <div class="relative bg-white rounded-md h-full">
                                <div class="absolute -top-[20%] start-0 translate-x-4 h-24 bg-white p-2 rounded-md overflow-hidden">
                                    <img src="assets/images/avatars/img-8.png" alt="" class="rounded-md max-w-full max-h-full">
                                </div>

                                <div class="px-6 pb-6 pt-16">
                                    <p class="font-medium text-gray-500">@ruben</p>
                                    <h3 class="text-xl font-bold text-gray-800 mb-0.5">Ruben Gouse</h3>
                                    <p class="font-medium text-gray-500 mb-4">Web devloper</p>

                                    <p class="text-gray-500">These qualities can be combined perfectly natural. However, things like people look miserable.</p>
                                </div>
                            </div>
                        </div><!-- end swiper slider -->

                        <div class="swiper-slide mb-12">
                            <div class="relative bg-white rounded-md h-full">
                                <div class="absolute -top-[20%] start-0 translate-x-4 h-24 bg-white p-2 rounded-md overflow-hidden">
                                    <img src="assets/images/avatars/img-5.png" alt="" class="rounded-md max-w-full max-h-full">
                                </div>

                                <div class="px-6 pb-6 pt-16">
                                    <p class="font-medium text-gray-500">@francis</p>
                                    <h3 class="text-xl font-bold text-gray-800 mb-0.5">Francis Ibikunle</h3>
                                    <p class="font-medium text-gray-500 mb-4">Manager</p>

                                    <p class="text-gray-500">These alternatives to the classic Lorem Ipsum are often amusing and tell short, funny or nonsensical stories.</p>
                                </div>
                            </div>
                        </div><!-- end swiper slider -->
                    </div><!-- end swiper wrapper -->
                    <div class="swiper-pagination z-10 !-start-0"></div>
                </div><!-- end swiper -->
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


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
