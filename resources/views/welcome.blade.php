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
                <a href="#" class="hover:text-yellow-300">Animaux</a>
                <a href="#" class="hover:text-yellow-300">Employés</a>
                <a href="#" class="hover:text-yellow-300">Contact</a>
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
        <h3 class="text-3xl font-bold text-green-700 mb-6">🐑 Nos Animaux</h3>
        <div class="swiper mySwiper mb-8">
            <div class="swiper-wrapper">
                @foreach ($animaux as $animal)
                    <div class="swiper-slide">
                        <div class="bg-green-100 rounded-2xl shadow-md p-6 w-96 h-80 flex flex-col justify-between">

                            <img src="poulet.jpg" alt="Animal" class="rounded mb-2">
                            <h4 class="text-xl font-semibold text-yellow-600">{{ $animal->nom }}</h4>
                            <p class="text-green-800">Espèce : {{ $animal->espece }}</p>
                            <p class="text-green-800">Âge : {{ $animal->age }} ans</p>
                            <span class="text-sm text-white bg-green-600 px-2 py-1 rounded-full self-start">
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
        <h3 class="text-3xl font-bold text-green-700 mb-6">👨‍🌾 Nos Employés</h3>
        <div class="swiper mySwiper mb-8">
            <div class="swiper-wrapper">
                @foreach ($employes as $employe)
                    <div class="swiper-slide">
                        <div class="bg-green-100 rounded-2xl shadow-md p-6 w-96 h-80 flex flex-col justify-between">

                           
                            <h4 class="text-xl font-semibold text-yellow-600">{{ $employe->nom }}</h4>
                            <p class="text-green-800">Poste : {{ $employe->poste }}</p>
                            <p class="text-green-800">Depuis : {{ $employe->date_embauche }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next text-green-700"></div>
            <div class="swiper-button-prev text-green-700"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Sponsors -->
    <section class="py-12 bg-white px-6">
        <h3 class="text-3xl font-bold text-green-700 mb-6 text-center">🤝 Nos Sponsors</h3>
        <div class="flex justify-center items-center gap-12 flex-wrap">
            <img src="https://via.placeholder.com/100x50" alt="Sponsor 1">
            <img src="https://via.placeholder.com/100x50" alt="Sponsor 2">
            <img src="https://via.placeholder.com/100x50" alt="Sponsor 3">
        </div>
    </section>

    <!-- Moments phares -->
    <section class="py-12 bg-yellow-50 px-6">
        <h3 class="text-3xl font-bold text-green-700 mb-6 text-center">📸 Moments phares</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <img src="téléchargement.jpg" alt="Moment 1" class="rounded shadow">
            <img src="images.jpg" alt="Moment 2" class="rounded shadow">
            <img src="téléchargement (1).jpg" alt="Moment 3" class="rounded shadow">
        </div>
    </section>

    <!-- Contact / Adresse -->
    <section class="py-12 bg-green-100 px-6">
        <h3 class="text-3xl font-bold text-green-800 mb-4 text-center">📬 Contact & Adresse</h3>
        <div class="max-w-xl mx-auto text-green-800 text-center">
            <p><strong>Adresse :</strong> Ferme Moderne, Route des champs, 12345 Ville</p>
            <p><strong>Téléphone :</strong> +33 1 23 45 67 89</p>
            <p><strong>Email :</strong> contact@fermemo.fr</p>
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
