<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            'Black',
            'White',
            'Grey',
            'Navy Blue',
            'Red',
            'Blue',
            'Green',
            'Yellow',
            'Pink',
            'Purple',
            'Orange',
            'Brown',
            'Beige',
            'Khaki',
            'Burgundy',
            'Teal',
            'Turquoise',
            'Ivory',
            'Charcoal',
            'Lilac',
        ];

        foreach ($colors as $color) {
            Color::create(['name' => $color]);
        }
    }
}
