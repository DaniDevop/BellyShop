<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{


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
