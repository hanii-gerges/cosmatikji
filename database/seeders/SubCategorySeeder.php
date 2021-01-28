<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::create([
            'name' => 'ادوات كهربائية',
            'category_id' => '1'
        ]);

        SubCategory::create([
            'name' => 'ادوات يدوية',
            'category_id' => '1'
        ]);



        SubCategory::create([
            'name' => 'شامبو',
            'category_id' => '2'
        ]);

        SubCategory::create([
            'name' => 'صبغات الشعر ولوازمها',
            'category_id' => '2'
        ]);

        SubCategory::create([
            'name' => 'كوندشنر\ملطف ومنعم',
            'category_id' => '2'
        ]);

        SubCategory::create([
            'name' => 'معالج شعر',
            'category_id' => '2'
        ]);

        SubCategory::create([
            'name' => 'زيوت الشعر',
            'category_id' => '2'
        ]);

        SubCategory::create([
            'name' => 'سيروم الشعر',
            'category_id' => '2'
        ]);

        SubCategory::create([
            'name' => 'كريم الشعر',
            'category_id' => '2'
        ]);


        SubCategory::create([
            'name' => 'كريم',
            'category_id' => '3'
        ]);
        SubCategory::create([
            'name' => 'العناية بالقدمين',
            'category_id' => '3'
        ]);
        SubCategory::create([
            'name' => 'العناية باليدين',
            'category_id' => '3'
        ]);
        SubCategory::create([
            'name' => 'مزيل عرق',
            'category_id' => '3'
        ]);
        SubCategory::create([
            'name' => 'سكرب',
            'category_id' => '3'
        ]);
        SubCategory::create([
            'name' => 'سيروم',
            'category_id' => '3'
        ]);
        SubCategory::create([
            'name' => 'عطور الجسم',
            'category_id' => '3'
        ]);


        SubCategory::create([
            'name' => 'كريم',
            'category_id' => '4'
        ]);
        SubCategory::create([
            'name' => 'مقشر',
            'category_id' => '4'
        ]);
        SubCategory::create([
            'name' => 'سيروم',
            'category_id' => '4'
        ]);
        SubCategory::create([
            'name' => 'ماسك الوجه',
            'category_id' => '4'
        ]);


        SubCategory::create([
            'name' => 'شفاه',
            'category_id' => '5'
        ]);
        SubCategory::create([
            'name' => 'العيون',
            'category_id' => '5'
        ]);
        SubCategory::create([
            'name' => 'الوجه',
            'category_id' => '5'
        ]);
        SubCategory::create([
            'name' => 'ادوات ميك اب',
            'category_id' => '5'
        ]);
    }
}
