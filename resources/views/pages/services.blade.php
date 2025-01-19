@extends('layouts.app')

@section('title', 'Nos Services')

@section('content')
<!-- Header Section -->
<section class="pt-28 pb-16 bg-gradient-to-r from-blue-100 to-blue-50">
    <div class="container px-4">
        <div class="text-center max-w-2xl mx-auto">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Nos Services</h1>
            <p class="text-lg text-gray-600">Des solutions innovantes pour votre entreprise</p>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="py-16">
    <div class="container px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $service)
            <div class="p-6 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-primary/20 rounded-lg flex items-center justify-center mb-4">
                    <i class="{{ $service['icon'] }} text-2xl text-primary"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $service['title'] }}</h3>
                <p class="text-gray-600">{{ $service['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-gray-50">
    <div class="container px-4">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Pourquoi choisir nos services ?</h2>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3">
                        <span class="h-6 w-6 bg-primary/20 rounded-full flex items-center justify-center">
                            <i class="uil uil-check text-primary"></i>
                        </span>
                        <span class="text-gray-700">Support technique 24/7</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="h-6 w-6 bg-primary/20 rounded-full flex items-center justify-center">
                            <i class="uil uil-check text-primary"></i>
                        </span>
                        <span class="text-gray-700">Solutions personnalisées</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="h-6 w-6 bg-primary/20 rounded-full flex items-center justify-center">
                            <i class="uil uil-check text-primary"></i>
                        </span>
                        <span class="text-gray-700">Expertise reconnue</span>
                    </li>
                </ul>
            </div>
            <div>
                <img src="{{ asset('assets/images/features.png') }}" alt="Features" class="w-full">
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16">
    <div class="container px-4">
        <div class="bg-primary rounded-2xl p-8 md:p-16 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Prêt à commencer ?</h2>
            <p class="text-white/80 mb-8">Contactez-nous pour discuter de vos besoins</p>
            <a href="{{ route('contact') }}" class="inline-block px-6 py-3 bg-white text-primary rounded-lg font-medium hover:bg-gray-100">
                Nous contacter
            </a>
        </div>
    </div>
</section>
@endsection
