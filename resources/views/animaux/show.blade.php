@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-2xl font-bold mb-4">{{ $animal->nom }}</h2>

    <p><strong>Espèce :</strong> {{ $animal->espece }}</p>
    <p><strong>Âge :</strong> {{ $animal->age }} ans</p>
    <p><strong>État :</strong> {{ $animal->etat }}</p>

    <img src="{{ asset('storage/' . $animal->image) }}" class="mt-4 w-60 h-60 object-cover rounded">

    <a href="{{ route('animaux.index') }}" class="inline-block mt-4 text-green-600">← Retour</a>
</div>
@endsection
