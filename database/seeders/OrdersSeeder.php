<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert($this->getData());
    }

    public function getData(): array
    {
        $faker = Factory::create();
        $data = [];

        for ($i = 1; $i < 21; $i++) {
            $data[] = [
                'status_id' => rand(1, 4),
                'name' => 'Заказ №' . $i,
                'email' => $faker->email(),
                'adress' => $faker->address(),
                'sum_order' => $faker->numerify('#####'),
            ];
        }

        return $data;
    }
}
