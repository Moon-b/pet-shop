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
        return $this->belongsTo(PetCategory::class,'pet_category_id','id');
    }
    public function post()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
