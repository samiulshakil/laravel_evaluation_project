<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductInfo;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::create([
            'product_name' => 'Watch',
            'product_slug' => 'watch',
        ]);

        ProductInfo::create([
            'product_id' => $product->id,
            'product_slug' => $product->product_slug,
            'quantity' => 5,
            'gender' => 'Man',
            'color' => 'Red',
            'size' => 'M',
            'price' => 200,
        ]);

        ProductInfo::create([
            'product_id' => $product->id,
            'product_slug' => $product->product_slug,
            'quantity' => 3,
            'gender' => 'Man',
            'color' => 'Black',
            'size' => 'S',
            'price' => 300,
        ]);
    }
}
