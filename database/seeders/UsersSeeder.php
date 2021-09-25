<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [
            [
                'firstname' => 'Иван',
                'lastname' => 'Иванов',
                'email' => 'ivan@bk.ru',
                'login' => 'ivan',
                'password_hash' => '1111',
                'role_id' => 1,
            ],
            [
                'firstname' => 'Егор',
                'lastname' => 'Егоров',
                'email' => 'egor@bk.ru',
                'login' => 'egor',
                'password_hash' => '2222',
                'role_id' => 2,
            ],
            [
                'firstname' => 'Павел',
                'lastname' => 'Павлов',
                'email' => 'pavel@bk.ru',
                'login' => 'pavel',
                'password_hash' => '3333',
                'role_id' => 3,
            ],
            [
                'firstname' => 'Василий',
                'lastname' => 'Васильев',
                'email' => 'vasya@bk.ru',
                'login' => 'vasya',
                'password_hash' => '4444',
                'role_id' => 3,
            ],
        ];

        return $data;
    }
}