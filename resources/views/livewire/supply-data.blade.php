<div>
    <!-- Barre de recherche -->
    <div class="mb-4">
        <input type="text" wire:model.live.debounce.500ms="search" placeholder="Recherche..." 
               class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-700">
    </div>

    <!-- Tableau -->
    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="p-3">Nom</th>
                <th class="p-3">Email</th>
                <th class="p-3">Téléphone</th>
                <th class="p-3">Entreprise</th>
                <th class="p-3">Adresse</th>
                <th class="p-3 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $supplier)
                <tr class="border-t hover:bg-gray-100">
                    <!-- Nom -->
                    <td class="p-3 flex items-center">
                        @if($editId === $supplier->id)
                            <input type="text" wire:model="name" class="w-full p-1 border rounded">
                        @else
                            <img src="{{ asset('storage/'.$supplier->profile) }}" alt="Profile" class="w-10 h-10 rounded-full mr-2">
                            {{ $supplier->name }}
                        @endif
                    </td>

                    <!-- Email -->
                    <td class="p-3">
                        @if($editId === $supplier->id)
                            <input type="email" wire:model="email" class="w-full p-1 border rounded">
                        @else
                            {{ $supplier->email }}
                        @endif
                    </td>

                    <!-- Téléphone -->
                    <td class="p-3">
                        @if($editId === $supplier->id)
                            <input type="text" wire:model="tel" class="w-full p-1 border rounded">
                        @else
                            {{ $supplier->tel }}
                        @endif
                    </td>

                    <!-- Entreprise -->
                    <td class="p-3">
                        @if($editId === $supplier->id)
                            <input type="text" wire:model="entreprise_name" class="w-full p-1 border rounded">
                        @else
                            {{ $supplier->entreprise_name }}
                        @endif
                    </td>

                    <!-- Adresse -->
                    <td class="p-3">
                        @if($editId === $supplier->id)
                            <input type="text" wire:model="adresse" class="w-full p-1 border rounded">
                        @else
                            {{ $supplier->adresse }}
                        @endif
                    </td>

                    <!-- Actions -->
                    <td class="p-3 flex justify-center space-x-2">
    @if($editId === $supplier->id)
        <!-- Icône "Enregistrer" (check) -->
        <button wire:click="update" class="text-green-500 hover:text-green-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Icône "Annuler" (x) -->
        <button wire:click="cancelEdit" class="text-red-500 hover:text-red-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
    @else
        <!-- Icône "Modifier" (pencil) -->
        <button wire:click="edit({{ $supplier->id }})" class="text-blue-500 hover:text-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
            </svg>
        </button>

        <!-- Icône "Supprimer" (trash) -->
        <form action="" method="POST" onsubmit="return confirm('Supprimer ce fournisseur ?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 hover:text-red-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
            </button>
        </form>
    @endif
</td>

                    
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $suppliers->links() }}
    </div>
</div>