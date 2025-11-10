<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('memberships')->insert([
            [
                'id' => 1,
                'name' => 'poco frecuente',
                'category' => 'basic',
                'price' => 7000,
                'daypass' => '4',
                'credits' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'platinum',
                'category' => 'basic',
                'price' => 45000,
                'daypass' => '14',
                'credits' => '4',
                'created_at' => now(),
                'update_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'vip',
                'category' => 'gold',
                'price' => 80000,
                'daypass' => 'ilimitado',
                'credits' => '10',
                'created_at' => now(),
                'update_at' => now(),
            ],
        ]);
    }
}
