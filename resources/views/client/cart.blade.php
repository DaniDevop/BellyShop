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
      @include('client.layout.sidebar')

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

    @include('client.layout.footer')
    
</body>
</html>