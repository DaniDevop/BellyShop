<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    

    public function home(){
        return view('index');
    }
    public function loginPage() {
         
        /* User::create([
            'name'=>'ADMIN',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin'),
            'tel'=>'0000',
            'role'=>'ADMIN',
            'profile'=>''
        ]); */
        return view('admin.login');
    }


    public function doLogin(Request $request){

        $userValidate=$request->validate([
            'nameOrEmail'=>'required',
            'password'=>'required'
        ],[
            'nameOrEmail.required'=>'L identifiant est requis dabs le formulaire',
            'password.required'=>'Le mot de passe be peut etre vide',

        ]);


        if(!Auth::attempt(['name'=>$request->nameOrEmail,'password'=>$request->password]) 
        &&  !Auth::attempt(['email'=>$request->nameOrEmail,'password'=>$request->password])){

            return back()->with('error','Identifiant invalide');

        }
        return redirect('/');

    }


    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
