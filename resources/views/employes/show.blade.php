@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 max-w-xl">
    <h1 class="text-3xl font-bold mb-6">{{ $employe->nom }}</h1>

    <div class="bg-white shadow rounded p-6">
        <img src="{{ asset('storage/' . $employe->image) }}" alt="Photo" class="w-full h-64 object-cover mb-4 rounded">
        <p><strong>Poste :</strong> {{ $employe->poste }}</p>
        <p><strong>Date d'embauche :</strong> {{ $employe->date_embauche }}</p>
        <a href="{{ route('employes.index') }}" class="inline-block mt-4 text-green-600">← Retour à la liste</a>
    </div>
</div>
@endsection
