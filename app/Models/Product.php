<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Product extends Model
{
    use HasFactory;

    function users()
    {
        return $this->belongsToMany(User::class , 'products_users');
    }

    function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
