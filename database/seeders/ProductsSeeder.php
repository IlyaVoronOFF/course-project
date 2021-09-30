<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert($this->getData());
    }

    public function getData(): array
    {
        $faker = Factory::create();
        $data = [];

        for ($i = 1; $i < 100; $i++) {
            $data[] = [
                'country_id' => rand(1, 50),
                'name' => 'Товар №' . $i,
                'intro_desc' => $faker->text(50),
                'description' => $faker->text(250),
                'price' => $faker->numerify('####'),
                'published' => 1
            ];
        }

        return $data;
    }
}
