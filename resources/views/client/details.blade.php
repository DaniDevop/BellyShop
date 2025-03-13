<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du produit - MaBoutique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-gray-100">

    <!-- Header -->
    @include('client.layout.sidebar')


    <!-- Contenu principal -->
    <main class="container mx-auto px-6 py-8">
        <div class="bg-white p-6 rounded-lg shadow">
            <!-- Images du produit -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Image principale -->
                <div class="md:col-span-1">
                    <img src="{{ asset('storage/'.$product->image_first)}}" alt="Produit 1" class="w-full h-auto rounded-lg">
                </div>

                <!-- Galerie d'images -->
                <div class="grid grid-cols-3 gap-4">
                    <img src="{{ asset('storage/'.$product->image_first)}}" alt="Image 1" class="w-full h-24 object-cover rounded-lg cursor-pointer hover:opacity-75">
                    <img src="{{ asset('storage/'.$product->image_two)}}" alt="Image 2" class="w-full h-24 object-cover rounded-lg cursor-pointer hover:opacity-75">
                </div>
            </div>

            <!-- Détails du produit -->
            <div class="mt-6">
                <h1 class="text-3xl font-bold">{{$product->designation}}</h1>
                <p class="text-gray-600 mt-2">Catégorie: Électronique</p>
                <p class="text-2xl font-bold mt-4">{{$product->price_vente}} €</p>

                <!-- Description -->
                <div class="mt-6">
                    <h2 class="text-xl font-bold">Description</h2>
                    <p class="text-gray-700 mt-2">
                        {{$product->description}}
                    </p>
                </div>

                <!-- Caractéristiques -->
                <div class="mt-6">
                    
                </div>

                <!-- Boutons d'action -->
                <div class="mt-6 flex space-x-4">
                    <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fas fa-cart-plus mr-2"></i>Ajouter au panier
                    </button>
                    <button class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition-colors">
                        <i class="fas fa-shopping-bag mr-2"></i>Acheter maintenant
                    </button>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    @include('client.layout.footer')

</body>
</html>