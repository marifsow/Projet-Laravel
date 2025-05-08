@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 max-w-xl">
    <h1 class="text-3xl font-bold mb-6">Modifier Employé</h1>

    <form action="{{ route('employes.update', $employe->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label>Nom :</label>
            <input type="text" name="nom" value="{{ $employe->nom }}" class="w-full border px-4 py-2" required>
        </div>
        <div>
            <label>Poste :</label>
            <input type="text" name="poste" value="{{ $employe->poste }}" class="w-full border px-4 py-2" required>
        </div>
        <div>
            <label>Date d'embauche :</label>
            <input type="date" name="date_embauche" value="{{ $employe->date_embauche }}" class="w-full border px-4 py-2" required>
        </div>
        <div>
            <label>Image :</label>
            <input type="file" name="image" class="w-full">
        </div>
        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection
