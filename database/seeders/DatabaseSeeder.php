<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $products =[ 
        [
            'name' => 'mac book air',
            'details' => 'Apple MacBook Pro (13inch, Intel i5 Chip, 16GB RAM, 1TB SSD Storage, Magic Keyboard, four Thunderbolt 3 ports) Space Grey',
            'description' => 'MacBook Air with M1 is an incredibly portable laptop — it’s nimble and quick, with a silent, fanless design and a beautiful Retina display. Thanks to its slim profile and all‑day battery life, this Air moves at the speed of lightness.',
            'brand' => 'apple',
            'price' => 2499,
            'shipping_cost' => 40,
            'img_path' => 'storage/product.png',

       ],
       [
            'name' => 'samsung galaxy book pro',
            'details' => 'latest Intel® 11th Gen Core™ processor that’s also Intel® Evo™ certified, And with up to 512 GB of storage',
            'description' => 'This lightweight laptop is also lightning fast. Quickly do everything you need—from downloading large files fast, to watching streams with no lag, to multitasking and more—all with the latest Intel® 11th Gen Core™ processor that’s also Intel® Evo™ certified, so you know it works on a premium platform. And with up to 512 GB of storage, you’ll have the space you need when you need it.',
            'brand' => 'samsung',
            'price' => 1400,
            'shipping_cost' => 30,
            'img_path' => 'storage/product2.png',

        ]
        ];

         foreach($products as $key => $value )  
         {
            Product::Create($value);
         }                                                                        
    }
}
