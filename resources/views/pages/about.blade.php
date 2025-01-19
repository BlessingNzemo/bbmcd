@extends('layouts.app')

@section('title', 'À propos')

@section('content')
<!-- Hero Section -->
<section class="pt-28 pb-16 bg-gradient-to-r from-blue-100 to-blue-50">
    <div class="container px-4">
        <div class="max-w-2xl mx-auto text-center">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">À propos de nous</h1>
            <p class="text-lg text-gray-600">Découvrez notre histoire et notre mission</p>
        </div>
    </div>
</section>

<!-- Story Section -->
<section class="py-16">
    <div class="container px-4">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <img src="{{ asset('assets/images/about.jpg') }}" alt="About Us" class="rounded-lg">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Notre Histoire</h2>
                <p class="text-gray-600 mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <p class="text-gray-600">
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-gray-50">
    <div class="container px-4">
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center">
                <h3 class="text-4xl font-bold text-primary mb-2">500+</h3>
                <p class="text-gray-600">Clients satisfaits</p>
            </div>
            <div class="text-center">
                <h3 class="text-4xl font-bold text-primary mb-2">150+</h3>
                <p class="text-gray-600">Projets réalisés</p>
            </div>
            <div class="text-center">
                <h3 class="text-4xl font-bold text-primary mb-2">50+</h3>
                <p class="text-gray-600">Experts</p>
            </div>
            <div class="text-center">
                <h3 class="text-4xl font-bold text-primary mb-2">10+</h3>
                <p class="text-gray-600">Années d'expérience</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-16">
    <div class="container px-4">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Notre Équipe</h2>
            <p class="text-gray-600">Des experts passionnés à votre service</p>
        </div>
        <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach($team as $member)
            <div class="text-center">
                <img src="{{ asset('assets/images/' . $member['image']) }}" alt="{{ $member['name'] }}" class="w-32 h-32 rounded-full mx-auto mb-4">
                <h4 class="text-xl font-bold text-gray-900 mb-1">{{ $member['name'] }}</h4>
                <p class="text-gray-600 mb-3">{{ $member['role'] }}</p>
                <div class="flex justify-center space-x-3">
                    <a href="{{ $member['social']['twitter'] }}" class="text-primary hover:text-primary-dark">
                        <i class="uil uil-twitter"></i>
                    </a>
                    <a href="{{ $member['social']['linkedin'] }}" class="text-primary hover:text-primary-dark">
                        <i class="uil uil-linkedin"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-16 bg-gray-50">
    <div class="container px-4">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Nos Valeurs</h2>
            <p class="text-gray-600">Ce qui nous guide au quotidien</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center p-6">
                <div class="h-16 w-16 bg-primary/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="uil uil-heart text-2xl text-primary"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Passion</h3>
                <p class="text-gray-600">Nous sommes passionnés par l'innovation</p>
            </div>
            <!-- Répéter pour autres valeurs -->
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16">
    <div class="container px-4">
        <div class="bg-primary rounded-2xl p-8 md:p-16 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Rejoignez notre équipe</h2>
            <p class="text-white/80 mb-8">Découvrez nos opportunités de carrière</p>
            <a href="#" class="inline-block px-6 py-3 bg-white text-primary rounded-lg font-medium hover:bg-gray-100">
                Voir les offres
            </a>
        </div>
    </div>
</section>
@endsection
