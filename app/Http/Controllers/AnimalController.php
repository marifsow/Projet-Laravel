<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    // Afficher tous les animaux
    public function index()
    {
        $animaux = Animal::all(); // Récupérer tous les animaux
        return view('animaux.index', compact('animaux'));
    }

    // Afficher le formulaire de création
    public function create()
    {
        return view('animaux.create');
    }

    // Enregistrer un nouvel animal
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'espece' => 'required|string|max:255',
            'age' => 'required|integer',
            'etat' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Traitement de l'image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/animaux', $imageName);

        // Sauvegarde dans la base de données
        Animal::create([
            'nom' => $request->nom,
            'espece' => $request->espece,
            'age' => $request->age,
            'etat' => $request->etat,
            'image' => 'animaux/' . $imageName,
        ]);

        return redirect()->route('animaux.index')->with('success', 'Animal ajouté avec succès!');
    }

    // Afficher un animal spécifique
    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return view('animaux.show', compact('animal'));
    }

    // Afficher le formulaire d'édition
    public function edit($id)
    {
        $animal = Animal::findOrFail($id);
        return view('animaux.edit', compact('animal'));
    }

    // Mettre à jour un animal existant
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'espece' => 'required|string|max:255',
            'age' => 'required|integer',
            'etat' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $animal = Animal::findOrFail($id);

        // Si une nouvelle image est téléchargée, on la remplace
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/animaux', $imageName);
            $animal->image = 'animaux/' . $imageName;
        }

        // Mettre à jour les données
        $animal->update([
            'nom' => $request->nom,
            'espece' => $request->espece,
            'age' => $request->age,
            'etat' => $request->etat,
        ]);

        return redirect()->route('animaux.index')->with('success', 'Animal mis à jour avec succès!');
    }

    // Supprimer un animal
    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return redirect()->route('animaux.index')->with('success', 'Animal supprimé avec succès!');
    }
}
