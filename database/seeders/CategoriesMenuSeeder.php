<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories_menu')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [];

        for ($i = 1; $i < 10; $i++) {
            $data[] = [
                'category_id' => $i,
                'menu_id' => 2,
            ];
        }

        return $data;
    }
}