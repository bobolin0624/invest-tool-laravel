<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DividendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $investments = DB::table('investments')->pluck('id');

        foreach ($investments as $invId) {
            DB::table('dividends')->insert([
                'id'              => Str::uuid(),
                'investment_id'   => $invId,
                'dividend_date'   => '2024-04-30',
                'dividend_amount' => 450,
                'created_at'      => now(),
                'updated_at'      => now(),
            ]);
        }
    }
}
