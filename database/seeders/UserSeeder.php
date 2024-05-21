<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'role_id' => 1,
                'password' => Hash::make('123'),
                'no_niat' => '2020.32.00152',
                'phone' => '085123432445',
            ],
            [
                'name' => 'Sudarja',
                'username' => 'sudarja',
                'email' => 'sudarja@gmail.com',
                'role_id' => 2,
                'password' => Hash::make('123'),
                'no_niat' => '2020.32.00155',
                'phone' => '087123432445',
            ],
        ];

        DB::table('users')->insert($data);
    }
}
