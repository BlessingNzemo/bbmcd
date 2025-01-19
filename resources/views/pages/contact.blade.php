@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<!-- Hero Section -->
<section class="pt-28 pb-16 bg-gradient-to-r from-blue-100 to-blue-50">
    <div class="container px-4">
        <div class="max-w-2xl mx-auto text-center">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Contactez-nous</h1>
            <p class="text-lg text-gray-600">Notre équipe est à votre écoute</p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-16">
    <div class="container px-4">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Contact Form -->
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Envoyez-nous un message</h2>

                @if(session('success'))
                    <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-6">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-gray-700 mb-2">Nom</label>
                            <input type="text" name="name" class="form-input w-full" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Email</label>
                            <input type="email" name="email" class="form-input w-full" required>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 mb-2">Sujet</label>
                        <input type="text" name="subject" class="form-input w-full" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 mb-2">Message</label>
                        <textarea name="message" rows="5" class="form-textarea w-full" required></textarea>
                    </div>
                    <button type="submit" class="btn-primary w-full">Envoyer</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Informations de contact</h2>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <span class="h-12 w-12 bg-primary/20 rounded-lg flex items-center justify-center">
                            <i class="uil uil-phone text-2xl text-primary"></i>
                        </span>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1">Téléphone</h3>
                            <p class="text-gray-600">+33 1 23 45 67 89</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <span class="h-12 w-12 bg-primary/20 rounded-lg flex items-center justify-center">
                            <i class="uil uil-envelope text-2xl text-primary"></i>
                        </span>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1">Email</h3>
                            <p class="text-gray-600">contact@example.com</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <span class="h-12 w-12 bg-primary/20 rounded-lg flex items-center justify-center">
                            <i class="uil uil-map-marker text-2xl text-primary"></i>
                        </span>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1">Adresse</h3>
                            <p class="text-gray-600">123 Rue Example, 75000 Paris</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-16 bg-gray-50">
    <div class="container px-4">
        <div class="h-96">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!..."
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>
@endsection
