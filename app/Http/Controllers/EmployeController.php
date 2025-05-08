<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{

    public function index()
    {
        $employes = Employe::all();
        return view('employes.index', compact('employes'));
    }

    
    public function create()
    {
        return view('employes.create');
    }

    // Enregistrer un nouvel employé
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'poste' => 'required|string|max:255',
            'date_embauche' => 'required|date',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Traitement de l'image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/employes', $imageName);

        // Sauvegarde dans la base de données
        Employe::create([
            'nom' => $request->nom,
            'poste' => $request->poste,
            'date_embauche' => $request->date_embauche,
            'image' => 'employes/' . $imageName,
        ]);

        return redirect()->route('employes.index')->with('success', 'Employé ajouté avec succès!');
    }

    // Afficher un employé spécifique
    public function show($id)
    {
        $employe = Employe::findOrFail($id);
        return view('employes.show', compact('employe'));
    }

    // Afficher le formulaire d'édition
    public function edit($id)
    {
        $employe = Employe::findOrFail($id);
        return view('employes.edit', compact('employe'));
    }

    // Mettre à jour un employé existant
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'poste' => 'required|string|max:255',
            'date_embauche' => 'required|date',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $employe = Employe::findOrFail($id);

        // Si une nouvelle image est téléchargée, on la remplace
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/employes', $imageName);
            $employe->image = 'employes/' . $imageName;
        }

        // Mettre à jour les données
        $employe->update([
            'nom' => $request->nom,
            'poste' => $request->poste,
            'date_embauche' => $request->date_embauche,
        ]);

        return redirect()->route('employes.index')->with('success', 'Employé mis à jour avec succès!');
    }

    // Supprimer un employé
    public function destroy($id)
    {
        $employe = Employe::findOrFail($id);
        $employe->delete();

        return redirect()->route('employes.index')->with('success', 'Employé supprimé avec succès!');
    }
}
