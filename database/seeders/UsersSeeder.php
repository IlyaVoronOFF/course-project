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
                'password' => '$2a$10$eBYdAAo1VYmE9GayOEN3p.d32PylIGcP1YMlvQQPB8rFJDO3sMkbS', // 1111
                'role_id' => 1,
            ],
            [
                'firstname' => 'Егор',
                'lastname' => 'Егоров',
                'email' => 'egor@bk.ru',
                'login' => 'egor',
                'password' => '$2a$10$tjj.IjrpQc/gJF7xLFsm3OO2ZHgm4M.r.7aL5Fo2fDAvJDlNWrxwS', // 2222
                'role_id' => 2,
            ],
            [
                'firstname' => 'Павел',
                'lastname' => 'Павлов',
                'email' => 'pavel@bk.ru',
                'login' => 'pavel',
                'password' => '$2a$10$kEUwWRtpZNhDaUbokXAXdeyZxZJO1zL14ous8t227qAauEuHMc5aq', // 3333
                'role_id' => 3,
            ],
            [
                'firstname' => 'Василий',
                'lastname' => 'Васильев',
                'email' => 'vasya@bk.ru',
                'login' => 'vasya',
                'password' => '$2a$10$oTbe7mDnZfZsgjm.pkMgY.o.agsE79Rcw4lT7ydR7joH.6lSlXJ76', // 4444
                'role_id' => 3,
            ],
        ];

        return $data;
    }
}