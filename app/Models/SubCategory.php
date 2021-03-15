<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class SubCategory extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'id',
        'category_id',
        'name'
    ];


    function category()
    {
        return $this->belongsTo(Category::class);
    }

    function products()
    {
        return $this->hasMany(Product::class);
    }
}
