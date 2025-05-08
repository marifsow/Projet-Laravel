@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-2xl font-bold mb-4">Modifier un animal</h2>

    <form action="{{ route('animaux.update', $animal->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="text" name="nom" value="{{ $animal->nom }}" class="block mb-2 w-full" required>
        <input type="text" name="espece" value="{{ $animal->espece }}" class="block mb-2 w-full" required>
        <input type="number" name="age" value="{{ $animal->age }}" class="block mb-2 w-full" required>
        <input type="text" name="etat" value="{{ $animal->etat }}" class="block mb-2 w-full" required>

        <img src="{{ asset('storage/' . $animal->image) }}" class="w-20 h-20 object-cover mb-2 rounded">
        <input type="file" name="image" class="block mb-4 w-full">

        <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection
