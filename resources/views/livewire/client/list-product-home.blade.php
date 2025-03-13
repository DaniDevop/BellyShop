<div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($products as $product)
            <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-shadow">
                <!-- Image du produit -->
                <img src="{{ asset('storage/'.$product->image_first) }}" alt="{{ $product->designation }}" class="w-full h-48 object-cover rounded-lg">

                <!-- Nom du produit -->
                <h3 class="text-lg font-semibold mt-4">{{ $product->designation }}</h3>

                <!-- Description du produit -->
                <p class="text-gray-600">{{ $product->description }}</p>

                <!-- Prix du produit -->
                <p class="text-xl font-bold mt-2">{{ $product->price_vente }} €</p>

                <!-- Boutons d'action -->
                <div class="mt-4 flex justify-between items-center">
                    <!-- Bouton Ajouter au panier -->
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700" wire:click="addProductToPanier({{ $product->id }})">
                        <i class="fas fa-cart-plus mr-2"></i>Ajouter
                    </button>

                    <!-- Icône de détails -->
                    <a href="{{ route('client.product.details', $product->id) }}" class="text-gray-600 hover:text-blue-600">
                        <i class="fas fa-eye"></i> <!-- Icône œil -->
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>