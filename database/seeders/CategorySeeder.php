<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::firstOrCreate([
            'name' => 'Electronics',
            'slug' => Str::slug('Electronics'),
            'description' => 'All electronic products'
        ]);

        Category::firstOrCreate([
            'name' => 'Clothing',
            'slug' => Str::slug('Clothing'),
            'description' => 'Men and women clothing'
        ]);
    }
}

