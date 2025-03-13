<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class ListProductHome extends Component
{
    use WithPagination;



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

        
        return view('livewire.client.list-product-home',[
            'products'=>Product::paginate(4)
        ]);
    }
}
