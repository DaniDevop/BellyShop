<div>

<div class="bg-white p-6 shadow rounded-lg mb-6">
        <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 md:space-x-4">
            <!-- Barre de recherche -->
            <input type="text" placeholder="Rechercher un produit..." wire:model.live.debounce.500ms='search' class="w-full md:w-64 p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">

            <!-- Filtre par catégorie -->
            <select class="w-full md:w-64 p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                <option value="">Toutes les catégories</option>
                <option value="1">Électronique</option>
                <option value="2">Vêtements</option>
                <option value="3">Maison</option>
            </select>

            <!-- Filtre par prix -->
            <div class="flex space-x-4">
                <input type="number" placeholder="Prix min" class="w-24 p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                <input type="number" placeholder="Prix max" class="w-24 p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <!-- Tri -->
            <select class="w-full md:w-64 p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                <option value="price_asc">Prix (croissant)</option>
                <option value="price_desc">Prix (décroissant)</option>
                <option value="name_asc">Nom (A-Z)</option>
                <option value="name_desc">Nom (Z-A)</option>
            </select>
        </div>
    </div>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6">
        @foreach($products as $product)
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-shadow">
            <img src="{{asset('storage/'.$product->image_first)}}" alt="Produit 4" class="w-full h-48 object-cover rounded-lg">
            <h3 class="text-lg font-semibold mt-4"> {{$product->designation}} </h3>
            <p class="text-gray-600">{{$product->description}}</p>
            <p class="text-xl font-bold mt-2">{{$product->price_vente}} €</p>
            <button wire:click="addProductToPanier({{$product->id}})" class="mt-4 w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                <i class="fas fa-cart-plus mr-2"></i>Ajouter au panier
            </button>
        </div>
        @endforeach

       
    </div>

    <div class="flex justify-center mt-6">
        <nav class="inline-flex rounded-md shadow">
              {{$products->links()}}
        </nav>
    </div>
</div>
