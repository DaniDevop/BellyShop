<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique des commandes - MaBoutique</title>
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
        <h1 class="text-3xl font-bold mb-6">Historique des commandes</h1>

        <!-- Liste des commandes -->
        <div class="bg-white p-6 rounded-lg shadow">
            <!-- Commande 1 -->
            <div class="border-b pb-4 mb-4">
                <!-- En-tête de la commande -->
                <div class="flex justify-between items-center mb-4">
                    <div>
                        <h2 class="text-xl font-bold">Commande #12345</h2>
                        <p class="text-gray-600">Date: 25/10/2023</p>
                    </div>
                    <div>
                        <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">Livrée</span>
                    </div>
                </div>

                <!-- Liste des produits -->
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <p class="text-gray-700">Produit 1 x 2</p>
                        <p class="text-gray-700">39,98 €</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="text-gray-700">Produit 2 x 1</p>
                        <p class="text-gray-700">19,99 €</p>
                    </div>
                </div>

                <!-- Total de la commande -->
                <div class="flex justify-between border-t pt-4 mt-4">
                    <p class="text-lg font-bold">Total</p>
                    <p class="text-lg font-bold">59,97 €</p>
                </div>
            </div>

            <!-- Commande 2 -->
            <div class="border-b pb-4 mb-4">
                <!-- En-tête de la commande -->
                <div class="flex justify-between items-center mb-4">
                    <div>
                        <h2 class="text-xl font-bold">Commande #12346</h2>
                        <p class="text-gray-600">Date: 20/10/2023</p>
                    </div>
                    <div>
                        <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-sm">En cours</span>
                    </div>
                </div>

                <!-- Liste des produits -->
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <p class="text-gray-700">Produit 3 x 3</p>
                        <p class="text-gray-700">89,97 €</p>
                    </div>
                </div>

                <!-- Total de la commande -->
                <div class="flex justify-between border-t pt-4 mt-4">
                    <p class="text-lg font-bold">Total</p>
                    <p class="text-lg font-bold">89,97 €</p>
                </div>
            </div>

            <!-- Commande 3 -->
            <div class="pb-4">
                <!-- En-tête de la commande -->
                <div class="flex justify-between items-center mb-4">
                    <div>
                        <h2 class="text-xl font-bold">Commande #12347</h2>
                        <p class="text-gray-600">Date: 15/10/2023</p>
                    </div>
                    <div>
                        <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm">Annulée</span>
                    </div>
                </div>

                <!-- Liste des produits -->
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <p class="text-gray-700">Produit 4 x 1</p>
                        <p class="text-gray-700">49,99 €</p>
                    </div>
                </div>

                <!-- Total de la commande -->
                <div class="flex justify-between border-t pt-4 mt-4">
                    <p class="text-lg font-bold">Total</p>
                    <p class="text-lg font-bold">49,99 €</p>
                </div>
            </div>
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