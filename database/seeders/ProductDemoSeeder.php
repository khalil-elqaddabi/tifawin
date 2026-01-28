<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductDemoSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop HP',
            'description' => 'High performance laptop',
            'price' => 8500,
            'stock' => 10,
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'T-shirt',
            'description' => 'Cotton T-shirt',
            'price' => 250,
            'stock' => 50,
            'category_id' => 2
        ]);
        Product::create([
            'name' =>'iphone 18 pro max',
            'description' => 'apple product',
            'price' => 2100,
            'stock' => 10,
            'category_id' => 1
        ]);
         Product::create([
            'name' =>'iphone 17 pro max',
            'description' => 'apple product',
            'price' => 2100,
            'stock' => 10,
            'category_id' => 1
        ]);
    }
}

