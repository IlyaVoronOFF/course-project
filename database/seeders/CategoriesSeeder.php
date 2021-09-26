<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [
            [
                'name' => 'Смартфоны',
                'alias' => 'smartphones',
            ],
            [
                'name' => 'Планшеты',
                'alias' => 'tablets',
            ],
            [
                'name' => 'Смарт-часы',
                'alias' => 'smartwatches',
            ],
            [
                'name' => 'Фотоаппараты',
                'alias' => 'foto_cameras',
            ],
            [
                'name' => 'Видеокамеры',
                'alias' => 'video_cameras',
            ],
            [
                'name' => 'Экшн-камеры',
                'alias' => 'action_cameras',
            ],
            [
                'name' => 'Ноутбуки',
                'alias' => 'notebooks',
            ],
            [
                'name' => 'Комплектующие для ПК',
                'alias' => 'accessories_pc',
            ],
            [
                'name' => 'Аксессуары',
                'alias' => 'accessories',
            ],
        ];

        return $data;
    }
}
