<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\MultiPic;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    function users()
    {
        return $this->belongsToMany(User::class , 'products_users');
    }

    function subCategory()
    {
        return $this->belongsTo(SubCategory::class,'sub_category_id' , 'id');
    }

    function multipic()
    {
        return $this->hasMany(MultiPic::class);
    }

    function reviews()
    {
        return $this->hasMAny(Review::class);
    }
}
