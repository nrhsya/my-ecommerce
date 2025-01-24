<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'T-shirts & Polos',
            'Shirts',
            'Jeans & Trousers',
            'Sweaters & Hoodies',
            'Suits & Blazers',
            'Activewear',
            'Underwear & Loungewear',
            'Shoes',
            'Accessories (Belts, Ties, Hats, etc.)',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
