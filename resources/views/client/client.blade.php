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
    @include('client.layout.sidebar')


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
    @include('client.layout.footer')

</body>
</html>