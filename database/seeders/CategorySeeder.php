<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $categories = [
            ['name' => 'Informática'],
            ['name' => 'Eletrônico'],
            ['name' => 'Ferramentas'],
            ['name' => 'Roupas'],
        ];

        foreach ($categories as $arr) {
            Category::create($arr);
        }
    }
}
