<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    
   protected $fillabe=[
    'name',
    'email',
    'entreprise_name',
    'tel',
    'adresse',
    'profile'
];

public function product():HasMany {

    return $this->hasMany(Product::class);
}
}
