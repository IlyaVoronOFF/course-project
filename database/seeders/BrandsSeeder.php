<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert($this->getData());
    }

    public function getData(): array
    {
        $faker = Factory::create();
        $data = [];

        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'country_id' => rand(1, 50),
                'name' => $faker->company(),
                'description' => $faker->text(250),
            ];
        }

        return $data;
    }
}
