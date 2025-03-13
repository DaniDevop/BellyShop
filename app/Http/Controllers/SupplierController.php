<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Http\Requests\StoreSupllierRequest;
class SupplierController extends Controller
{
    //


    public function index(){
        $suppliers=Supplier::paginate(5);

        return view('supplier.index',compact('suppliers'));
    }

    public function store(){
          
        return view('supplier.store');
    }





    public function addSupplier(StoreSupllierRequest $data){
          
        $supplier= new Supplier();

        $supplier->name=$data->name;
        $supplier->email=$data->email;
        $supplier->tel=$data->tel;
        $supplier->adresse=$data->adresse;
        $supplier->entreprise_name=$data->entreprise_name;
        if($data->hasFile('profile')){

            $supplier->profile=$data->file('profile')->store('supplier','public');
        }
        $supplier->profile="";
        $supplier->save();
        flash()->success('Operation completed successfully.');
         
        return back();
    }
}
