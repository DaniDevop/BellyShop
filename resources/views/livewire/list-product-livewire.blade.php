<div>
    <!-- Barre de recherche -->
    <div class="mt-6 flex justify-between items-center mb-6">
        <input type="text" wire:model.live.debounce.500ms="search" placeholder="Rechercher un produit..." class="w-64 p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
        <a href="/product-store">
            <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                <i class="fas fa-plus mr-2"></i>Ajouter un produit
            </button>
        </a>
    </div>

    <!-- Tableau -->
    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="p-3">Image</th>
                <th class="p-3">Désignation</th>
                <th class="p-3">Prix d'achat</th>
                <th class="p-3">Prix de vente</th>
                <th class="p-3">Fournisseur</th>
                <th class="p-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr class="border-t hover:bg-gray-50">
                    <!-- Image -->
                    <td class="p-3">
                        <img src="{{ asset('storage/' . $product->profile) }}" alt="Image du produit" class="w-12 h-12 rounded-full object-cover">
                    </td>

                    <!-- Désignation -->
                    <td class="p-3">
                        @if($editId === $product->id)
                            <input type="text" wire:model="designation" class="w-full p-1 border rounded">
                        @else
                            {{ $product->designation }}
                        @endif
                    </td>

                    <!-- Prix d'achat -->
                    <td class="p-3">
                        @if($editId === $product->id)
                            <input type="number" wire:model="price_achat" class="w-full p-1 border rounded">
                        @else
                            {{ $product->price_achat }} €
                        @endif
                    </td>

                    <!-- Prix de vente -->
                    <td class="p-3">
                        @if($editId === $product->id)
                            <input type="number" wire:model="price_vente" class="w-full p-1 border rounded">
                        @else
                            {{ $product->price_vente }} €
                        @endif
                    </td>

                    <!-- Fournisseur -->
                    <td class="p-3">
                        @if($editId === $product->id)
                            <select wire:model="supplier_id" class="w-full p-1 border rounded">
                                @foreach($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                @endforeach
                            </select>
                        @else
                            {{ $product->supplier->name }}
                        @endif
                    </td>

                    <!-- Actions -->
                    <td class="p-3 flex space-x-2">
                        @if($editId === $product->id)
                            <!-- Enregistrer -->
                            <button wire:click="update" class="text-green-500 hover:text-green-700">
                                <i class="fas fa-check"></i>
                            </button>

                            <!-- Annuler -->
                            <button wire:click="cancelEdit" class="text-red-500 hover:text-red-700">
                                <i class="fas fa-times"></i>
                            </button>
                        @else
                            <!-- Modifier -->
                            <button wire:click="edit({{ $product->id }})" class="text-blue-500 hover:text-blue-700">
                                <i class="fas fa-edit"></i>
                            </button>

                            <!-- Supprimer -->
                            <form action="" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $products->links() }}
    </div>
</div>