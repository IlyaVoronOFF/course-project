<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_statuses')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [
            [
                'name' => 'Не обработано',
            ],
            [
                'name' => 'В работе',
            ],
            [
                'name' => 'Завершён',
            ],

            [
                'name' => 'Отменён',
            ],
        ];

        return $data;
    }
}
