<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    protected $guarded=[];
    public function pet()
    {
        return $this->belongsTo(Pet::class,'pet_id','id');
    }
}
