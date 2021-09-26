<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_items')->insert($this->getData());
    }

    public function getData(): array
    {
        $faker = Factory::create();
        $data = [];

        for ($i = 0; $i < 50; $i++) {
            $count = rand(1, 99);
            $price = $faker->numerify('###');

            $data[] = [
                'order_id' => $i % 20 + 1,
                'product_id' => $i + 1,
                'count' => $count,
                'price' =>  $price,
                'total_price' => $count * $price,
            ];
        }

        return $data;
    }
}
