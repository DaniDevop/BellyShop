<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
                'designation'=>'required',
                'price_achat'=>'required',
                'price_vente'=>'required',
                'image_first'=>'required|image|mimes:png,jpg,jpeg',
                'image_two'=>'nullable|image|mimes:png,jpg,jpeg',
                'description'=>'nullable',
                'supplier_id'=>'required|exists:suppliers,id',
            ];
        
    }

    public function messages():array{

        return [
            'designation.required'=>'Le nom du produit est requis dans le formulaire',
            'price_achat.required'=>'Le prix d achat est requis ',
            'price_vente.required'=>'Le prix de vente est requis ',
            'image_first.image'=>'Le fichier doit etre une image',
            'image_first.mimes'=>'Le fichier doit etre de type jpg,jpeg,png',
            'image_two.image'=>'Le fichier doit etre une image',
            'image_two.mimes'=>'Le fichier doit etre de type jpg,jpeg,png',
            'supplier_id.required'=>'Veuillez entré le ',
            'supplier_id.exists'=>'Le fournisseur n existe plus dans la base de donnée !',

        ];
    }
}
