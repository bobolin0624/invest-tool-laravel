<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id'         => '11111111-1111-1111-1111-111111111111',
            'email'      => 'demo@example.com',
            'google_id'  => 'google-demo-id',
            'name'       => 'Demo User',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
