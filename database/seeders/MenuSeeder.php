<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [
            [
                'title' => 'Главная',
                'link' => '/',
                'alias' => 'home',

            ],
            [
                'title' => 'Каталог товаров',
                'link' => '/catalog',
                'alias' => 'catalog_products',
            ],
            [
                'title' => 'Доставка',
                'link' => '/delivery',
                'alias' => 'delivery',
            ],
            [
                'title' => 'Оплата',
                'link' => '/payment',
                'alias' => 'payment',
            ],
            [
                'title' => 'О нас',
                'link' => '/about_us',
                'alias' => 'about_us',
            ],
            [
                'title' => 'Контакты',
                'link' => '/contacts',
                'alias' => 'contacts',
            ],
        ];

        return $data;
    }
}
