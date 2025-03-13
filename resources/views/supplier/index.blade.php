<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Fournisseurs</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles

</head>
<body class="bg-gray-100">

    <div class="flex h-screen">
        @include('templates.sidebar')

        <div class="flex-1 ml-64 p-6">
            <header class="bg-white p-4 shadow rounded-lg flex justify-between items-center">
                <h1 class="text-2xl font-semibold">Liste des Fournisseurs</h1>
                <a href="{{route('logout.user')}}">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg">Déconnexion</button>
                </a>
            </header>

            <!-- Bouton Ajouter Fournisseur -->
            <div class="mt-6">
                <a href="{{route('supplier.store')}}">
                <button class="bg-green-500 text-white px-4 py-2 rounded-lg shadow hover:bg-green-600" data-bs-toggle="modal" data-bs-target="#ajoutFournisseurModal">
                    + Ajouter un Fournisseur
                    
                </button>
                </a>
            </div>

            <!-- Tableau des Fournisseurs -->
            <div class="mt-6 bg-white p-5 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-4">Liste des Fournisseurs</h2>
                
                <livewire:supply-data/>
                
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>
