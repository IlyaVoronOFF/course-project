<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert($this->getData());
    }

    public function getData(): array
    {
        $faker = Factory::create();
        $data = [];

        for ($i = 0; $i < 50; $i++) {
            $country = $faker->unique()->country();
            $data[] = [
                'name' => $country,
                '3_code' => substr($country, 0, 3),
                '2_code' => substr($country, 0, 2),
            ];
        }

        return $data;
    }
}
