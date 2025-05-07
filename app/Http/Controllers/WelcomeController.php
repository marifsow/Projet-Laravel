<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Employe;

class WelcomeController extends Controller
{
    public function accueil()
    {
        $animaux = Animal::all();
        $employes = Employe::all();

        return view('welcome', compact('animaux', 'employes'));
    }
}
