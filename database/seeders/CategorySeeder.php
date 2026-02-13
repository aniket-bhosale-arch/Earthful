<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $categories = [
            'Multivitamin',
            'Plant Protein',
            'Gut Health',
            'Hair Care',
            'Sleep Health',
            'Skin Care',
        ];

        foreach ($categories as $name) {
            Category::firstOrCreate(
                ['slug' => Str::slug($name)],
                ['name' => $name]
            );
        }

        // $categories = [
        //     'Multivitamin' => [
        //         'Women Multivitamin 40+',
        //         'Women Multivitamin 18+',
        //         'Teen-Multivitamin',
        //         'Teen Multivitamin',
        //     ],

        //     'Plant Protein' => [
        //         'Honest Plant Protein',
        //         'Indonesian Cocoa',
        //         'Alphonso-Mango',
        //         'Coffee-Mocha',
        //     ],

        //     'Gut Health' => [],          // ❗ No sub-categories
        //     'Hair Care' => [],
        //     'Sleep Health' => [],
        //     'Skin Care' => [],
        // ];

        // foreach ($categories as $parentName => $children) {

        //     // 1️⃣ Create / get parent
        //     $parent = Category::firstOrCreate(
        //         ['slug' => Str::slug($parentName)],
        //         [
        //             'name' => $parentName,
        //             'parent_id' => null
        //         ]
        //     );

        //     // 2️⃣ Create children ONLY if they exist
        //     foreach ($children as $childName) {
        //         Category::firstOrCreate(
        //             ['slug' => Str::slug($childName)],
        //             [
        //                 'name' => $childName,
        //                 'parent_id' => $parent->id
        //             ]
        //         );
        //     }
        // }
    }
}
