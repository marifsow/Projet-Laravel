<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ferme Moderne</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        body { font-family: 'Segoe UI', sans-serif; }
    </style>
</head>
<body class="bg-white text-green-900">

    <!-- En-tête -->
    <header class="bg-green-700 text-white p-6 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src="logo-ferme.png" alt="Logo Élevage Poule" class="w-24 h-24 rounded-full shadow">
                <h1 class="text-3xl font-bold">La Ferme de Samba</h1>
            </div>
            <nav class="space-x-4">
                <a href="#" class="hover:text-yellow-300">Accueil</a>
                <a href="#" class="hover:text-yellow-300">Liste des animaux</a>
                <a href="#" class="hover:text-yellow-300">Employés</a>
                <a href="#" class="hover:text-yellow-300">Authentification</a>
            </nav>
        </div>
    </header>

    <!-- Section Héros -->
    <section class="bg-yellow-100 py-16 text-center">
        <h2 class="text-4xl font-bold mb-4 text-green-800">Bienvenue à la Ferme Moderne</h2>
        <p class="text-lg text-green-700 max-w-xl mx-auto">Gérez vos animaux, employés et ressources agricoles facilement avec notre plateforme.</p>
    </section>

    <!-- Slider Animaux -->
    <section class="py-12 bg-white px-6">
        <h3 class="text-3xl font-bold text-green-700 mb-6 text-center">Nos Animaux</h3>
        <div class="swiper mySwiper mb-8">
            <div class="swiper-wrapper">
                @foreach ($animaux as $animal)
                    <div class="swiper-slide">
                        <div class="bg-green-100 rounded-2xl shadow-md p-6 w-96 flex flex-col items-center text-center">
                            <img src="poulet.jpg" alt="Animal" class="rounded mb-4 h-40 w-full object-cover">
                            <h4 class="text-xl font-semibold text-yellow-600">{{ $animal->nom }}</h4>
                            <p class="text-green-800">Espèce : {{ $animal->espece }}</p>
                            <p class="text-green-800">Âge : {{ $animal->age }} ans</p>
                            <span class="text-sm text-white bg-green-600 px-3 py-1 mt-2 rounded-full">
                                {{ $animal->etat }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next text-green-700"></div>
            <div class="swiper-button-prev text-green-700"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>


   <!-- Slider Employés -->
   <section class="py-12 bg-yellow-50 px-6">
    <h3 class="text-3xl font-bold text-green-700 mb-6 text-center">Nos Employés</h3>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-green-600 text-white">
                <tr>
                    <th class="py-3 px-6 text-left">Nom</th>
                    <th class="py-3 px-6 text-left">Poste</th>
                    <th class="py-3 px-6 text-left">Date d'embauche</th>
                </tr>
            </thead>
            <tbody class="text-green-800">
                @foreach ($employes as $employe)
                    <tr class="border-b border-green-200 hover:bg-green-50">
                        <td class="py-3 px-6">{{ $employe->nom }}</td>
                        <td class="py-3 px-6">{{ $employe->poste }}</td>
                        <td class="py-3 px-6">{{ $employe->date_embauche }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>





    <!-- Moments phares -->
    <section class="py-12 bg-yellow-50 px-6">
        <h3 class="text-3xl font-bold text-green-700 mb-6 text-center"> Moments phares</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <img src="6.jpg" alt="Moment 1" class="w-full h-60 object-cover rounded shadow">
            <img src="5.jpg" alt="Moment 2" class="w-full h-60 object-cover rounded shadow">
            <img src="téléchargement (1).jpg" alt="Moment 3" class="w-full h-60 object-cover rounded shadow">
        </div>
    </section>




    <!-- Contact / Adresse -->
    <section class="py-12 bg-green-100 px-6">
        <h3 class="text-3xl font-bold text-green-800 mb-4 text-center">📬 Contact & Adresse</h3>
        <div class="max-w-xl mx-auto text-green-800 text-center">
            <p><strong>Adresse :</strong> Rufisque</p>
            <p><strong>Téléphone :</strong> +221 78 106 51 98</p>
            <p><strong>Email :</strong> marif@gmail.com</p>
        </div>
    </section>

    <!-- Pied de page -->
    <footer class="bg-green-700 text-white py-6 text-center">
        <p>&copy; {{ date('Y') }} Ferme Moderne. Tous droits réservés.</p>
    </footer>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Swiper config -->
    <script>
        const sliders = document.querySelectorAll('.mySwiper');
        sliders.forEach((el) => {
            new Swiper(el, {
                slidesPerView: 3,
                spaceBetween: 20,
                loop: true,
                pagination: {
                    el: el.querySelector('.swiper-pagination'),
                    clickable: true,
                },
                navigation: {
                    nextEl: el.querySelector('.swiper-button-next'),
                    prevEl: el.querySelector('.swiper-button-prev'),
                },
                breakpoints: {
                    1024: { slidesPerView: 3 },
                    768: { slidesPerView: 2 },
                    640: { slidesPerView: 1 },
                }
            });
        });
    </script>
</body>
</html>
