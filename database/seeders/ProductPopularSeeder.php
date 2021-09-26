<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPopularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_popular')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [];

        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'product_id' => rand(1, 100),
                'count' => rand(1, 9999),
            ];
        }

        return $data;
    }
}