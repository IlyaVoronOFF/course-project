<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [];

        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'user_id' => rand(3, 4),
                'product_id' => rand(1, 100),
                'count' => rand(1, 20),
            ];
        }

        return $data;
    }
}