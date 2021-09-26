<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [
            [
                'name' => 'admin',
            ],
            [
                'name' => 'manager',
            ],
            [
                'name' => 'customer',
            ],
        ];

        return $data;
    }
}