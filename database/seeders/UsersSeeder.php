<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Tedi Hanafiah',
            'username' => 'admin',
            'nik' => '3603181201020008',
            'password' => Hash::make('admin123'),
            'level' => 'Admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}