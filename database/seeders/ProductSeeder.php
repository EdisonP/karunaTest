<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // Seed default db data
    public function run()
    {
        Products::create([
            'name' => 'C',
            'price' => '56.89',
            'details' => 'Details of product C',
            'published' => '1',
        ]);

        Products::create([
            'name' => 'B',
            'price' => '23.33',
            'details' => 'B details',
            'published' => '1',
        ]);

        Products::create([
            'name' => 'A',
            'price' => '60.56',
            'details' => 'A detail....',
            'published' => '0',
        ]);
    }
}
