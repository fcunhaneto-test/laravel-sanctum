<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $categories = [
            ['name' => 'Mouse'],
            ['name' => 'Monitor'],
            ['name' => 'Impressora'],
            ['name' => 'Teclado'],
        ];

        foreach ($categories as $arr) {
            Product::create($arr);
        }
    }
}
