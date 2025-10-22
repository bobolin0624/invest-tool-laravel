<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InvestmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('investments')->insert([
            [
                'id'             => Str::uuid(),
                'user_id'        => '11111111-1111-1111-1111-111111111111',
                'type'           => 'ETF',
                'name'           => '0050',
                'purchase_cost'  => 30000,
                'purchase_date'  => '2024-01-15',
                'shares'         => 100,
                'current_value'  => 32000,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'id'             => Str::uuid(),
                'user_id'        => '11111111-1111-1111-1111-111111111111',
                'type'           => 'FUND',
                'name'           => '野村環球基金',
                'purchase_cost'  => 50000,
                'purchase_date'  => '2023-09-01',
                'shares'         => 2000,
                'current_value'  => 54000,
                'created_at'     => now(),
                'updated_at'     => now(),
            ]
        ]);
    }
}
