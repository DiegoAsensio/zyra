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
        DB::table('users')->insert([
            [
                'name' => 'Elias',
                'email' => 'elias@mail.com',
                'password' => Hash::make('elias123'),
                'role' => 'admin'
            ],
            [
                'name' => 'Diego',
                'email' => 'diego@mail.com',
                'password' => Hash::make('diego123'),
                'role' => 'admin'
            ],
            [
                'name' => 'Santi',
                'email' => 'santi@mail.com',
                'password' => Hash::make('santi123'),
                'role' => 'user',
            ],
        ]);
    }
}
