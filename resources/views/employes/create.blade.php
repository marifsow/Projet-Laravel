@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 max-w-xl">
    <h1 class="text-3xl font-bold mb-6">Ajouter un Employé</h1>

    <form action="{{ route('employes.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
            <label>Nom :</label>
            <input type="text" name="nom" class="w-full border px-4 py-2" required>
        </div>
        <div>
            <label>Poste :</label>
            <input type="text" name="poste" class="w-full border px-4 py-2" required>
        </div>
        <div>
            <label>Date d'embauche :</label>
            <input type="date" name="date_embauche" class="w-full border px-4 py-2" required>
        </div>
        <div>
            <label>Image :</label>
            <input type="file" name="image" class="w-full">
        </div>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Enregistrer</button>
    </form>
</div>
@endsection
