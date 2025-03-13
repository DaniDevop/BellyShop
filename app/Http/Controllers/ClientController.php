<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ClientController extends Controller
{



    public function detailsProduct($id){
        $product=Product::find($id);
        if(!$product){
            flash()->warning("Produit introuvable ! ! !");
            return back();
        }
        return view("client.details",[
            'product'=>$product
        ]);
    }
    public function index(){
      
        return view("client.index");
    }

    public function product(){
        return view("client.product");
    }


    public function register(){
        return view("client.register");
    }

    public function login(){
        return view("client.login");
    }


    public function cart(){

        return view("client.cart");
    }

    public function client(){
        return view("client.client");
    }
    //
}
