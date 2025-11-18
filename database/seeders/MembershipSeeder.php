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
                'name' => 'Zyra Basic',
                'tier_id' => 1,
                'price' => 10000,
                'daypass' => '4',
                'credits' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Zyra Flex',
                'tier_id' => 2,
                'price' => 25000,
                'daypass' => '8',
                'credits' => '3',
                'created_at' => now(),
                'update_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Zyra Premium',
                'tier_id' => 2,
                'price' => 40000,
                'daypass' => '12',
                'credits' => '5',
                'created_at' => now(),
                'update_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Zyra Premium',
                'tier_id' => 3,
                'price' => 60000,
                'daypass' => '16',
                'credits' => '8',
                'created_at' => now(),
                'update_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Zyra Corporate',
                'tier_id' => 4,
                'price' => 80000,
                'daypass' => '22',
                'credits' => '10',
                'created_at' => now(),
                'update_at' => now(),
            ],
            [
                'id' => 6,
                'name' => 'Zyra Vip',
                'tier_id' => 4,
                'price' => 100000,
                'daypass' => 'ilimitado',
                'credits' => '14',
                'created_at' => now(),
                'update_at' => now(),
            ],
        ]);
    }
}
