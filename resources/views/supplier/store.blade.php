<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un fournisseur</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="flex h-screen">
        @include('templates.sidebar')

        <div class="flex-1 ml-64 p-6">
            <header class="bg-white p-4 shadow rounded-lg flex justify-between items-center">
                <h1 class="text-2xl font-semibold">Formulaire d ajout de fournisseur</h1>
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
        <h2 class="text-2xl font-bold mb-6 text-center">Ajouter un Fournisseur</h2>

        <!-- Formulaire -->
        <form action="{{route('supplier.add')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Grille pour aligner les champs en 2 colonnes -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Nom</label>
                                @error('name')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    <input type="text" name="name" class="w-full p-3 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" placeholder="Nom du fournisseur" value="{{old('name')}}" required>
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Email</label>
                                    @error('email')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                 @enderror
                    <input type="email" name="email" class="w-full p-3 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" placeholder="Email" value="{{old('email')}}" required>
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Téléphone</label>
                                        @error('tel')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                    <input type="text" name="tel" class="w-full p-3 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" placeholder="Téléphone" value="{{old('tel')}}" required>
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Entreprise</label>
                                @error('entreprise_name')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
                    <input type="text" name="entreprise_name" class="w-full p-3 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" placeholder="Nom de l'entreprise" value="{{old('entreprise_name')}}" required>
                </div>
            </div>

            <div class="mt-4">
                            @error('adresse')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
                <label class="block text-gray-700 font-semibold mb-1">Adresse</label>
                <textarea name="adresse" class="w-full p-3 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" placeholder="Adresse" value="{{old('adresse')}}" required></textarea>
            </div>

            <div class="mt-4">
                <label class="block text-gray-700 font-semibold mb-1">Photo de Profil</label>
                <input type="file" name="profile" value="{{old('profile')}}" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <!-- Boutons -->
            <div class="flex justify-between mt-6">
                <a href="/supplier-list" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Retour</a>
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Ajouter</button>
            </div>
        </form>
        
            </div>
        </div>
    </div>
</body>
</html>
