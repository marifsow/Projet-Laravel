@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Liste des Employés</h1>
    <a href="{{ route('employes.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Ajouter un employé</a>

    @if (session('success'))
        <div class="mt-4 text-green-700 bg-green-100 p-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
        @foreach ($employes as $employe)
            <div class="bg-white shadow p-4 rounded">
                <img src="{{ asset('storage/' . $employe->image) }}" alt="Photo" class="h-32 w-full object-cover mb-2 rounded">
                <h2 class="text-xl font-semibold">{{ $employe->nom }}</h2>
                <p>Poste : {{ $employe->poste }}</p>
                <p>Date d'embauche : {{ $employe->date_embauche }}</p>

                <div class="mt-2 flex gap-2">
                    <a href="{{ route('employes.show', $employe->id) }}" class="text-blue-500">Voir</a>
                    <a href="{{ route('employes.edit', $employe->id) }}" class="text-yellow-500">Modifier</a>
                    <form action="{{ route('employes.destroy', $employe->id) }}" method="POST" onsubmit="return confirm('Supprimer ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Supprimer</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
