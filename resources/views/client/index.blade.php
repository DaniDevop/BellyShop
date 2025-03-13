<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur notre boutique en ligne</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo -->
            <div class="text-2xl font-bold text-blue-600">
                <a href="/">MaBoutique</a>
            </div>

            <!-- Barre de recherche -->
            <div class="w-1/3">
                <input type="text" placeholder="Rechercher un produit..." class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <!-- Menu -->
            <nav class="flex space-x-6">
                <a href="/categories" class="text-gray-700 hover:text-blue-600">Catégories</a>
                <a href="/promotions" class="text-gray-700 hover:text-blue-600">Promotions</a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600">Contact</a>
            </nav>

            <!-- Icônes Panier et Compte -->
            <div class="flex space-x-4">
                <a href="/cart" class="text-gray-700 hover:text-blue-600">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="ml-1">Panier (3)</span>
                </a>
                <a href="/account" class="text-gray-700 hover:text-blue-600">
                    <i class="fas fa-user"></i>
                    <span class="ml-1">Mon compte</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Bannière promotionnelle -->
    <div class="bg-blue-600 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold">Profitez de nos offres spéciales !</h2>
            <p class="mt-2">Jusqu'à 50% de réduction sur une sélection de produits.</p>
            <a href="" class="mt-4 inline-block bg-white text-blue-600 px-6 py-2 rounded-lg hover:bg-gray-100">Voir les offres</a>
        </div>
    </div>

    <!-- Liste des produits -->
    <div class="container mx-auto px-6 py-8">
        <h2 class="text-2xl font-bold mb-6">Produits en vedette</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Produit 1 -->
            <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-shadow">
                <img src="https://via.placeholder.com/300" alt="Produit 1" class="w-full h-48 object-cover rounded-lg">
                <h3 class="text-lg font-semibold mt-4">Produit 1</h3>
                <p class="text-gray-600">Description courte du produit.</p>
                <p class="text-xl font-bold mt-2">19,99 €</p>
                <button class="mt-4 w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    <i class="fas fa-cart-plus mr-2"></i>Ajouter au panier
                </button>
            </div>

            <!-- Produit 2 -->
            <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-shadow">
                <img src="https://via.placeholder.com/300" alt="Produit 2" class="w-full h-48 object-cover rounded-lg">
                <h3 class="text-lg font-semibold mt-4">Produit 2</h3>
                <p class="text-gray-600">Description courte du produit.</p>
                <p class="text-xl font-bold mt-2">29,99 €</p>
                <button class="mt-4 w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    <i class="fas fa-cart-plus mr-2"></i>Ajouter au panier
                </button>
            </div>

            <!-- Produit 3 -->
            <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-shadow">
                <img src="https://via.placeholder.com/300" alt="Produit 3" class="w-full h-48 object-cover rounded-lg">
                <h3 class="text-lg font-semibold mt-4">Produit 3</h3>
                <p class="text-gray-600">Description courte du produit.</p>
                <p class="text-xl font-bold mt-2">39,99 €</p>
                <button class="mt-4 w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    <i class="fas fa-cart-plus mr-2"></i>Ajouter au panier
                </button>
            </div>

            <!-- Produit 4 -->
            <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-shadow">
                <img src="https://via.placeholder.com/300" alt="Produit 4" class="w-full h-48 object-cover rounded-lg">
                <h3 class="text-lg font-semibold mt-4">Produit 4</h3>
                <p class="text-gray-600">Description courte du produit.</p>
                <p class="text-xl font-bold mt-2">49,99 €</p>
                <button class="mt-4 w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    <i class="fas fa-cart-plus mr-2"></i>Ajouter au panier
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white shadow mt-8">
        <div class="container mx-auto px-6 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Informations de contact -->
                <div>
                    <h3 class="text-lg font-bold">Contactez-nous</h3>
                    <p class="mt-2 text-gray-600">Email: contact@maboutique.com</p>
                    <p class="mt-2 text-gray-600">Téléphone: +33 1 23 45 67 89</p>
                </div>

                <!-- Liens utiles -->
                <div>
                    <h3 class="text-lg font-bold">Liens utiles</h3>
                    <ul class="mt-2">
                        <li><a href="/faq" class="text-gray-600 hover:text-blue-600">FAQ</a></li>
                        <li><a href="/returns" class="text-gray-600 hover:text-blue-600">Politique de retour</a></li>
                        <li><a href="/privacy" class="text-gray-600 hover:text-blue-600">Confidentialité</a></li>
                    </ul>
                </div>

                <!-- Réseaux sociaux -->
                <div>
                    <h3 class="text-lg font-bold">Suivez-nous</h3>
                    <div class="mt-2 flex space-x-4">
                        <a href="#" class="text-gray-600 hover:text-blue-600"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-600 hover:text-blue-600"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-600 hover:text-blue-600"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>