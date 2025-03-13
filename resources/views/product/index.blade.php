<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-gray-100">

    <div class="flex h-screen">
        @include('templates.sidebar')

        <div class="flex-1 ml-64 p-6">
            <header class="bg-white p-4 shadow rounded-lg flex justify-between items-center">
                <h1 class="text-2xl font-semibold">Liste des Produits</h1>
                <a href="{{ route('logout.user') }}">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-sign-out-alt mr-2"></i>Déconnexion
                    </button>
                </a>
            </header>

            <!-- Barre de recherche et bouton Ajouter -->
            

            <!-- Tableau des produits -->
            <div class="mt-6 bg-white p-6 rounded-lg shadow">
                <livewire:list-product-livewire/>
            </div>
        </div>
    </div>
</body>
</html>