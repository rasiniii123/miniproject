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
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' =>  Hash::make('123456789'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'username' => 'User',
            'email' => 'user@gmail.com',
            'password' =>  Hash::make('123456789'),
            'role' => 'user',
        ]);
        DB::table('users')->insert([
            'username' => 'Ryaannn',
            'email' => 'blitaryanendipratama@gmail.com',
            'password' =>  Hash::make('123456789'),
            'role' => 'user',
        ]);
    }
}
