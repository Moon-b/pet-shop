<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    // protected $fillable=['pet_name','pet_breed','pet_size','pet_color','pet_life_span','pet_age','pet_height','rules','pet_weight','pet_health','pet_quality'];
    protected $guarded=[];

public function petcategory()
{
    return $this->belongsTo(PetCategory::class,'pet_categories_id','id');
}
}