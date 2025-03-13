<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier - MaBoutique</title>
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

    <!-- Contenu principal -->
    <main class="container mx-auto px-6 py-8">
        <h1 class="text-3xl font-bold mb-6">Votre Panier</h1>

        <!-- Liste des produits dans le panier -->
        <div class="bg-white p-6 rounded-lg shadow">
            <!-- Produit 1 -->
            <div class="flex flex-col md:flex-row items-center justify-between border-b pb-4 mb-4">
                <!-- Image et nom du produit -->
                <div class="flex items-center space-x-4">
                    <img src="https://via.placeholder.com/100" alt="Produit 1" class="w-20 h-20 object-cover rounded-lg">
                    <div>
                        <h3 class="text-lg font-semibold">Produit 1</h3>
                        <p class="text-gray-600">Description courte du produit.</p>
                    </div>
                </div>

                <!-- Quantité et prix -->
                <div class="flex items-center space-x-6 mt-4 md:mt-0">
                    <!-- Quantité -->
                    <div class="flex items-center space-x-2">
                        <button class="text-gray-600 hover:text-blue-600">
                            <i class="fas fa-minus"></i>
                        </button>
                        <input type="number" value="1" class="w-16 p-2 border rounded-lg text-center">
                        <button class="text-gray-600 hover:text-blue-600">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>

                    <!-- Prix -->
                    <p class="text-xl font-bold">19,99 €</p>

                    <!-- Bouton Supprimer -->
                    <button class="text-red-500 hover:text-red-700">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>

            <!-- Produit 2 -->
            <div class="flex flex-col md:flex-row items-center justify-between border-b pb-4 mb-4">
                <!-- Image et nom du produit -->
                <div class="flex items-center space-x-4">
                    <img src="https://via.placeholder.com/100" alt="Produit 2" class="w-20 h-20 object-cover rounded-lg">
                    <div>
                        <h3 class="text-lg font-semibold">Produit 2</h3>
                        <p class="text-gray-600">Description courte du produit.</p>
                    </div>
                </div>

                <!-- Quantité et prix -->
                <div class="flex items-center space-x-6 mt-4 md:mt-0">
                    <!-- Quantité -->
                    <div class="flex items-center space-x-2">
                        <button class="text-gray-600 hover:text-blue-600">
                            <i class="fas fa-minus"></i>
                        </button>
                        <input type="number" value="2" class="w-16 p-2 border rounded-lg text-center">
                        <button class="text-gray-600 hover:text-blue-600">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>

                    <!-- Prix -->
                    <p class="text-xl font-bold">39,98 €</p>

                    <!-- Bouton Supprimer -->
                    <button class="text-red-500 hover:text-red-700">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Résumé de la commande -->
        <div class="bg-white p-6 rounded-lg shadow mt-6">
            <h2 class="text-2xl font-bold mb-4">Résumé de la commande</h2>

            <!-- Sous-total -->
            <div class="flex justify-between mb-2">
                <p class="text-gray-600">Sous-total</p>
                <p class="text-gray-800 font-semibold">59,97 €</p>
            </div>

            <!-- Livraison -->
            <div class="flex justify-between mb-2">
                <p class="text-gray-600">Livraison</p>
                <p class="text-gray-800 font-semibold">5,00 €</p>
            </div>

            <!-- Total -->
            <div class="flex justify-between border-t pt-4">
                <p class="text-xl font-bold">Total</p>
                <p class="text-xl font-bold">64,97 €</p>
            </div>

            <!-- Bouton Passer la commande -->
            <button class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg mt-6 hover:bg-blue-700 transition-colors">
                Passer la commande
            </button>
        </div>
    </main>

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