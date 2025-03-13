<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Gestion de Stock</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="flex h-screen">
        
            @include('templates.sidebar')
        <!-- Main Content -->
        <div class="flex-1 ml-64 p-6">
            <!-- Header -->
            <header class="bg-white p-4 shadow rounded-lg flex justify-between items-center">
                <h1 class="text-2xl font-semibold">Tableau de Bord</h1>
                <a href="{{route('logout.user')}}">
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg">Déconnexion</button>
                </a>
            </header>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <div class="bg-white p-5 rounded-lg shadow flex justify-between items-center">
                    <div>
                        <h3 class="text-gray-500">Produits</h3>
                        <p class="text-2xl font-bold">120</p>
                    </div>
                    <span class="text-blue-500 text-3xl">📦</span>
                </div>
                <div class="bg-white p-5 rounded-lg shadow flex justify-between items-center">
                    <div>
                        <h3 class="text-gray-500">Commandes</h3>
                        <p class="text-2xl font-bold">45</p>
                    </div>
                    <span class="text-green-500 text-3xl">🛒</span>
                </div>
                <div class="bg-white p-5 rounded-lg shadow flex justify-between items-center">
                    <div>
                        <h3 class="text-gray-500">Fournisseurs</h3>
                        <p class="text-2xl font-bold">15</p>
                    </div>
                    <span class="text-yellow-500 text-3xl">🏭</span>
                </div>
            </div>

            <!-- Stock Table -->
            <div class="mt-6 bg-white p-5 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-4">Liste des Produits</h2>
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="p-3">Produit</th>
                            <th class="p-3">Catégorie</th>
                            <th class="p-3">Quantité</th>
                            <th class="p-3">Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t">
                            <td class="p-3">Guitare</td>
                            <td class="p-3">Instruments</td>
                            <td class="p-3">30</td>
                            <td class="p-3">250€</td>
                        </tr>
                        <tr class="border-t">
                            <td class="p-3">Casque Audio</td>
                            <td class="p-3">Accessoires</td>
                            <td class="p-3">50</td>
                            <td class="p-3">75€</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
