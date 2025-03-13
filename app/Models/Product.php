<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    
    protected $fillable=[
       'designation',
       'supplier_id',
       'price_achat',
       'price_vente',
       'image_first',
       'image_two',
       'description'
    ];
    public function supplier():Belongtso {
        return $this->belongsTo(Supplier::class);
    }
}
