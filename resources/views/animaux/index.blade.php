@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-2xl font-bold mb-4">Liste des animaux</h2>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('animaux.create') }}" class="bg-green-600 text-white px-4 py-2 rounded mb-4 inline-block">Ajouter un animal</a>

    <table class="min-w-full table-auto border-collapse">
        <thead class="bg-green-600 text-white">
            <tr>
                <th class="px-4 py-2">Nom</th>
                <th class="px-4 py-2">Espèce</th>
                <th class="px-4 py-2">Âge</th>
                <th class="px-4 py-2">État</th>
                <th class="px-4 py-2">Image</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($animaux as $animal)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $animal->nom }}</td>
                    <td class="px-4 py-2">{{ $animal->espece }}</td>
                    <td class="px-4 py-2">{{ $animal->age }} ans</td>
                    <td class="px-4 py-2">{{ $animal->etat }}</td>
                    <td class="px-4 py-2">
                        <img src="{{ asset('storage/' . $animal->image) }}" class="w-20 h-20 object-cover rounded">
                    </td>
                    <td class="px-4 py-2 flex gap-2">
                        <a href="{{ route('animaux.show', $animal->id) }}" class="text-blue-600">Voir</a>
                        <a href="{{ route('animaux.edit', $animal->id) }}" class="text-yellow-600">Modifier</a>
                        <form action="{{ route('animaux.destroy', $animal->id) }}" method="POST" onsubmit="return confirm('Supprimer cet animal ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
