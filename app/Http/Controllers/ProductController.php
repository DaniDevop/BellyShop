<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Supplier;
class ProductController extends Controller
{
    

    public function store(){

        $suppliers=Supplier::all();
        //dd(Product::all());
        return view('product.store',[
            'suppliers'=>$suppliers
        ]);
    }

    public function index(){
        $products=Product::paginate(5);
        return view('product.index',[
            'products'=>$products
        ]);
    }

    public function addProduct(ProductRequest $products){

        //dd($products);
        $product =new Product();
        $product->designation=$products->designation;
        $product->price_achat=$products->price_achat;
        $product->price_vente=$products->price_vente;
        $product->description=$products->description;
        $product->supplier_id=$products->supplier_id;
        if($products->hasFile('image_first')){
            $product->image_first=$products->file('image_first')->store('product','public');
        }
        if($products->hasFile('image_two')){
            $product->image_twot=$products->file('image_two')->store('product','public');
        }
        $product->save();
       flash()->info('Produit ajouté avec success !');
       return back();

    }
}
