<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
         
           [
            "name"=>"Hair Growth Blend",
            "slug"=>"Hair-Growth-Blend",
            "price"=>"725",
            "description"=>"With Biotin, DHT Blocker, Quercetin & More",
            "image"=>"http://localhost:8000/assets/productshowcase/hair1.jpg"
           ],
           [
            "name"=>"Sleep Aid Blend",
            "slug"=>"Sleep-Aid-Blend",
            "price"=>"699",
            "description"=>"With Plant Melatonin & 5-HTP",
            "image"=>"http://localhost:8000/assets/productshowcase/sleep1.jpg"
           ], 
           [
            "name"=>"Gut Reset Blend",
            "slug"=>"Gut-Reset-Blend",
            "price"=>"699",
            "description"=>"Solution for Acidity & Constipation",
            "image"=>"http://localhost:8000/assets/productshowcase/gut1.jpg"
           ], 
           [
            "name"=>"Multivitamin Men 18+",
            "slug"=>"Multivitamin-Men-18+",
            "price"=>"699",
            "description"=>"Daily Nutrition for Men over 18 years",
            "image"=>"http://localhost:8000/assets/productshowcase/men-multi1.jpg"
           ],
            [
            "name"=>"Honest Plant Protein",
            "slug"=>"Honest-Plant-Protein",
            "price"=>"1199",
            "description"=>"Daily Protein for Men & Women",
            "image"=>"http://localhost:8000/assets/productshowcase/pp1.jpg"
           ],
           [
            "name"=>"Skin Boost Blend",
            "slug"=>"Skin-Boost-Blend",
            "price"=>"749",
            "description"=>"With Collagen, Omega3, Resveratrol & More",
            "image"=>"http://localhost:8000/assets/productshowcase/skin1.jpg"
           ],
          


        ]);
    }
}
