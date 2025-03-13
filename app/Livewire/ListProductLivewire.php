<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Supplier;

class ListProductLivewire extends Component
{
    use WithPagination;

    public $search = '';
    public $editId = null; // ID du produit en cours d'édition
    public $designation, $price_achat, $price_vente, $description, $supplier_id; // Champs de formulaire

    // Activer le mode édition pour un produit
    public function edit($id)
    {
        $this->editId = $id;
        $product = Product::find($id);
        $this->designation = $product->designation;
        $this->price_achat = $product->price_achat;
        $this->price_vente = $product->price_vente;
        $this->description = $product->description;
        $this->supplier_id = $product->supplier_id;
    }

    // Mettre à jour le produit
    public function update()
    {
        $this->validate([
            'designation' => 'required|string|max:255',
            'price_achat' => 'required|numeric',
            'price_vente' => 'required|numeric',
            'description' => 'required|string',
            'supplier_id' => 'required|exists:suppliers,id',
        ],[]);

        $product = Product::find($this->editId);
        $product->update([
            'designation' => $this->designation,
            'price_achat' => $this->price_achat,
            'price_vente' => $this->price_vente,
            'description' => $this->description,
            'supplier_id' => $this->supplier_id,
        ]);
        flash()->success('Opération reussie produit Modifier');
        $this->cancelEdit();
        
        
    }

    // Annuler l'édition
    public function cancelEdit()
    {
        $this->editId = null;
        $this->reset(['designation', 'price_achat', 'price_vente', 'description', 'supplier_id']);
    }

    public function render()
    {
        $query = Product::query();

        if ($this->search) {
            $query->where('designation', 'like', '%' . $this->search . '%')
                  ->orWhere('description', 'like', '%' . $this->search . '%');
        }

        $products = $query->paginate(2);
        $suppliers = Supplier::all(); // Pour la liste déroulante des fournisseurs

        return view('livewire.list-product-livewire', [
            'products' => $products,
            'suppliers' => $suppliers,
        ]);
    }
}