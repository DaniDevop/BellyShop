<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class ClientProductList extends Component
{
    use WithPagination;

    public string $search='';

    public function addProductToPanier($id)
    {
        // Récupérer le produit
        $product = Product::find($id);
    
        // Vérifier si le produit existe
        if (!$product) {
            flash()->warning("Produit introuvable");

        }
        $this->addCart($id,$product);
        
        flash()->success("Produit ajouté au panier");
    }

    public function addCart($id,Product $product){
        $cart = session()->get('cart', []);
    
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'id' => $product->id,
                'name' => $product->designation,
                'price' => $product->price_vente,
                'quantity' => 1, // Quantité initiale
                'image' => $product->image_first, // Image du produit
            ];
        }
            session()->put('cart', $cart);
    }
    public function render()
    {

        $query = Product::query();

        if ($this->search) {
            $query->where('designation', 'like', '%' . $this->search . '%')
                  ->orWhere('description', 'like', '%' . $this->search . '%')
                  ->orWhere('price_vente', 'like', '%' . $this->search . '%')
                  ;
        }

        $products = $query->paginate(2);

        return view('livewire.client.client-product-list',[
            'products'=>$products
        ]);
    }
}
