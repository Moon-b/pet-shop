<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function product()
    {
        return $this->belongsTo(PetProduct::class,'id','pet_product_id');
    }
}
