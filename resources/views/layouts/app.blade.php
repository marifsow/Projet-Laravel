<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ferme Moderne</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-green-900">
    <!-- En-tête -->
    <header class="bg-green-700 text-white p-6 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">🐄 Ferme Moderne</h1>
            <nav class="space-x-4">
                <a href="{{ route('employes.index') }}" class="hover:text-yellow-300">Employés</a>
                <a href="#" class="hover:text-yellow-300">Animaux</a>
                <a href="#" class="hover:text-yellow-300">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Contenu -->
    <main class="py-8 px-4">
        @yield('content')
    </main>

    <!-- Pied de page -->
    <footer class="bg-green-700 text-white py-6 text-center">
        &copy; {{ date('Y') }} Ferme Moderne. Tous droits réservés.
    </footer>
</body>
</html>
