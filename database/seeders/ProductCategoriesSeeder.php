<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [];

        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'category_id' => rand(1, 9),
                'product_id' => rand(1, 100),
            ];
        }

        return $data;
    }
}