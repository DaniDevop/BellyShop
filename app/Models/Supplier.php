<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
