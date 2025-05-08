@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-2xl font-bold mb-4">Ajouter un animal</h2>

    <form action="{{ route('animaux.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="nom" placeholder="Nom" class="block mb-2 w-full" required>
        <input type="text" name="espece" placeholder="Espèce" class="block mb-2 w-full" required>
        <input type="number" name="age" placeholder="Âge" class="block mb-2 w-full" required>
        <input type="text" name="etat" placeholder="État" class="block mb-2 w-full" required>
        <input type="file" name="image" class="block mb-4 w-full">

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Enregistrer</button>
    </form>
</div>
@endsection
