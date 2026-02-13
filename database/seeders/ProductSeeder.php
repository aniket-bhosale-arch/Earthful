<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use Illuminate\Support\Str;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // dd('ProductSeeder running');
    
    

   

 $multivitamin = Category::where('slug', 'multivitamin')->firstOrFail();
 $product = Product::firstOrCreate(
   
    ['slug' => Str::slug('Women-Multivitamin-40+')],
    [
    'category_id' => $multivitamin->id, // multivitamin
    'name' => 'Women Multivitamin 40+',
    'price' => 1199,
    'short_description' => 'Daily Nutrition for Women nearing Menopause',
    'description' => '
• Unique vitamin formula sourced entirely from Nature  
• Vegetarian Capsule shell 
• 60 Capsules (30 day pack)
• Nothing but nature  
• FSSAI & GMP approved
']
);
$images = [
    'assets/productshowcase/men-multi1.jpg',
    'assets/productshowcase/men-multi2.jpg',
    'assets/productshowcase/men-multi6.jpg',
    'assets/productshowcase/men-multi4.jpg',
    'assets/productshowcase/men-multi5.jpg',
];
foreach ($images as $img) {
    ProductImage::firstOrCreate([
        'product_id' => $product->id,
        'image' => $img
    ]);
}


$multivitamin = Category::where('slug', 'multivitamin')->firstOrFail();

$product = Product::firstOrCreate(
    
    ['slug' => Str::slug('Women-Multivitamin-18+')],
[
'category_id' => $multivitamin->id, // multivitamin
'name' => 'Women Multivitamin 18+',
'price' => 1199,
'short_description' => 'Daily Nutrition for Women nearing Menopause',
'description' => '
• Unique vitamin formula sourced entirely from Nature  
• Vegetarian Capsule shell 
• 60 Capsules (30 day pack)
• Nothing but nature  
• FSSAI & GMP approved
']
);

$images = [
    'assets/productshowcase/men-multi1.jpg',
    'assets/productshowcase/men-multi2.jpg',
    'assets/productshowcase/men-multi6.jpg',
    'assets/productshowcase/men-multi4.jpg',
    'assets/productshowcase/men-multi5.jpg',
];
foreach ($images as $img) {
    ProductImage::firstOrCreate([
        'product_id' => $product->id,
        'image' => $img
    ]);
}


$multivitamin = Category::where('slug', 'multivitamin')->firstOrFail();
$product = Product::firstOrCreate(

   ['slug' => Str::slug('Teen-Multivitamin')],
[
'category_id' => $multivitamin->id, // multivitamin
'name' => 'Teen Multivitamin ',
'price' => 1199,
'short_description' => 'Daily Nutrition for Women nearing Menopause',
'description' => '
• Unique vitamin formula sourced entirely from Nature  
• Vegetarian Capsule shell 
• 60 Capsules (30 day pack)
• Nothing but nature  
• FSSAI & GMP approved
']
);

$images = [
    'assets/productshowcase/men-multi1.jpg',
    'assets/productshowcase/men-multi2.jpg',
    'assets/productshowcase/men-multi6.jpg',
    'assets/productshowcase/men-multi4.jpg',
    'assets/productshowcase/men-multi5.jpg',
];
foreach ($images as $img) {
    ProductImage::firstOrCreate([
        'product_id' => $product->id,
        'image' => $img
    ]);
}


$Protein = Category::where('slug', 'plant-protein')->firstOrFail();
$product = Product::firstOrCreate(

['slug' => Str::slug('Honest-Plant-Protein')],
    
[
'category_id' => $Protein->id, // Protein
'name' => 'Honest Plant Protein',
'price' => 1199,
'short_description' => 'Daily Protein for Men & Women',
 'description' => '
• Contains all essential amino acids  
• 100% plant based  
• No sugar, no preservatives  
• FSSAI & GMP approved']
);

$images = [
    'assets/productshowcase/pp1.jpg',
    'assets/productshowcase/pp2.jpg',
    'assets/productshowcase/pp3.jpg',
    'assets/productshowcase/pp4.jpg',
    'assets/productshowcase/pp5.jpg',
];
foreach ($images as $img) {
    ProductImage::firstOrCreate([
        'product_id' => $product->id,
        'image' => $img
    ]);
}


$Protein = Category::where('slug', 'plant-protein')->firstOrFail();
$product = Product::firstOrCreate(
 
    ['slug' => Str::slug('Honest-Plant-Protein-Indonesian-Cocoa')],
[
'category_id' => $Protein->id, // Protein
'name' => 'Indonesian Cocoa',
'price' => 1499,
'short_description' => 'Daily Protein for Men & Women',
'description' => '
• Contains all essential amino acids  
• 100% plant based  
• No sugar, no preservatives  
• FSSAI & GMP approved']
);
$images = [
    'assets/productshowcase/pp1.jpg',
    'assets/productshowcase/pp2.jpg',
    'assets/productshowcase/pp3.jpg',
    'assets/productshowcase/pp4.jpg',
    'assets/productshowcase/pp5.jpg',
];
foreach ($images as $img) {
    ProductImage::firstOrCreate([
        'product_id' => $product->id,
        'image' => $img
    ]);
}


$Protein = Category::where('slug', 'plant-protein')->firstOrFail();
$product = Product::firstOrCreate(
    ['slug' => Str::slug('Honest-Plant-Protein-Alphonso-Mango')],
[
'category_id' => $Protein->id, // Protein
'name' => 'Alphonso Mango',
'price' => 1699,
'short_description' => 'Daily Protein for Men & Women',
'description' => '
• Contains all essential amino acids  
• 100% plant based  
• No sugar, no preservatives  
• FSSAI & GMP approved']
);
$images = [
    'assets/productshowcase/pp1.jpg',
    'assets/productshowcase/pp2.jpg',
    'assets/productshowcase/pp3.jpg',
    'assets/productshowcase/pp4.jpg',
    'assets/productshowcase/pp5.jpg',
];
foreach ($images as $img) {
    ProductImage::firstOrCreate([
        'product_id' => $product->id,
        'image' => $img
    ]);
}


$Protein = Category::where('slug', 'plant-protein')->firstOrFail();
$product = Product::firstOrCreate(

['slug' => Str::slug('Honest-Plant-Protein-Coffee-Mocha')],
    
[
'category_id' => $Protein->id, // Protein
'name' => 'Coffee Mocha',
'price' => 1699,
'short_description' => 'Daily Protein for Men & Women',
'description' => '
• Contains all essential amino acids  
• 100% plant based  
• No sugar, no preservatives  
• FSSAI & GMP approved']
);

$images = [
    'assets/productshowcase/pp1.jpg',
    'assets/productshowcase/pp2.jpg',
    'assets/productshowcase/pp3.jpg',
    'assets/productshowcase/pp4.jpg',
    'assets/productshowcase/pp5.jpg',
];
foreach ($images as $img) {
    ProductImage::firstOrCreate([
        'product_id' => $product->id,
        'image' => $img
    ]);
}


$Gut = Category::where('slug', 'gut-health')->firstOrFail();

$product = Product::firstOrCreate(
    ['slug' => Str::slug('Gut Health Supplement')],
    
[
'category_id' => $Gut->id, // Gut Health
'name' => 'Gut Health',
'price' => 699,
'short_description' => 'Solution for Acidity & Constipation',
'description' => '
• Contains all essential amino acids  
• 100% plant based  
• No sugar, no preservatives  
• FSSAI & GMP approved']
);

$images = [
    'assets/productshowcase/gut1.jpg',
    'assets/productshowcase/gut2.jpg',
    'assets/productshowcase/gut3.jpg',
    'assets/productshowcase/gut4.jpg',
   
];
foreach ($images as $img) {
    ProductImage::firstOrCreate([
        'product_id' => $product->id,
        'image' => $img
    ]);
}

$Hair  = Category::where('slug', 'hair-care')->firstOrFail();
$product = Product::firstOrCreate(
    ['slug' => Str::slug('Hair Care Supplement')],
    
[
'category_id' => $Hair->id, //Hair Care
'name' => 'Hair Care',
'price' => 699,
'short_description' => 'With Biotin, DHT Blocker, Quercetin & More',
'description' => '
• Contains all essential amino acids  
• 100% plant based  
• No sugar, no preservatives  
• FSSAI & GMP approved']
);

$images = [
    'assets/productshowcase/hair1.jpg',
    'assets/productshowcase/hair2.jpg',
    'assets/productshowcase/hair3.jpg',
    'assets/productshowcase/hair4.jpg',
    'assets/productshowcase/hair5.jpg',
];
foreach ($images as $img) {
    ProductImage::firstOrCreate([
        'product_id' => $product->id,
        'image' => $img
    ]);
}


$Sleep = Category::where('slug', 'sleep-health')->firstOrFail();
$product = Product::firstOrCreate(
['slug' => Str::slug('Sleep Health Supplement')],
    
[
'category_id' => $Sleep->id, //Sleep Health
'name' => 'Sleep Health',
'price' => 699,
'short_description' => 'With Plant Melatonin & 5-HTP',
'description' => '
• Contains all essential amino acids  
• 100% plant based  
• No sugar, no preservatives  
• FSSAI & GMP approved']
);

$images = [
    'assets/productshowcase/sleep1.jpg',
    'assets/productshowcase/sleep2.jpg',
    'assets/productshowcase/sleep3.jpg',
    'assets/productshowcase/sleep4.jpg',
    
];
foreach ($images as $img) {
    ProductImage::firstOrCreate([
        'product_id' => $product->id,
        'image' => $img
    ]);
}


$Skin = Category::where('slug', 'skin-care')->firstOrFail();
$product = Product::firstOrCreate(
['slug' => Str::slug('Skin Care Supplement')],
    
[
'category_id' => $Skin->id, //Skin Care
'name' => 'Skin Care',
'price' => 699,
'short_description' => 'With Collagen, Omega3, Resveratrol & More',
'description' => '
• Contains all essential amino acids  
• 100% plant based  
• No sugar, no preservatives  
• FSSAI & GMP approved']
);

$images = [
    'assets/productshowcase/skin1.jpg',
    'assets/productshowcase/skin2.jpg',
    'assets/productshowcase/skin3.jpg',
    'assets/productshowcase/skin4.jpg',
    'assets/productshowcase/skin5.jpg',
];
foreach ($images as $img) {
    ProductImage::firstOrCreate([
        'product_id' => $product->id,
        'image' => $img
    ]);
}





    }
}
