<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupllierRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'email'=>'required|email|unique:suppliers,email',
            'profile'=>'nullable|image|mimes:png,jpg,jpeg',
            'adresse'=>'required',
            'entreprise_name'=>'required',
            'tel'=>'required|unique:suppliers,tel'
        ];
    }

    public function messages():array{

        return [
            'name.required'=>'Le nom est requis dans le formulaire',
            'email.required'=>'L email est requis dans le formulaire',
            'email.unique'=>'L email existe déjà dans la base de donnée',
            'profile.image'=>'Le fichier doit etre une image',
            'profile.mimes'=>'Le fichier doit etre de type jpg,jpeg,png',
            'adresse.required'=>'L adresse est requis',
            'entreprise_name.required'=>'Veuillez entré le nom de l entreprise',
            'tel.unique'=>'Le numéro de téléphone existe déjà',
            'tel.required'=>'Veuillez entrer le numéro de téléphone',
        ];
    }
}
