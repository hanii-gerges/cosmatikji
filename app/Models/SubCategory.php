<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_id',
        'name'
    ];


    // function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }

    function products()
    {
        return $this->hasMany(Product::class);
    }
}
