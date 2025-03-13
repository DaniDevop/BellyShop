<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les produits</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-gray-100">

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
    <div style="padding-buttom:10px;">

    </div>
    <!-- Barre de recherche et filtres -->
    <div class="bg-white p-6 shadow rounded-lg mb-6">
        <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 md:space-x-4">
            <!-- Barre de recherche -->
            <input type="text" placeholder="Rechercher un produit..." class="w-full md:w-64 p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">

            <!-- Filtre par catégorie -->
            <select class="w-full md:w-64 p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                <option value="">Toutes les catégories</option>
                <option value="1">Électronique</option>
                <option value="2">Vêtements</option>
                <option value="3">Maison</option>
            </select>

            <!-- Filtre par prix -->
            <div class="flex space-x-4">
                <input type="number" placeholder="Prix min" class="w-24 p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                <input type="number" placeholder="Prix max" class="w-24 p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <!-- Tri -->
            <select class="w-full md:w-64 p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                <option value="price_asc">Prix (croissant)</option>
                <option value="price_desc">Prix (décroissant)</option>
                <option value="name_asc">Nom (A-Z)</option>
                <option value="name_desc">Nom (Z-A)</option>
            </select>
        </div>
    </div>

    <!-- Liste des produits -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6">
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

        <!-- Produit 5 -->
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-shadow">
            <img src="https://via.placeholder.com/300" alt="Produit 5" class="w-full h-48 object-cover rounded-lg">
            <h3 class="text-lg font-semibold mt-4">Produit 5</h3>
            <p class="text-gray-600">Description courte du produit.</p>
            <p class="text-xl font-bold mt-2">59,99 €</p>
            <button class="mt-4 w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                <i class="fas fa-cart-plus mr-2"></i>Ajouter au panier
            </button>
        </div>

        <!-- Produit 6 -->
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-shadow">
            <img src="https://via.placeholder.com/300" alt="Produit 6" class="w-full h-48 object-cover rounded-lg">
            <h3 class="text-lg font-semibold mt-4">Produit 6</h3>
            <p class="text-gray-600">Description courte du produit.</p>
            <p class="text-xl font-bold mt-2">69,99 €</p>
            <button class="mt-4 w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                <i class="fas fa-cart-plus mr-2"></i>Ajouter au panier
            </button>
        </div>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-6">
        <nav class="inline-flex rounded-md shadow">
            <a href="#" class="px-4 py-2 bg-white border rounded-l-lg hover:bg-gray-100">Précédent</a>
            <a href="#" class="px-4 py-2 bg-white border-t border-b hover:bg-gray-100">1</a>
            <a href="#" class="px-4 py-2 bg-white border-t border-b hover:bg-gray-100">2</a>
            <a href="#" class="px-4 py-2 bg-white border-t border-b hover:bg-gray-100">3</a>
            <a href="#" class="px-4 py-2 bg-white border rounded-r-lg hover:bg-gray-100">Suivant</a>
        </nav>
    </div>

    <!-- Notification (exemple) -->
    <div class="fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg">
        Produit ajouté au panier !
    </div>
</body>
</html>