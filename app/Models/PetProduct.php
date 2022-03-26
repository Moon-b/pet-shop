<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetProduct extends Model
{
    use HasFactory;
    // protected $fillable=['pet_product_name','pet_product_details','pet_product_picture','pet_product_price','pet_product_status'];
    protected $gaurded=[];
}
