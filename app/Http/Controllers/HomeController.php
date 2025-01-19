<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $features = [
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Analyse avancée'
            ],
            // Ajoutez d'autres fonctionnalités ici
        ];
        
        return view('home', compact('features'));
    }
}