<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetCategory extends Model
{
    use HasFactory;
    protected $fillable=['pet_categories_name','details','status'];
    // protected $gaurded=[];
}
