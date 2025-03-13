<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    // Champs remplissables (mass assignment)
    protected $fillable = [
        'designation',
        'price_achat',
        'price_vente',
        'profile',
        'image_two',
        'description',
        'supplier_id', // Assurez-vous que ce champ existe
    ];

    // Relation avec le modèle Supplier
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }
}