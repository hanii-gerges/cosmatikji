<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'ادوات متخصصة'
        ]);

        Category::create([
            'name' => 'العناية بالبشرة'
        ]);

        Category::create([
            'name' => 'العناية بالجسم'
        ]);

        Category::create([
            'name' => 'العناية بالوجه'
        ]);

        Category::create([
            'name' => 'ميك اب'
        ]);
    }
}
