<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategory(Category $category)
    {
        $products = SubCategory::where('category_id',$category->id)->first()->products;
        
        return view('categories.show')->with('category',$category)
                                      ->with('products',$products);
    }

    public function showSubCategory(Category $category,$subcategory_id)
    {

        $products = SubCategory::findOrFail($subcategory_id)->products;
        return view('categories.show');
    }

}
