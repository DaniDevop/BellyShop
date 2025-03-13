<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Produit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-gray-100">

    <div class="flex h-screen">
        @include('templates.sidebar')

        <div class="flex-1 ml-64 p-6">
            <header class="bg-white p-4 shadow rounded-lg flex justify-between items-center">
                <h1 class="text-2xl font-semibold">Formulaire d'ajout de Produit</h1>
                <a href="{{ route('logout.user') }}">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-sign-out-alt mr-2"></i>Déconnexion
                    </button>
                </a>
            </header>

            <!-- Formulaire -->
            <div class="mt-6 bg-white p-6 rounded-lg shadow">
                <h2 class="text-2xl font-bold mb-6 text-center">Ajouter un Produit</h2>

                <form action="{{ route('product.add.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Grille pour aligner les champs en 2 colonnes -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Désignation -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-1">Désignation</label>
                            @error('designation')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                            <input type="text" name="designation" class="w-full p-3 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" placeholder="Nom du Produit" value="{{ old('designation') }}" required>
                        </div>

                        <!-- Fournisseur -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-1">Fournisseur</label>
                            @error('supplier_id')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                            <select name="supplier_id" class="w-full p-3 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" required>
                                <option value="" disabled selected>Sélectionnez un fournisseur</option>
                                @foreach($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Prix d'achat -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-1">Prix d'achat</label>
                            @error('price_achat')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                            <input type="number" name="price_achat" class="w-full p-3 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" placeholder="Prix d'achat" min="1" value="{{ old('price_achat') }}" required>
                        </div>

                        <!-- Prix de vente -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-1">Prix de vente</label>
                            @error('price_vente')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                            <input type="number" name="price_vente" class="w-full p-3 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" placeholder="Prix de vente" min="1" value="{{ old('price_vente') }}" required>
                        </div>

                        <!-- Image du produit -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-1">Image du produit</label>
                            @error('profile')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                            <input type="file" name="image_first" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                        </div>

                        <!-- Seconde image -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-1">Seconde image</label>
                            @error('image_two')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                            <input type="file" name="image_two" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mt-6">
                        <label class="block text-gray-700 font-semibold mb-1">Description</label>
                        @error('description')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                        <textarea name="description" class="w-full p-3 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" placeholder="Description du produit" >{{ old('description') }}</textarea>
                    </div>

                    <!-- Boutons -->
                    <div class="flex justify-between mt-6">
                        <a href="/supplier-list" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                            <i class="fas fa-arrow-left mr-2"></i>Retour
                        </a>
                        <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                            <i class="fas fa-plus mr-2"></i>Ajouter
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>