<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'sophi',
                'username' => 'sophi',
                'password' => bcrypt('sophisophi'),
                'is_admin' => true,
            ],
        ];

    }
}
